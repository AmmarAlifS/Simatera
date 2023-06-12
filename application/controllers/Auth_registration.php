<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_registration extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function index()
        {
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[login_simatera.email]',[
                'is_unique' => 'This email has already registered!'
            ]);
            $this->form_validation->set_rules('password1', 'Password', 'required|min_length[5]|matches[password2]', [
                'matches' => 'password dont match!',
                'min_length' => 'Password too short'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[5]|matches[password1]');
            if($this->form_validation->run() == false)
            {
            $data['title'] = 'Simatera User Registration';
            $this->load->view('templates/auth_header.php', $data);
            $this->load->view('auth/registration.php');
            $this->load->view('templates/auth_footer.php');
            }else{
                $email = $this->input->post('email', true);
                $data = [
                    'name' => htmlspecialchars($this->input->post('name', true)),
                    'email' => htmlspecialchars($email),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => 1,
                    'is_active' => 0,
                    'date_created' => time()
                ];

                //membuat Token
                $token = base64_encode(random_bytes(32)) ;
                $login_simatera_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];
                
               $this->db->insert('login_simatera', $data);
               $this->db->insert('login_simatera_token', $login_simatera_token);

                $this->_sendMail($token, 'verify');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Congratulation! your account has been created. Please activate your account 
              </div>');
                redirect('Auth_login');
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

            if ($type == 'verify'){
                $this->email->subject('Verification Account - Simatera Kota Bandung');
                $this->email->message('Thanks for registration
                <br>Click the link below to verify the email address: <a
                href="'. base_url() . 'Auth_verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>'); 
            }

            if ($this->email->send()){
                return true;
            }else{
                echo $this->email->print_debugger();
                die;
            }

        }
    }
