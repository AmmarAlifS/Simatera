<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// require_once 'vendor/autoload.php';
// use Google\Client as Google_Client;
// use Google\Service\Oauth2;
// class google_login extends CI_Controller {
    
//     public function __construct() {
//         parent::__construct();
        
//         // Load library Google API PHP
//         $this->load->library('session');
        
//         // Load model pengguna untuk menyimpan data
//         $this->load->model('User_model');
//     }
    
//     public function index() {
//         // Inisialisasi client Google
//         $client = new Google_Client();
//         $client->setClientId('331527896168-9p9h74lbckj0m91haj0d3cqibauj2ojt.apps.googleusercontent.com');
//         $client->setClientSecret('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');
//         $client->setRedirectUri('http://localhost/Simatera/');
//         $client->addScope("email");
//         $client->addScope("profile");
        
//         // Mendapatkan URL autentikasi Google
//         $data['authURL'] = $this->client->createAuthUrl();
        
//         // Menampilkan halaman login dengan Google
//         $this->load->view('Auth_login', $data);
//     }
    
//     public function authenticate() {
//         // Menangani kode autentikasi setelah pengguna login dengan Google
//         if ($this->input->get('code')) {
//             $token = $this->client->fetchAccessTokenWithAuthCode($this->input->get('code'));
//             $this->client->setAccessToken($token['access_token']);
            
//             // Mendapatkan profil pengguna dari Google
//             $googleOAuth = new Oauth2($this->client);
//             $userInfo = $googleOAuth->userinfo->get();
            
//             // Memasukkan data pengguna ke dalam database
//             $data = array(
//                 'nama' => $userInfo->name,
//                 'email' => $userInfo->email,
//                 'image' => $userInfo->image,
//                 'role_id' => 2,
//                 'is_active' => 0,
//                 'date_created' => date('Y-m-d H:i:s') 
//             );
//             $this->User_model->insert($data);
            
//             // Menyimpan informasi pengguna ke dalam sesi
//             $this->session->set_userdata('email', $userInfo->email);
//             $this->session->set_userdata('nama', $userInfo->name);
//             $this->session->set_userdata('image', $userInfo->image);
//             $this->session->set_userdata('role_id', 2);
//             $this->session->set_userdata('is_active', 0);
//             $this->session->set_userdata('date_created', date('Y-m-d H:i:s'));
            
            
//             // Redirect ke halaman setelah berhasil login
//             redirect('User/index');
//         }
//     }
// }
?>