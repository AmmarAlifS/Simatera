<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_setting');
	}

	public function index()
	{
		$data['stng'] = $this->m_setting->tampil();
		$this->load->view('admin/main/setting.php', $data);
	}
}
?>