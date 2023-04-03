<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kontak');
	}

	public function index()
	{
		// $data['hsl'] = $this->m_kontak->get();
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/kontak_list.php');
		$this->load->view('admin/themes/footer.php');
	}

		// if(count($data['hsl']) <= 0){
		// 	$this->load->view('admin/main/feedback_empty');
		// } else {
		// 	$this->load->view('admin/main/feedback_list', $data);
		// }

	// public function delete($id_kontak = null)
	// {
	// 	if(!$id_kontak){
	// 		show_404();
	// 	}

	// 	$this->load->model('m_kontak');
	// 	$this->m_kontak->delete($id_kontak);

	// 	$this->session->set_flashdata('message', 'Data berhasil dihapus');
	// 	redirect(site_url('admin/Kontak'));
	// }
}
?>