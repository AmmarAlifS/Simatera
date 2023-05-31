<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class guest extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->model('MArtikel');
		$this->load->model('m_setting');
		$this->load->model('m_search');	
		$this->load->model('m_list');	
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

	// Detail Artikel

	public function single_post($id_artikel)
	{
		$data['setting'] = $this->m_setting->tampil_data(); //Data
		$xdetail = $this->MArtikel->detail_data($id_artikel); //Detail
		$detail['xdetail'] = $xdetail;
		$img = $this->MArtikel->getImageById($id_artikel);
		$this->load->view('guest/v_header');
		$this->load->view('guest/Single_post', $detail);
		$this->load->view('guest/v_footer', $data);
	}
	public function artikel($id_artikel)
	{
		$data['setting'] = $this->m_setting->tampil_data();
		$xdetail = $this->MArtikel->detail_data($id_artikel);
		$detail['xdetail'] = $xdetail;
		$this->load->view('guest/v_header');
		$this->load->view('guest/Artikel', $detail);
		$this->load->view('guest/v_footer', $data);
	}

	public function list()
	{
		$config['base_url'] = 'http://localhost/Simatera/guest/list'; // URL for the pagination links
		$config['total_rows'] = $this->m_list->count_list(); // Total number of records to paginate		
		$config['per_page'] = 9; // Number of records to display per page
		
		$this->pagination->initialize($config);
		
		$content['page'] = $this->uri->segment(3);
		$content['artikel']=$this->m_list->get_data($config['per_page'], $content['page'])->result();
		
		$data['setting'] = $this->m_setting->tampil_data();
		
		$this->load->view('guest/v_header');
		$this->load->view('guest/list', $content);
		$this->load->view('guest/v_footer', $data);

	}

	public function search()
	{
		$config['base_url'] = base_url('guest/search'); // URL for the pagination links
		$config['total_rows'] = $this->m_search->count_data($this->input->post('keyword')); // Total number of records to paginate
		$config['per_page'] = 10; // Number of records to display per page
	
		$this->pagination->initialize($config);
	
		$content['page'] = $this->uri->segment(3);
		$keyword = $this->input->post('keyword'); // Get the keyword from the input
		if ($keyword) {
			$content['artikel'] = $this->m_search->get_keyword($config['per_page'], $content['page'], $keyword);
			$this->session->set_userdata('keyword', $keyword); // Store the keyword in session
		} else {
			// If no keyword is present, retrieve it from the session
			$keyword = $this->session->userdata('keyword');
			$content['artikel'] = $this->m_search->get_keyword($config['per_page'], $content['page'], $keyword);
		}
	
		$data['setting'] = $this->m_setting->tampil_data();
	
		$this->load->view('guest/v_header');
		$this->load->view('guest/searchResult', $content);
		$this->load->view('guest/v_footer', $data);

		// $config['base_url'] = base_url('guest/search'); // URL for the pagination links
		// $config['total_rows'] = $this->m_search->count_data(); // Total number of records to paginate		
		// $config['per_page'] = 10; // Number of records to display per page
		
		// $this->pagination->initialize($config);
		
		// $content['page'] = $this->uri->segment(3);
		// $content['artikel']= $this->m_search->get_data();
		
		// if( $this->input->post('keyword')) {
		// 	$content['artikel']=$this->m_search->get_keyword($config['per_page'], $content['page']);
		// 	$this->session->set_userdata('keyword', $content['keyword']);
		// } else {
		// 	$this->session->set_userdata('keyword');
		// }
		// $data['setting'] = $this->m_setting->tampil_data();

		// $this->load->view('guest/v_header');
		// $this->load->view('guest/searchResult', $content);
		// $this->load->view('guest/v_footer', $data);

	}


}
?>