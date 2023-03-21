<?php

class Register_model extends CI_Model
{
    public function register_user($data)
    {
        return $this->db->insert('user_masukan', $data);
    }
}