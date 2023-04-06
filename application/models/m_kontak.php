<?php

class m_kontak extends CI_Model
{
	

	function input_data($nama,$email,$subjek,$pesan){
	    $data = array(
	      'nama' => $nama,
	      'email' => $email,
	      'subjek' => $subjek,
	      'pesan' => $pesan
	    );
	    $this->db->insert('user_masukan',$data);
  	}

	function tampil(){
    	$result = $this->db->get('user_masukan');
  	}

}