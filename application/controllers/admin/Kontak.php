<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		if (!$this->session->userdata('email')) {
            redirect('Auth_login'); // Redirect to login page if not logged in
        }
		$this->load->helper('url');
		$this->load->model('m_kontak');
		$this->load->library('session');
	}

	public function index()
	{

		$data['form'] = $this->m_kontak->tampil()->result();
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/kontak_list.php', $data);
		$this->load->view('admin/themes/footer.php');
	}

	function hapus($id_pesan){
		$where = array('id_pesan' => $id_pesan);
		$this->m_kontak->hapus($where,'user_masukan');
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/Kontak/index');
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