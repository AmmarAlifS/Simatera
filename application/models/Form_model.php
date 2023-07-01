<?php

class Form_model extends CI_Model
{
    public function form_user($id_pesan, $nama, $email, $subjek, $pesan)
    {
        $data = array(
            'id_pesan' => $id_pesan,
            'nama' => $nama,
            'email' => $email,
            'subjek' => $subjek,
            'pesan' => $pesan
        );
        $this->db->insert('user_masukan', $data);
    }
}