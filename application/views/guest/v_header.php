<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simatera | Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/img/LeafW.png" rel="icon">
  <link href="<?php echo base_url()?>assets/img/LeafW.png" rel="bootstrap-icons">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/glightbox/css/glightbox.min.cssg" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo base_url()?>assets/css/variables.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">

</head>


<body>
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo base_url().'guest/index';?>" style="padding-left: 8%;" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>SIMATERA</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url().'guest/index';?>">Home</a></li>
          <li><a href="<?php echo base_url();?>guest/list">Artikel</a></li>
          <li><a href="<?php echo base_url();?>guest/tentangkami">Tentang Kami</a></li>
          <li><a href="<?php echo base_url();?>guest/kontak">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <!-- <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a> -->

        <!-- ======= Search Form ======= -->
        <form action="<?php echo base_url();?>guest/search" method="post" class="search-form">
          <input type="text" placeholder="Cari artikel..." class="form-control" name="keyword" id="keyword" autocomplete="off">
          <div id="autocomplete-results"></div> <!-- Container for displaying autocomplete results -->
        </form>
        <!-- End Search Form -->
      </div>
      
    </div>
    <li style="padding-right: 8%;" id="navbar" class="navbar"><a href="<?= base_url('Auth_login') ?>">Login</a></li>
  </header><!-- End Header -->

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#keyword').on('input', function() {
      var keyword = $(this).val();
      if (keyword.length >= 2) { // Minimum 2 characters for autocomplete
        $.ajax({
          url: '<?php echo base_url(); ?>guest/searchAutocomplete',
          type: 'POST',
          dataType: 'json',
          data: {keyword: keyword},
          success: function(data) {
            var autocompleteResults = '';
            data.forEach(function(result) {
              autocompleteResults += '<li>' + result.judul + '</li>'; // Modify this based on your table structure
            });
            $('#autocomplete-results').html(autocompleteResults);
          }
        });
      } else {
        $('#autocomplete-results').empty();
      }
    });
  });
</script>

</body>

</html>