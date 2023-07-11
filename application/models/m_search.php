<?php


class M_search extends CI_Model {
	public function get_data($limit, $start) {
		return $this->db->get('artikel_simatera', $limit, $start)->result();
	}

	public function count_data($keyword, $kategori = null) {
		if ($keyword) {
            $words = explode(' ', $keyword);
            foreach ($words as $word) {
                $this->db->or_like('judul', $word);
            }
        }
        if ($kategori) {
            $this->db->where('kategori', $kategori);
        }
		return $this->db->get('artikel_simatera')->num_rows();
	}

	public function getTotalResults($keyword) {
		$this->db->like('judul', $keyword);
		$this->db->from('artikel_simatera');
		return $this->db->count_all_results();
	}

	public function get_keyword($limit, $start, $keyword = null, $kategori = null, $sort = null)
    {
        $this->db->select('*');
        $this->db->from('artikel_simatera');

        if ($keyword) {
            $words = explode(' ', $keyword);
            foreach ($words as $word) {
                $this->db->or_like('judul', $word);
            }
        }

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
	
	public function get_categories() {
        return $this->db->select('nama_kategori')->get('kategori')->result_array();
    }
    
    public function getFilteredData($keyword, $kategori, $sort)
    {
    // Perform filtering based on the keyword, category, and sorting option
    // Modify this query according to your database structure and filtering criteria
    $this->db->select('*');
    $this->db->from('artikel_simatera');

    if ($keyword) {
        $words = explode(' ', $keyword);
        foreach ($words as $word) {
            $this->db->or_like('judul', $word);
        }
    }

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
    
    // public function getClosestMatches($keyword)
    // {
    // $this->db->select('judul');
    // $this->db->from('artikel_simatera');
    // $this->db->like('judul', $keyword . ' ', 'after'); // Add a space after the keyword
    // $this->db->or_like('judul', ' ' . $keyword . ' ', 'both'); // Match the keyword surrounded by spaces
    // $this->db->or_like('judul', ' ' . $keyword, 'before'); // Add a space before the keyword
    // $this->db->order_by('judul', 'ASC');
    // $this->db->limit(5);
    // return $this->db->get()->result();
    // }


}