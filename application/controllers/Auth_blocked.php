<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_blocked extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $this->load->view('auth/blocked');
        }
    }