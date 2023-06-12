<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Google\Client as Google_Client;
use Google\Service\Oauth2;

class google_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {

        require_once 'vendor/autoload.php'; // Path ke file autoload dari library OAuth 2.0
        // Konfigurasi API Google
        $client = new Google_Client();
        $client->setClientId('331527896168-9p9h74lbckj0m91haj0d3cqibauj2ojt.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://localhost/Simatera/google_login/callback');
        $client->addScope('email');
        $client->addScope('profile');

        $authUrl = $client->createAuthUrl();
        redirect($authUrl);
    }

    public function callback()
    {
        // Konfigurasi API Google
        $client = new Google_Client();
        $client->setClientId('331527896168-9p9h74lbckj0m91haj0d3cqibauj2ojt.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('http://localhost/Simatera/google_login/callback');
        $client->addScope('email');
        $client->addScope('profile');   
     // Tangani callback dari Google
     if (isset($_GET["code"])){
        $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

        // Validasi token dan dapatkan data pengguna
        if(!isset($token["error"]))
        {
            $client->setAccessToken($token['access_token']);
            $this->session->set_userdata('access_token', $token['access_token']);

            // getting user profile
            $oauth = new Oauth2($client);
            $data = $oauth->userinfo->get();
            $current_datetime = date('Y-m-d H:i:s');

            if($this->User_model->Is_already_register($data['id']))
            {
            //update data
            $user_data = array(
                'name' => $data['name'],
                'email' => $data['email'],
                // 'role_id' => $data[2],
                // 'is_active' => $data[0],
                'date_created' => $current_datetime
            );

            $this->User_model->Update_user_data($user_data, $data['id']);
            }else{
            //insert data
            $user_data = array(
                'login_oauth_uid' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email'],
                // 'role_id' => $data[2],
                // 'is_active' => $data[0],
                'date_created' => $current_datetime
                );
                $this->User_model->Insert_user_data($user_data);
            }
            // Simpan data pengguna ke dalam session atau database sesuai kebutuhan Anda
            $this->session->set_userdata('user_data', $user_data);
        }
        redirect(base_url('user/index'));
        }
    }
}
