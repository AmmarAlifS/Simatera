<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
    }

    public function index()
    {
        $this->load->view('guest/v_header');
        $this->load->view('guest/kontak');
        $this->load->view('guest/v_footer');
    }

    public function create()
    {
        $name = $this->input->post('nama');
        $email = $this->input->post('email');
        $subjek = $this->input->post('subjek');
        $pesan = $this->input->post('pesan');

        $data = array(
            'nama' => $name,
            'email' => $email,
            'subjek' => $subjek,
            'pesan' => $pesan
        );

        $this->Register_model->register_user($data);

        redirect('Register');
    }
}
