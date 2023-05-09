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

		$judul = $this->input->post('judul');
		$Foto = $this->input->post('Foto');
		$Video = $this->input->post('Video');
		$artikel = $this->input->post('artikel');
		$data = array(
			'judul' => $judul,
			'artikel' => $artikel,
			'Foto' => $Foto,
			'Video' => $Video
		);
			$this->db->insert('artikel_simatera', $data);
			redirect('admin/Artikel/post');
		

	}
	public function delete($id_artikel){
		$this->db->where('id_artikel',$id_artikel);
		$this->db->delete('artikel_simatera');

		redirect('admin/Artikel/index');
	}
}

?>