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

        if ($this->_sendEmail()){
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }

        redirect('CRegister/index');
    }

    private function _sendEmail(){
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'arrijalm12@gmail.com',
            'smtp_pass' => 'zcetjfvlksjmoeep',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('arrijalm12@gmail.com', 'Arrijal Mutaqin');
        $this->email->to('rekid127@gmail.com');
        $this->email->subject('kont');
        $this->email->message('ol');

        $this->email->send();
    }
}
