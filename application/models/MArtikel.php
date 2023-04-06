<?php 
defined('BASEPATH') OR exit('No direct script allowed');

class MArtikel extends CI_Model {
	function tampil(){
    	return $this->db->get('artikel_simatera');
  	}
}