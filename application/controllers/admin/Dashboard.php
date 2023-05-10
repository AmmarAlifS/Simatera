<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/dashboard.php');
		$this->load->view('admin/themes/footer.php');

		$total_users = $this->db->count_all_results('login_admin');
		$data['total_users'] = $total_users;
		$this->load->view('admin/main/Dashboard/index', $data);
	}
}
?>