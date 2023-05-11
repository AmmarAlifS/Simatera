<?php

class MRegister extends CI_Model
{
    public function register_user($data)
    {
        return $this->db->insert('login_admin', $data);
    }
    function tampil(){
        return $this->db->get('login_admin');
    }
}