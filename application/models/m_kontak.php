<?php

class m_kontak extends CI_Model
{
	

	// function input_data($id_pesan,$nama,$email,$subjek,$pesan){
	//     $data = array(
	// 	  'id' => $id_pesan,
	//       'nama' => $nama,
	//       'email' => $email,
	//       'subjek' => $subjek,
	//       'pesan' => $pesan
	//     );
	//     $this->db->insert('user_masukan',$data);
  	// }

	function tampil(){
    	return $this->db->get('user_masukan');
  	}

	  function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}