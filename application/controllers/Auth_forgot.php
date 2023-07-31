<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_forgot extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index(){

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if($this->form_validation->run() == false)
        {
            $data['title'] = 'Simatera Lupa Kata Sandi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/forgot-password');
            $this->load->view('templates/auth_footer');
        }else{
            $email = $this->input->post('email');
            $login_simatera = $this->db->get_where('login_simatera', ['email' => $email, 'is_active' => 1])->row_array();


            if($login_simatera) {
                $token = base64_encode(random_bytes(32));
                $login_simatera_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('login_simatera_token', $login_simatera_token);
                $this->_sendMail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Silakan periksa email Anda untuk mengatur ulang kata sandi Anda!
              </div>');
                redirect('Auth_forgot');

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email tidak terdaftar atau diaktifkan!
              </div>');
                redirect('Auth_forgot');
            }
        }


	}


    private function _sendMail($token, $type)
    {
        
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'knightphantom637@gmail.com',
            'smtp_pass' => 'wxbufikmqhhiossf',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('knightphantom637@gmail.com', 'Simatera Kota Bandung');
        $this->email->to($this->input->post('email')); 

        if ($type == 'forgot'){
            $this->email->subject('Atur Ulang Kata Sandi - Simatera Kota Bandung');
            $this->email->message('Klik tautan di bawah untuk mengatur ulang kata sandi alamat email Anda: <a
            href="'. base_url() . 'Auth_changePassword/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Atur Ulang Kata Sandi</a>'); 
        }

        if ($this->email->send()){
            return true;
        }else{
            echo $this->email->print_debugger();
            die;
        }

    }
	 
}