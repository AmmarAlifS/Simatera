<?php 
defined('BASEPATH') OR exit('No direct script allowed');

class MArtikel extends CI_Model {
	function tampil(){
    	return $this->db->get('artikel_simatera');
  	}

	function simpan_tulisan($judul,$artikel,$foto,$video,$tanggal){
		$hsl=$this->db->query("insert into artikel_simatera(judul,artikel,foto,video,tanggal)  values ('$judul','$artikel','$foto','$video','$tanggal')");
		return $hsl;
	}

	function post_artikel($judul,$artikel,$foto,$video,$tanggal){
        $this->db->trans_start();
            $this->db->query("insert into artikel_simatera(judul,artikel,foto,video,tanggal) 
                values ('$judul','$artikel','$foto','$video','$tanggal')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }
}