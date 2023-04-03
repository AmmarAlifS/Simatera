<!DOCTYPE html>
<html lang="en">
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/glightbox/css/glightbox.min.cssg" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
  </head>
  <body>
    <header>
      <img
        src="<?= base_url('assets/img/simatera-1.png')?>"
        alt=""
        class="img-fluid"
        style="width: 15%; height: 120%"
      />
      <nav class="navigation">
        <a href="CLogin"><i class="bi bi-backspace"></i> Back</a>
      </nav>
    </header>
    <div class="wrapper-forgot" style=" margin-top: 0px; position: relative; width: 400px;
  height: auto;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
  
  ">
      <div class="form-box login" style="">
        <h2 style="font-size: 2em;
  color: #162938;
  text-align: center;">Forgot Password</h2>
        <form method="post" action="<?= base_url('CForgot')?>" style="margin: 10%;">
          <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" name="email" id="email" required />
            
            <label>Email</label>
          </div>
          <button type="submit" class="btn"">Reset Password</button>
          
        </form>
      </div>
    </div>
    <script src="<?= base_url('assets/js/script.js')?>"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>

<style type="text/css">
    
</style>