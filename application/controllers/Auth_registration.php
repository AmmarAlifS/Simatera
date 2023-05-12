<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_registration extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function index()
        {
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[login_simatera.email]',[
                'is_unique' => 'This email has already registered!'
            ]);
            $this->form_validation->set_rules('password1', 'Password', 'required|min_length[5]|matches[password2]', [
                'matches' => 'password dont match!',
                'min_length' => 'Password too short'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password1]');
            if($this->form_validation->run() == false)
            {
            $data['title'] = 'Simatera User Registration';
            $this->load->view('templates/auth_header.php', $data);
            $this->load->view('auth/registration.php');
            $this->load->view('templates/auth_footer.php');
            }else{
                $data = array (
                    'name' => htmlspecialchars($this->input->post('name', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => 2,
                    'is_active' => 1 ,
                    'date_created' => time()
                );
                
                $this->db->insert('login_simatera', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Congratulation! your account has been created. Please Login
              </div>');
                redirect('Auth_login');
            }
           }
    }
