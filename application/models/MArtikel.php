<?php 
defined('BASEPATH') OR exit('No direct script allowed');

class MArtikel extends CI_Model {
	public function getDataArtikel(){
		$this->db->select('*');
		$this->db->from('artikel_simatera');
		$query = $this->db->get();
		return $query->result();
	}
}