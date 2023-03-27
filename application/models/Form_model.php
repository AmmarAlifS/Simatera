<?php

class Form_model extends CI_Model
{
    public function form_user($data)
    {
        return $this->db->insert('user_masukan', $data);
    }
}