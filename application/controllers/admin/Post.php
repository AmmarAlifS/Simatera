<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('admin/main/post_list.php');
	}
}
?>