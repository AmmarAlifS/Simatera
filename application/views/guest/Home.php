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
  <main id="main">

    

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/post-slide-1.jpg);">
                    <div class="img-bg-inner">
                      <h2>Sejarah Tugu Kilometer 0 Bandung</h2>
                      <p style="text-align: justify;">Tugu Kilometer 0 Bandung adalah sebuah monumen yang terletak di pusat kota Bandung, Jawa Barat, Indonesia. Monumen ini merupakan titik awal pengukuran jarak dari kota Bandung ke berbagai kota di Indonesia.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/post-slide-2.jpg);">
                    <div class="img-bg-inner">
                      <h2>Sejarah Gedung Merdeka</h2>
                      <p style="text-align: justify;">Gedung Merdeka Bandung adalah sebuah gedung bersejarah yang terletak di kota Bandung, Jawa Barat, Indonesia. Gedung ini dibangun pada tahun 1895 dan awalnya dikenal sebagai Gedung Societeit Concordia, sebuah klub sosial bagi para peranakan Belanda di kota Bandung.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/post-slide-3.jpg);">
                    <div class="img-bg-inner">
                      <h2>Sejarah Gedung Sate Bandung</h2>
                      <p style="text-align: justify;">Gedung Sate adalah sebuah bangunan bersejarah yang terletak di Kota Bandung, Jawa Barat, Indonesia. Gedung yang awalnya dibangun pada tahun 1920-an ini dikenal karena menara setinggi 67 meter dengan tujuh puncak yang menyerupai tusuk sate, sehingga dinamai Gedung Sate.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/post-slide-4.jpg);">
                    <div class="img-bg-inner">
                      <h2>Sejarah Museum Sri Baduga</h2>
                      <p style="text-align: justify;">Museum Sri Baduga terletak di Kota Bandung, Jawa Barat, Indonesia. Museum ini didirikan pada tahun 1974 dan dinamakan sesuai dengan nama raja legendaris Sunda, Sri Baduga Maharaja.</p>
                    </div>
                  </a>
                </div>
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

<section id="trending" class="mb-5">
  <h2 class="section-title">Trending</h2>
  <?php $count = 1; ?>
  <?php foreach($data_artikel as $row): ?>
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


    <!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
  <div class="container">
    <div class="row">
      
      <?php 
      $count = 0;
      foreach($data_artikel as $row){
        $count = $count + 1;
        
        // Set the class for post entry
        $post_entry_class = "col-lg-4";
        if ($count == 1) {
          $post_entry_class = "col-lg-8 post-entry-highlight";
          $highlight_title_class = "post-highlight-title";
        } else {
          $highlight_title_class = "";
        }
        
        // Create shortened description with "read more" button
        $short_description = substr($row->artikel, 0, 100);
        if (strlen($row->artikel) > 20) {
          $short_description .= '...';
        }
      ?>
      
      <div class="<?php echo $post_entry_class ?>">
        <div class="post-entry-1">
          <a href="single-post.html"><img src="<?php echo base_url()?>assets/img/<?php echo $row->Foto ?>" alt="" class="img-fluid post-thumbnail"></a>
          <div class="post-meta"> <span><?php echo $row->tanggal ?></span></div>
          <h2 class="<?php echo $highlight_title_class ?>"><a href="single-post.html"><?php echo $row->judul ?></a></h2>
          <?php if ($count != 1) { ?>
            <p style="text-align: justify;"><?php echo $short_description ?></p>
          <?php } ?>
          <button href="single-post.html" class="btn btn-primary">Read More</button>
        </div>
      </div>
      
      <?php } ?>
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

</body>

</html>

<style type="text/css">
  #trending {
  float: right;
  width: 25%;
  padding: 0 20px;
}

#trending h2.section-title {
  font-size: 24px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
}

#trending .card {
  margin-bottom: 20px;
}

#trending .card-title {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 5px;
}

#trending .card-text {
  font-size: 14px;
  color: #666;
  margin-bottom: 0;
}

#trending img {
  width: 100%;
  height: auto;
}
.trending-number {
  display: inline-block;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background-color: #f2f2f2;
  color: #333;
  font-weight: bold;
  border-radius: 50%;
  margin-right: 10px;
}
.post-entry-highlight a{
  font-size: 2.5rem;
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 1rem;
}
</style>