<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {
    private $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function logged_in() {
        return $this->CI->session->userdata('logged_in');
    }

    public function restrict() {
        if (!$this->logged_in()) {
            redirect('user/index'); 
        }
    }
}
?>