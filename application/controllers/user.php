<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

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
		$this->load->view('user/v_header');
		$this->load->view('user/Home', $data);
		$this->load->view('user/v_footer');
	}

	public function tentangkami()
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->view('user/v_header');
		$this->load->view('user/TentangKami', $data);
		$this->load->view('user/v_footer');

	}

	public function kontak()
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->view('user/v_header');
		$this->load->view('user/kontak', $data);
		$this->load->view('user/v_footer');

	}

	public function artikel()
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->view('user/v_header');
		$this->load->view('user/artikel', $data);
		$this->load->view('user/v_footer');

	}

	public function search()
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$this->load->model('m_search');
		$data['artikel']= $this->m_search->get_data();
		if( $this->input->post('keyword')) {
			$data['artikel']=$this->m_search->get_keyword();
		}

		$this->load->view('user/v_header');
		$this->load->view('user/searchResult', $data);
		$this->load->view('user/v_footer');

	}
}
?>