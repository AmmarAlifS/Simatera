<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_setting');
		$this->load->library('upload');
	}

	function index()
	{
		$data['setting'] = $this->m_setting->tampil();
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/setting.php', $data);
		$this->load->view('admin/themes/footer.php');

	}

	function simpan_data(){
	    $alamat = $this->input->post('alamat');
	    $no_telp = $this->input->post('no_telp');
	    $email = $this->input->post('email');
		$facebook = $this->input->post('facebook');
		$twitter = $this->input->post('twitter');
		$instagram = $this->input->post('instagram');
	    $tentang_kami = $this->input->post('tentang_kami');
	    $this->m_setting->input_data($alamat,$no_telp,$email,$facebook,$twitter,$instagram,$tentang_kami);
	    redirect('admin/Setting');
  	}

}
?>