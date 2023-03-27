<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('MLogin');
    }
	public function index()
	{
		$this->load->view('auth/login-register');
	}
	public function Login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hasil = $this->MLogin->loginn($email, $password);
		if ($hasil == false) {
			echo '<script>alert("Password atau Username salah");</script>';
			redirect('CLogin/index', 'refresh');
		}
		else{
			echo '<script>alert("Login berhasil");</script>';
			redirect('admin/dashboard','refresh');
		}
		
	}
	
	public function CLogout()
	{
		$this->session->unset_userdata('username');
		redirect('CLogin/index');
	}
}