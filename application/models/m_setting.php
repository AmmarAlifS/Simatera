<?php

class m_setting extends CI_Model
{
	

	function input_data($alamat,$no_telp,$email,$facebook,$twitter,$instagram,$tentang_kami){
	    $data = array(
	      'alamat' => $alamat,
	      'no_telp' => $no_telp,
	      'email' => $email,
		  'facebook' => $facebook,
		  'twitter' => $twitter,
		  'instagram' => $instagram,
	      'tentang_kami' => $tentang_kami
	    );
	    $this->db->insert('setting',$data);
  	}

	function tampil(){
    	$result = $this->db->get('setting');
    return $result;
  	}

}