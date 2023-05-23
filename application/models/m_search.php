<?php

class M_search extends CI_Model {
	public function get_data()
	{
		return $this->db->get('artikel_simatera')->result_array();
	}

	public function get_keyword()
	{
		$keyword=$this->input->post('keyword', true);
		$this->db->like('judul', $keyword);
		return $this->db->get('artikel_simatera')->result_array();
	}	

}