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
		$this->load->view('admin/main/setting.php', $data);
	}

	function simpan_data(){
	    $alamat = $this->input->post('alamat');
	    $no_telp = $this->input->post('no_telp');
	    $email = $this->input->post('email');
	    $tentang_kami = $this->input->post('tentang_kami');
	    $this->m_setting->input_data($alamat,$no_telp,$email,$tentang_kami);
	    redirect('admin/Setting');
  	}

}
?>