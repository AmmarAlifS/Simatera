<?php 
    class User_model extends CI_Model{
        public function Is_already_register($id){
            $this->db->where('login_oauth_uid',$id);
            $query = $this->db->get('login_simatera');
            if($query->num_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public function Update_user_data($data, $id){
            $this->db->where('login_oauth_uid',$id);
            $this->db->update('login_simatera',$data);
        }
        public function Insert_user_data($data){
            $this->db->insert('login_simatera', $data);
            
        }
    }
