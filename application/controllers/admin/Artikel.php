<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('MArtikel');
	}

	public function index()
	{
		$data['art'] = $this->MArtikel->tampil()->result();
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/list_artikel.php', $data);
		$this->load->view('admin/themes/footer.php');
	}

	public function post()
	{
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/post_artikel.php');
		$this->load->view('admin/themes/footer.php');

		// $title = $this->input->post('title');
		// $content = $this->input->post('content');
		// $data = array(
		// 	'title' => $title,
		// 	'content' => $content
		// );
		// $this->db->insert('posts', $data);
		// redirect('post/view');
		// 	}

}
}
?>