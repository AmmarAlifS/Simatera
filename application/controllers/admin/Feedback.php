<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_feedback');
	}

	public function index()
	{
		$data['hsl'] = $this->m_feedback->get();
		$this->load->view('admin/main/feedback_list.php', $data);

		// if(count($data['hsl']) <= 0){
		// 	$this->load->view('admin/main/feedback_empty');
		// } else {
		// 	$this->load->view('admin/main/feedback_list', $data);
		// }
	}

	public function delete($id = null)
	{
		if(!$id){
			show_404();
		}

		$this->load->model('m_feedback');
		$this->m_feedback->delete($id);

		$this->session->set_flashdata('message', 'Data berhasil dihapus');
		redirect(site_url('admin/Feedback'));
	}
}
?>