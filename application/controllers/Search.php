<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	
	public function index()
	{
		$this->load->model('m_search');
		$data['artikel']= $this->m_search->get_data();
		if( $this->input->post('keyword')) {
			$data['artikel']=$this->m_search->get_keyword();
		}
		$this->load->view('guest/v_header');
		$this->load->view('guest/searchResult', $data);
		$this->load->view('guest/v_footer');
	}


}

?>
