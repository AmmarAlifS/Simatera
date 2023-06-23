<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CKontakAdmin extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		if (!$this->session->userdata('email')) {
            redirect('Auth_login'); // Redirect to login page if not logged in
        }
		$this->load->helper('url');
		$this->load->model('m_kontak');
		$this->load->library('upload');
		$this->load->library('session');
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
		$id_pesan = $this->input->post('id_pesan');
	    $nama = $this->input->post('nama');
	    $email = $this->input->post('email');
	    $subjek = $this->input->post('subjek');
	    $pesan = $this->input->post('pesan');
	    $this->m_kontak->input_data($id_pesan,$nama,$email,$subjek,$pesan);
	    redirect('admin/CKontakAdmin');
  	}

}
?>