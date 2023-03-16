<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('guest/v_header');
		$this->load->view('guest/Home');
		$this->load->view('guest/v_footer');
	}

	public function tentangkami()
	{
		$this->load->view('guest/v_header');
		$this->load->view('guest/TentangKami');
		$this->load->view('guest/v_footer');
	}

	public function kontak()
	{
		$this->load->view('guest/v_header');
		$this->load->view('guest/contact');
		$this->load->view('guest/v_footer');
	}
}
?>