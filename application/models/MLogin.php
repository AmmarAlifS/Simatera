<?php 
class MLogin extends CI_Model
{
	
	public function loginn($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('login_simatera');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    function tampil(){
        return $this->db->get('login_simatera');
    }
}
