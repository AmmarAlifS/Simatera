<?php 
/**
* 
*/
class MForgot extends CI_Model
{
	
	public function forgott($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('login_admin');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function forgott2($password) {
        $this->db->where('password', $password);
        $query = $this->db->get('login_admin');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
