<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormControl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('Auth_login'); 
        }
        // logged_in();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
         //periksa apakah user sudah login
		// if (!$this->session->userdata('logged_in')) {
        //     redirect('Auth_login');
        // }
        $this->load->view('user/v_header');
        $this->load->view('user/kontak');
        $this->load->view('user/v_footer');
    }

    // public function create()
    // {
    //     $nama = $this->input->post('nama');
    //     $email = $this->input->post('email');
    //     $subjek = $this->input->post('subjek');
    //     $pesan = $this->input->post('pesan');

    //     $data = array(
    //         'nama' => $nama,
    //         'email' => $email,
    //         'subjek' => $subjek,
    //         'pesan' => $pesan
    //     );

    //     $this->Form_model->form_user($data);

    //     redirect('user/kontak');
    // }

    
	public function submit(){
        // Periksa apakah pengguna sudah login
        // if (!$this->session->userdata('logged_in')) {
        //     redirect('Auth_login'); 
        // }

        // Validasi input
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('subjek', 'Subjek', 'required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/kontak');
        } else {
            $id_pesan = $this->session->userdata('id_pesan');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
			$subjek = $this->input->post('subjek');
			$pesan = $this->input->post('pesan');

            // Simpan saran dan masukan ke database
            $this->Form_model->form_user($id_pesan, $nama, $email, $subjek, $pesan);

            // Tampilkan pesan sukses atau arahkan pengguna ke halaman lain
            $this->session->set_flashdata('sukses', 'Terimakasih telah menambahkan saran dan masukan pada website kami');
            redirect('user/index'); 
		}
	}

    public function alert(){
        redirect('Auth_loginSaranMasukan');
    }
}