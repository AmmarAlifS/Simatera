<?php 
defined('BASEPATH') OR exit('No direct script allowed');

class MArtikel extends CI_Model {
	function tampil(){
    	return $this->db->get('artikel_simatera');
  	}

	function simpan_artikel($judul,$artikel,$kategori,$foto,$foto2,$foto3,$video){
		$hsl=$this->db->query("insert into artikel_simatera(judul,artikel,kategori,foto,foto2,foto3,video) values ('$judul','$artikel', '$kategori','$foto','$foto2','$foto3','$video')");
		return $hsl;
	}

	function post_artikel($judul,$artikel,$foto,$sfoto,$sfoto2,$video,$tanggal){
        $this->db->trans_start();
            $this->db->query("insert into artikel_simatera(judul,artikel,foto,sfoto,sfoto2,video,tanggal) 
                values ('$judul','$artikel','$foto','$video','$sfoto','$sfoto2','$tanggal')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
   }

    function update_artikel($id_artikel,$judul,$artikel,$kategori,$foto,$foto2,$foto3,$video){
        $hsl=$this->db->query("UPDATE artikel_simatera set id_artikel='$id_artikel' ,judul='$judul' ,artikel='$artikel', kategori='$kategori',foto='$foto' , foto2='$foto2', foto3='$foto3',video='$video' where id_artikel='$id_artikel'");
        return $hsl;
    }

    function update_artikel_tanpaimg($id_artikel,$judul,$artikel,$kategori,$video){
        $hsl=$this->db->query("UPDATE artikel_simatera set id_artikel='$id_artikel' ,judul='$judul' ,artikel='$artikel' ,kategori='$kategori' ,video='$video' where id_artikel='$id_artikel'");
        return $hsl;
    }

    function get_tulisan_by_kode($id_artikel){
        $hsl=$this->db->query("SELECT artikel_simatera.*, DATE_FORMAT(tanggal, '%d/%m/%y') AS tanggal FROM artikel_simatera where id_artikel='$id_artikel'");
        return $hsl;
    }

    public function detail_data($id_artikel = NULL){
        $query = $this->db->get_where('artikel_simatera', array('id_artikel' => $id_artikel))->row();
        return $query;
    }

    // Get Kategori

    function get_one($table){
        return $this->db->get_where($table)->result();
    }

    //FrontEnd
    public function getImageById($id_artikel) {
        // Retrieve the image data from the database based on ID
        $query = $this->db->get_where('artikel_simatera', array('id_artikel' => $id_artikel));
        return $query->row();
    }
}