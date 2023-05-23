<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_changePassword extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if(!$this->session->userdata('reset_email')){
            redirect('Auth_changePassword');
        }
        
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');
        if($this->form_validation->run() == false)
        {
            $data['title'] = 'Simatera Forgot Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/change-password');
            $this->load->view('templates/auth_footer');
        }else {
            $password = password_hash($this->input->post('password1'),PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('login_simatera');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password has been change! Please login.
          </div>');
            redirect('Auth_login');
        }
    }

    public function resetpassword(){
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $login_simatera = $this->db->get_where('login_simatera', ['email' => $email])->row_array();

        if($login_simatera) {
            $login_simatera_token = $this->db->get_where('login_simatera_token', ['token' => $token])->row_array();

            if($login_simatera_token){
                $this->session->set_userdata('reset_email', $email);
                $this->index();
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Reset password failed! Wrong token
              </div>');
                redirect('Auth_login');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Reset password failed! Wrong email
          </div>');
            redirect('Auth_login');
        }
    }
}