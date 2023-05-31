<?php 
	class User_model extends CI_Model{
		public function getUser($email){
			return $this->db->where('email',$email)->get('login_simatera')->row();
		}
		public function createUser($data){
			$this->db->insert('login_simatera',$data);
		}
	}