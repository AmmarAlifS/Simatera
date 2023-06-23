<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_user_by_email($email)
    {
        $query = $this->db->get_where('login_simatera', array('email' => $email));
        return $query->row();
    }
    
    public function insert_user($data)
    {
        return $this->db->insert('login_asimatera', $data);
    }
    
}
