<div class="container">
<style>
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 10vh;
    }
  </style>
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Masuk</h1>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="post" action="<?php base_url('Auth_login');?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="email" name="email"
                                        placeholder="Masukan Alamat Email..."
                                        value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="password" name="password" placeholder="Masukan Kata Sandi...">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Masuk
                                </button>
                            </form>
                            <hr>
                            <div class="login-container">
                                <a href="<?= base_url('google_login/index'); ?>">
                                        <img width="260" height="60" src="<?=base_url('assets\img\sign-with-google.png')?>">
                                        </a>
                                </div>
                            </hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('Auth_forgot') ?>">Lupa Kata Sandi?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="Auth_registration">Buat Akun!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>