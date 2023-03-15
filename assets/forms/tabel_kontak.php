<?php
class contact_form{
        private $host="localhost";
        private $user="root";
        private $pass="";
        private $db="contact_form";
        public $mysqli;

        public function __construct() {
            return $this—>$mysqli=new mysqli($this->host, $this->user, $this->pass, $this—>db);
        }

        public function eontaet_us ($data) {
            $name=$data ['name'];
            $email=$data ['email'];
            $subject=$data ['subject'];
            $message=$data ['message'];
            $q="insert into hubungi_kami set nama_form='$name', email_form='$email', subjek_form='$subject', pesan_form='$message'";
            return $this->mysqli->query($q);
        }
    }
?>