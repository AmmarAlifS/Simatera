<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CForgot extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('MForgot');
    }
	public function index(){
		$this->load->view('auth/VForgot');
	}
	public function Forgot(){
		$email = $this->input->post('email');
		$hasil = $this->MForgot->forgott($email);
		if ($hasil == false) {
			echo '<script>alert("Email salah");</script>';
			redirect('CForgot/index', 'refresh');
		}
		else{
			$this->_sendEmail();
			
			echo '<script>alert("Password berhasil terkirim ke Email!");</script>';
			redirect('CLogin','refresh');
		}
	}

	private function _sendEmail(){
		$email = $this->input->post('email');
		$hasil = $this->MForgot->forgott($email);
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'arrijalm12@gmail.com',
            'smtp_pass' => 'zcetjfvlksjmoeep',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('noreply@simatera.com', 'Simatera');
		$this->email->reply_to('noreply@simatera.com', 'Simatera');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Passsword Reminder');
        $email_message = $this->load->view('auth/email_message', ['hasil' => $hasil], TRUE);

        $this->email->message($email_message);

        $this->email->send();
    }
	 
}