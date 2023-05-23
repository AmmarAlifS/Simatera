<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_verify extends CI_Controller 
    {
        public function index()
        {
            $email = $this->input->get('email');
            $token = $this->input->get('token');

            $login_simatera = $this->db->get_where('login_simatera', ['email' => $email])->row_array();

            if ($login_simatera){
                $login_simatera_token = $this->db->get_where('login_simatera_token', ['token' => $token])->row_array();

                if($login_simatera_token){
                    if(time() - $login_simatera_token['date_created'] < (60*60*24)){

                        $this->db->set('is_active', 1);
                        $this->db->where('email', $email);
                        $this->db->update('login_simatera');

                        $this->db->delete('login_simatera_token', ['email' => $email]);

                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        '. $email .' has been activated! Please Login.
                       </div>');
                         redirect('Auth_login'); 
                    }else{

                        $this->db->delete('login_simatera', ['email' => $email]);
                        $this->db->delete('login_simatera_token', ['email' => $email]);

                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Account Activation failed! Token Expired.
                       </div>');
                         redirect('Auth_login'); 
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Account Activation failed! Wrong Token!
                   </div>');
                     redirect('Auth_login'); 
                }
            
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Account activation failed! Wrong Email
               </div>');
                 redirect('Auth_login');
            }
        }
    }