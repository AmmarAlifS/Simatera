<?php

class M_search extends CI_Model {

	// public function count_search($keyword) {
	// 	$this->db->like('judul', $keyword);
	// 	$this->db->from('artikel_simatera');
	// 	return $this->db->count_all_result();
	// }

	// public function get_search($keyword, $limit, $offset) {
	// 	$this->db->like('judul', $keyword);
	// 	$this->db->limit($limit, $offset);
	// 	$query = $this->db->get('artikel_simatera');
	// 	return $query->result_array();
	// }

	public function get_data($limit, $start)
	{
		return $this->db->get('artikel_simatera', $limit, $start)->result();
	}
	

	public function count_data($keyword)
	{
		if ($keyword) {
			$this->db->like('judul', $keyword);
		}
		return $this->db->get('artikel_simatera')->num_rows();
	}

	public function get_keyword($limit, $start, $keyword = null)
	{
		if ($keyword) {
			$words = explode(' ', $keyword);
			foreach ($words as $word) {
				$this->db->or_like('judul', $word);
			}
		} else {
			$keyword = $this->session->userdata('keyword');
			if (!$keyword) {
				return $this->db->where('1', 0)->get('artikel_simatera', $limit, $start)->result();
			}
			$this->db->like('judul', $keyword);
		}
	
		return $this->db->get('artikel_simatera', $limit, $start)->result();
	}	
}