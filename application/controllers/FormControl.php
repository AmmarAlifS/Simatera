<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormControl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_model');
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

        $this->Form_model->form_user($data);

        redirect('FormControl');
    }
}