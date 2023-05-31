<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'vendor/autoload.php';

use Google\Client as Google_Client;
use Google\Service\Oauth2;

class google_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        
        $client = new Google_Client();
        $client->setClientId('331527896168-9p9h74lbckj0m91haj0d3cqibauj2ojt.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://localhost/Simatera/google_login.php');
        $client->addScope('profile');
        $client->addScope('email');


        if($code = $this->input->get('code')){
            $token = $client->fetchAccessTokenWithAuthCode($code);
            $client->setAccessToken($token);
            $oauth = new Oauth2($client);
            
            $user_info = $oauth->userinfo->get();
            $data['name'] = $user_info->name;
            $data['email'] = $user_info->email;
            $data['image'] = $user_info->picture;
            
            if($user = $this->user_model->getUser($user_info->email)){
                $this->session->set_userdata('user',$user);
            }else{
                $this->user_model->createUser($data);
            }
            
            $this->session->set_userdata($data);
            if($login_simatera['role_id'] == 'admin'){
                redirect('admin/dashboard'); //Tampilan Admin
            }else{
                redirect('user/index'); //Tampilan user
            }

            // redirect('google_login');;


        }else{
        
            

            $url = $client->createAuthUrl();
            header('Location:'.filter_var($url,FILTER_SANITIZE_URL));
        }

    }
}
