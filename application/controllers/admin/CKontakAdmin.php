<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CKontakAdmin extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kontak');
		$this->load->library('upload');
	}

	function index()
	{
		$data['kontak'] = $this->m_kontak->tampil();
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/kontak_list.php', $data);
		$this->load->view('admin/themes/footer.php');

	}

	function simpan_data(){
	    $nama = $this->input->post('nama');
	    $email = $this->input->post('email');
	    $subjek = $this->input->post('subjek');
	    $pesan = $this->input->post('pesan');
	    $this->m_kontak->input_data($nama,$email,$subjek,$pesan);
	    redirect('admin/CKontakAdmin');
  	}

}
?>