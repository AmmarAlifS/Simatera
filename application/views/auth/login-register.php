<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIMATERA Kota Bandung Login & Registration</title>
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
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <button class="btnLogin-popup">Login</button>
      </nav>
    </header>
    <div class="wrapper">
      <span class="icon-close"><ion-icon name="close"></ion-icon></span>
      <div class="form-box login">
        <h2>Login</h2>
        <form method="post" action="<?php echo base_url().'CLogin/Login';?>">
          <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" name="email" id="email" required />
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name="password" id="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox" /> Remember me</label>
            <a href="<?php echo site_url('CForgot'); ?>">Forgot Password</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <div class="login-register">
            <p>
              Don't have an account?<a href="#" class="register-link"
                >Register</a
              >
            </p>
          </div>
        </form>
      </div>

      <div class="form-box register">
        <h2>Registration</h2>
        <form class="username" method="post" action="<?php echo site_url('CRegister/create'); ?>">
          <div class="input-box">
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <input type="text" name="username" id="username" required />
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" name="email" id="email " required />
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name="password" id="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label
              ><input type="checkbox" required />I agree to the terms & condition</label
            >
          </div>
          <button type="submit" class="btn">Register</button>
          <div class="login-register">
            <p>
              Already have an account?<a href="#" class="login-link">Login</a>
            </p>
          </div>
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