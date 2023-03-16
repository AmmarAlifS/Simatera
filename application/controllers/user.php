<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('MArtikel');
	}

	public function index()
	{	
		$recordArticle = $this->MArtikel->getDataArtikel();
		$DATA = array('data_artikel' => $recordArticle);

		$this->load->view('guest/v_header');
		$this->load->view('guest/Home', $DATA);
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
		$this->load->view('guest/kontak');
		$this->load->view('guest/v_footer');

	}
}
?>