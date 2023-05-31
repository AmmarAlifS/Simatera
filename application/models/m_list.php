<?php

class M_list extends CI_Model {

public function get_data($limit, $start)
	{
		return $this->db->get('artikel_simatera', $limit, $start);
	}

public function count_list()
	{
		return $this->db->get('artikel_simatera')->num_rows();
	}
}