<?php

class M_art extends CI_Model {
	public function get_data()
	{
		return $this->db->get('t_art')->result_array();
	}

	public function get_keyword()
	{
		$keyword=$this->input->post('keyword', true);
		$this->db->like('judul_artikel', $keyword);
		return $this->db->get('t_art')->result_array();
	}

}