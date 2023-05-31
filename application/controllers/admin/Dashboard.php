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
		

		// Get the total number of users
	    $total_users = $this->db->count_all_results('login_admin');
	    $total_posts = $this->db->count_all_results('artikel_simatera');
	    $total_masukan = $this->db->count_all_results('user_masukan');
		$total_kategori = $this->db->count_all_results('kategori');

	    // Pass the total number of users to the view
	    $data['total_users'] = $total_users;
	    $data['total_posts'] = $total_posts;
	    $data['total_masukan'] = $total_masukan;
		$data['total_kategori'] = $total_kategori;

	    // Load the view with the data
	    $this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/dashboard.php', $data);
		$this->load->view('admin/themes/footer.php');
	}
}
?>