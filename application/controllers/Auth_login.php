<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_login extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index()
        {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if($this->form_validation->run() == false)
            {
                $data['title'] = 'Simatera User Login';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
            } else {
                //Validation success
                $this->_login();
            }

        }

        private function _login()
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $login_simatera = $this->db->get_where('login_simatera', ['email' => $email])->row_array();

            if($login_simatera){
               if($login_simatera['is_active'] == 'yes') {
                    if(password_verify($password, $login_simatera['password'])){
                        $data = array (
                            'email' => $login_simatera['email'],
                            'role_id' => $login_simatera['role_id'],
                            'date_created' => $login_simatera['date_created']
                        );
                        $this->session->set_userdata($data);
                        if($login_simatera['role_id'] == 1){
                            redirect('admin/dashboard'); //Tampilan Admin
                        }else{
                            redirect('user/index'); //Tampilan user
                        }
                        
                    }else{
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong password
                        </div>');
                            redirect('Auth_login');
                    }
               }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This email has not been activated
              </div>');
                redirect('Auth_login');
               }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered!
              </div>');
                redirect('Auth_login');
            }
            
        }

    }
