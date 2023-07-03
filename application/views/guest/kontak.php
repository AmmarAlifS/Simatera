<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simatera - Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="<?php echo base_url()?>assets/img/LeafW.png" rel="icon">
  <link href="<?php echo base_url()?>assets/img/LeafW.png" rel="bootstrap-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="<?php echo base_url()?>https://fonts.googleapis.com">
  <link rel="preconnect" href="<?php echo base_url()?>https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo base_url()?>assets/css/variables.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.3.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Hubungi Kami</h1>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <address>Jl. Wastukencana No.2, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117</address>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item info-item-borders">
              <i class="bi bi-phone"></i>
              <h3>Nomor Telepon</h3>
              <p><a href="tel:+6285722053080">022-4234793</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com"> diskominfo@bandung.go.id</a></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <br>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1924.034366424438!2d107.60960651600695!3d-6.911440306544655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a04b86947%3A0x588f28f53e8076c0!2sDiskominfo%20Kota%20Bandung!5e0!3m2!1sid!2sid!4v1678076426081!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    
        <div class="row">
        
          <div class="col-lg-12 text-center mt-5 mb-1">
            <h1 class="form-title">Untuk Kritik & Saran Gunakan Form Di Bawah</h1>
          </div>
        </div>
          <div class="form mt-2">
          
              <form class="kin" method="post" action="<?php echo site_url('formcontrol/alert'); ?>" >
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="pesan" id="pesan" rows="5" placeholder="Pesan" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit">Kirim Pesan</button>
                </div>
            </form>

            
        </div>


      </div>
    </section>

  </main><!-- End #main -->

  <a href="" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/js/main.js"></script>
  <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <script>
      AOS.init({
        offset: 120,
        duration: 3000,
      });
    </script>
</body>

</html>

<style type="text/css">
  .text-center button{
    color: red;
  }
</style>