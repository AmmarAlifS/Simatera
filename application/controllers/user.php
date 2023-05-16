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
		$data['art'] = $this->MArtikel->tampil()->result();

		$this->load->view('guest/v_header');
		$this->load->view('guest/Home', $data);
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

	public function artikel()
	{
		$this->load->view('guest/v_header');
		$this->load->view('guest/artikel');
		$this->load->view('guest/v_footer');

	}

	public function search()
	{
		$this->load->model('m_art');
		$data['artikel']= $this->m_art->get_data();
		if( $this->input->post('keyword')) {
			$data['artikel']=$this->m_art->get_keyword();
		}

		$this->load->view('guest/v_header');
		$this->load->view('guest/searchResult', $data);
		$this->load->view('guest/v_footer');

	}
}
?>