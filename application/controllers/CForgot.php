<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CForgot extends CI_Controller {
	public function index(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		
		if($this->form_validation->run()==false){
			$this->load->view('auth/VForgot');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('login_admin', ['email' => $email])->row_array();

			if($user) {} else {
				$this->session->echo('<script>alert("Daftar berhasil");</script>');
			}
			
		}
	}
	 
}