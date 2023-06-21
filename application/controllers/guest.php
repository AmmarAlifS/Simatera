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
	public function test()
	{	
		$data['art'] = $this->MArtikel->tampil()->result();
		$data['setting'] = $this->m_setting->tampil_data();
		// $this->load->view('guest/v_header');
		$this->load->view('guest/test', $data);
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
		$detail['art'] = $this->MArtikel->tampil()->result();
		$detail['xdetail'] = $xdetail;;
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
		$content['art'] = $this->MArtikel->tampil()->result();
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
    $keyword = $this->input->post('keyword');
    $kategori = $this->input->get('kategori');
    $sort = $this->input->get('sort');

    // Check if a keyword is provided in the search form
    if ($keyword) {
        $this->session->set_userdata('keyword', $keyword);
        $kategori = null; // Reset the category filter when a new keyword is inputted
        $sort = null; // Reset the sorting option when a new keyword is inputted
    } else {
        $keyword = $this->session->userdata('keyword');
    }

    $config['base_url'] = base_url('guest/search');
    $config['total_rows'] = $this->m_search->count_data($keyword, $kategori);
    $config['per_page'] = 12;

    $this->pagination->initialize($config);

    $content['page'] = $this->uri->segment(3);

    // Get search results based on keyword, category, and sorting option
    $content['artikel'] = $this->m_search->get_keyword($config['per_page'], $content['page'], $keyword, $kategori, $sort);

    $data['setting'] = $this->m_setting->tampil_data();

    $content['keyword'] = $keyword;
    $content['kategori'] = $this->m_search->get_categories();
    $content['sort'] = $sort;
    $content['selected_category'] = $kategori;

    // Update the filtered data and total results
    $content['results'] = $this->m_search->getFilteredData($keyword, $kategori, $sort);
    $content['resulttotal'] = count($content['results']);

    $this->load->view('guest/v_header');
    $this->load->view('guest/searchResult', $content);
    $this->load->view('guest/v_footer', $data);
	}

}
?>