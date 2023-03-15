<?php
    if(isset($_POST['ok'])) {
        include_once 'function.php';
            $obj=new contact_form ();
            $res=$obj->kontak_kami($_POST);
        if($res==true) {
            echo "<script>alert('Pesan berhasil terkirim. Terima kasih')</script>";
        } else {
            echo "<script>alert('Pesan gagal terkirim')</script>";
        }
    }

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