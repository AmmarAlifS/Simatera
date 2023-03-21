<?php

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('subjek', 'Subjek', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('guest/v_header');
            $this->load->view('guest/kontak');
            $this->load->view('guest/v_footer');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'subjek' => $this->input->post('subjek'),
                'pesan' => $this->input->post('pesan')
            );

            if ($this->register_model->register_user($data)) {
                $this->session->set_flashdata('success', 'Registration successful. You can now login.');
                redirect('Register');
            } else {
                $this->session->set_flashdata('error', 'Registration failed.');
                redirect('Register');
            }
        }
    }
}
