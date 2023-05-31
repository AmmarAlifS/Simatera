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

	public function get_data()
	{
		return $this->db->get('artikel_simatera')->result_array();
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
			$this->db->like('judul', $keyword);
		}
		return $this->db->get('artikel_simatera', $limit, $start)->result_array();
	}

}