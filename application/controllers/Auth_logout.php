<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_logout extends CI_Controller 
    {
        public function index()
        {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('password');
    
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           You have been loged out!
          </div>');
            redirect('Auth_login');
        }
    }