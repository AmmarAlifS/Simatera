<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	
	public function index()
	{
		$this->load->model('m_art');
		$data['artikel']= $this->m_art->get_data();
		if( $this->input->post('keyword')) {
			$data['artikel']=$this->m_art->get_keyword();
		}
		$this->load->view('guest/searchResult', $data);
	}


}

?>
