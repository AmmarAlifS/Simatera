<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminUser extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		if (!$this->session->userdata('email')) {
            redirect('Auth_login'); // Redirect to login page if not logged in
        }
		$this->load->helper('url');
		$this->load->model('MLogin');
		$this->load->library('session');
		$this->load->model('MRegister');
		is_logged_in();
	}

	public function index($role_id = 'admin')
	{
		$data['form'] = $this->MLogin->tampil($role_id)->result();
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/Admin.php', $data);
		$this->load->view('admin/themes/footer.php');
	}
}
?>