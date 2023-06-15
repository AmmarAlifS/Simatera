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
  <link href="<?php echo base_url()?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo base_url()?>assets/css/variables.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">
  

</head>

<body>
  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <?php 
        $counter = 0;
        shuffle($art); // shuffle the array randomly
        foreach($art as $row):
        if ($counter >= 3) break;
    ?>
<div class="swiper-slide">
  <a href="<?php echo base_url().'guest/single_post/'.$row->id_artikel;?>" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/<?php echo $row->Foto ?>);">
    <div class="img-bg-inner">
      <h2><?php echo $row->judul ?></h2>
      <p style="text-align: justify;">
        <?php
          $content = $row->artikel;
          $words = explode(' ', $content);
          $truncatedContent = implode(' ', array_slice($words, 0, 25));
          echo $truncatedContent . (count($words) > 25 ? '...' : '');
        ?>
      </p>
    </div>
  </a>
</div>


                <?php 
        $counter++;
        endforeach; 
    ?>              
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

<section id="trending" clas s="mb-5">
  <h2 class="section-title">New post</h2>
  <?php 
    $count = 1;
    $reverse_art = array_reverse($art); // Reverse the order of the array
  ?>
  <?php foreach($reverse_art as $row): ?>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title mb-0">
        <span class="trending-number"><?php echo $count ?>.</span> <?php echo $row->judul ?>
      </h5>
      <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($row->tanggal)); ?></small></p>
    </div>
  </div>
  <?php $count++; ?>
  <?php endforeach; ?>
</section>

<section id="posts" class="posts" style="margin-left: 100px;">
  <div class="container">
    <div class="row">
      <?php
      $counter = 0; // Initialize counter

      foreach($art as $row) {
        // Create shortened description with "read more" button
        $words = explode(' ', $row->artikel);
        $short_description = '';
        $lineCount = 0;
        $lineLength = 0;

        foreach ($words as $word) {
          $short_description .= $word . ' ';
          $lineLength += strlen($word) + 1; // +1 for the space after the word

          if ($lineLength > 50) { // Adjust the line length limit as per your requirements
            $short_description .= '...';
            break;
          }

          if (substr_count($short_description, "\n") >= 2) {
            $short_description .= '...';
            break;
          }

          if (substr_count($short_description, "\n") > $lineCount) {
            $lineCount++;
            $lineLength = 0;
          }
        }
      ?>

      <div class="thumb-box">
        <a href="<?php echo base_url().'guest/single_post/'.$row->id_artikel;?>">
          <div class="image-container">
            <img src="<?php echo base_url()?>assets/img/<?php echo $row->Foto ?>" alt="">
          </div>
          <span class="overlay-box">
            <span class="meta"><?php echo $row->tanggal ?></span>
            <span class="main-titlee"><?php echo $row->judul ?></span>
            <span class="description"><?php echo $short_description ?></span>
          </span>
        </a>
      </div>

      <?php
        $counter++;
        if ($counter % 3 == 0) {
          echo '</div><div class="row">'; // Start a new row after every 3 posts
        }
      } ?>
    </div>
  </div>
</section>

<!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/php-email-form/validate.js"></script>

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