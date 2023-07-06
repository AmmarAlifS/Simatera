<?php

	class M_list extends CI_Model {

	public function get_data($limit, $start, $kategori = null, $sort = null) {
		$this->db->select('*');
        $this->db->from('artikel_simatera');

        if ($kategori) {
            $this->db->where('kategori', $kategori);
        }

        if ($sort) {
            if ($sort === 'latest') {
                $this->db->order_by('tanggal', 'desc');
            } elseif ($sort === 'oldest') {
                $this->db->order_by('tanggal', 'asc');
            } elseif ($sort === 'alphabetical') {
				$this->db->order_by('judul', 'asc');
			} elseif ($sort === 'reverse_alphabetical') {
				$this->db->order_by('judul', 'desc'); // New order condition
			}
        }

        $this->db->limit($limit, $start);
        return $this->db->get()->result();
	}

	public function count_list($kategori = null) {
        if ($kategori) {
            $this->db->where('kategori', $kategori);
        }
		return $this->db->get('artikel_simatera')->num_rows();
	}

	public function getFilteredData($kategori, $sort) {
        $this->db->select('*');
        $this->db->from('artikel_simatera');

        if (!empty($kategori)) {
            $this->db->where('kategori', $kategori);
        }

        if (!empty($sort)) {
            if ($sort === 'latest') {
                $this->db->order_by('tanggal', 'desc');
            } elseif ($sort === 'oldest') {
                $this->db->order_by('tanggal', 'asc');
            } elseif ($sort === 'alphabetical') {
				$this->db->order_by('judul', 'asc');
			} elseif ($sort === 'reverse_alphabetical') {
				$this->db->order_by('judul', 'desc'); // New order condition
			}
        }

        $query = $this->db->get();
        return $query->result_array();
    }
}