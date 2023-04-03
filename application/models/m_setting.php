<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_setting extends CI_Model
{
	
    function tampil_data(){
        return $this->db->get('setting');
    }

    function simpan_Data($alamat,$no_telp,$email,$facebook,$twitter,$instagram){
		$hsl=$this->db->query("UPDATE setting set alamat='$alamat',no_telp='$no_telp',email='$email',facebook='$facebook',twitter='$twitter',instagram='$instagram'");
		return $hsl;
	}
}