<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRegister extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MRegister');
    }

    public function index()
    {
        $this->load->view('auth/login-register');
    }

    public function create()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password
        );

        $this->MRegister->register_user($data);

        redirect('CRegister/index');
    }
}
