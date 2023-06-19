<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminUser extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('MRegister');
		is_logged_in();
	}

	public function index()
	{
		$data['form'] = $this->MRegister->tampil()->result();
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/Admin.php', $data);
		$this->load->view('admin/themes/footer.php');
	}
}
?>