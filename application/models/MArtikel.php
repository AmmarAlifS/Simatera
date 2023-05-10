<?php 
defined('BASEPATH') OR exit('No direct script allowed');

class MArtikel extends CI_Model {
	function tampil(){
    	return $this->db->get('artikel_simatera');
  	}

	function simpan_tulisan($artikel_judul,$artikel_isi,$tanggal,$gambar,$vidio,$author){
		$hsl=$this->db->query("insert into artikel_simatera(artikel_judul,artikel_isi,tanggal,gambar,vidio,author) values ('$artikel_judul','$artikel_isi','$tanggal','$gambar','$vidio','$author')");
		return $hsl;
	}
}