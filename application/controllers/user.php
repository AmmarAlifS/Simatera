<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->model('MArtikel');
		$this->load->model('m_setting');

		$this->load->model('m_kontak');
		// if (!$this->session->userdata('email')) {
        //     redirect('Auth_login'); // Redirect to login page if not logged in
        // }
		// is_logged_in();
		$this->load->library('session');

		$this->load->model('m_search');	
		$this->load->model('m_list');	

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

	public function single_post($id_artikel)
	{
		$data['setting'] = $this->m_setting->tampil_data(); //Data
		$xdetail = $this->MArtikel->detail_data($id_artikel); //Detail
		$detail['art'] = $this->MArtikel->tampil()->result();
		$detail['xdetail'] = $xdetail;;
		$this->load->view('user/v_header');
		$this->load->view('user/Single_post', $detail);
		$this->load->view('user/v_footer', $data);
	}

	public function list()
	{
		$kategori = $this->input->get('kategori');
		$sort = $this->input->get('sort');

		$content['art'] = $this->MArtikel->tampil()->result();
		$config['base_url'] = 'http://localhost/Simatera/user/list'; // URL for the pagination links
		$config['total_rows'] = $this->m_list->count_list($kategori); // Total number of records to paginate		
		$config['per_page'] = 12; // Number of records to display per page
		$config['reuse_query_string'] = true; // Retain the query string parameters in pagination links
		
		$this->pagination->initialize($config);
		
		$content['page'] = $this->uri->segment(3);
		$content['artikel']=$this->m_list->get_data($config['per_page'], $content['page'], $kategori, $sort);
		
		$content['kategori'] = $this->m_search->get_categories();
		$content['sort'] = $sort;
		$content['selected_category'] = $kategori;

		// Update the filtered data and total results
		$content['results'] = $this->m_list->getFilteredData($kategori, $sort);
		$content['resulttotal'] = count($content['results']);

		$data['setting'] = $this->m_setting->tampil_data();
		
		$this->load->view('user/v_header');
		$this->load->view('user/list', $content);
		$this->load->view('user/v_footer', $data);

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

    $config['base_url'] = base_url('user/search');
    $config['total_rows'] = $this->m_search->count_data($keyword, $kategori);
    $config['per_page'] = 12;
	$config['reuse_query_string'] = true; // Retain the query string parameters in pagination links

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

	$content['art'] = $this->MArtikel->tampil()->result();
    $this->load->view('user/v_header');
    $this->load->view('user/searchResult', $content);
    $this->load->view('user/v_footer', $data);
	}
}
?>