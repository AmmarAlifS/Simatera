<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class guest extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('MArtikel');
		$this->load->model('m_setting');
	}

	public function index()
	{	
		$data['art'] = $this->MArtikel->tampil()->result();
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->view('guest/v_header');
		$this->load->view('guest/Home', $data);
		$this->load->view('guest/v_footer', $data);
	}

	public function tentangkami()
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->view('guest/v_header');
		$this->load->view('guest/TentangKami');
		$this->load->view('guest/v_footer', $data);

	}

	public function kontak()
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->view('guest/v_header');
		$this->load->view('guest/kontak');
		$this->load->view('guest/v_footer', $data);

	}

	public function artikel()
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->view('guest/v_header');
		$this->load->view('guest/Artikel');
		$this->load->view('guest/v_footer', $data);

	}

	public function search()
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->model('m_search');
		$data['artikel']= $this->m_search->get_data();
		if( $this->input->post('keyword')) {
			$data['artikel']=$this->m_search->get_keyword();
		}

		$this->load->view('guest/v_header');
		$this->load->view('guest/searchResult', $data);
		$this->load->view('guest/v_footer', $data);

	}

}
?>