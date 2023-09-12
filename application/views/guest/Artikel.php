<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>SIMATERA | Artikel</title>
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
  <link href="<?php echo base_url()?>assets/css/artickel.css" rel="stylesheet">
</head>

<body>

  <main id="main">
    
    <section class="Artikel">
      <div class="container">
        <div class="row">
          <div class="col-md-9 Artikel" data-aos="fade-up">

            <!-- ======= Halaman Artikel ======= -->
            <div class="Artikel">
  <div class="post-meta"><span class="date">Sejarah</span> <span class="mx-1">&bullet;</span> <span><?php echo $xdetail->tanggal ?></span></div>
  <h1 class="mb-5"><?php echo $xdetail->judul;?></h1>
              
<?php
$artikel = $xdetail->artikel;

// Split the article into an array of words
$words = str_word_count($artikel, 1);

// Calculate the total number of words
$total_words = count($words);

// Find the midpoint index
$midpoint = $total_words / 2;

// Extract the first half of the article
$first_half = implode(' ', array_slice($words, 0, $midpoint));

// Extract the second half of the article
$second_half = implode(' ', array_slice($words, $midpoint));

// HTML snippet to insert in the middle
$html_snippet = '<div class="image-slider">
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(\'' . base_url() . 'assets/img/De-Javasche-Bank1.jpg\');">
                    <div class="img-bg-inner">
                      <h2>Gedung De Javasche Bank 1909.</h2>
                      <p>Gedung De Javasche Bank dibangun pada tahun 1909 dan menghadap ke Landraadweg (Jl. Perintis Kemerdekaan).</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(\'' . base_url() . 'assets/img/De-Javasche-Bank2.jpg\');">
                    <div class="img-bg-inner">
                      <h2>Gedung De Javasche Bank Tahun 1930.</h2>
                      <p>Gedung De Javasche Bank Bandung yang baru menghadap ke Logeweg (Jl. Braga) pada awal tahun 1930-an.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(\'' . base_url() . 'assets/img/De-Javasche-Bank3.jpg\');">
                    <div class="img-bg-inner">
                      <h2>Gedung De Javasche Bank Tahun </h2>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
    </section>
  </div>';


      $combined = '<div class="text-justify" style="text-align: justify">' . $first_half . ' ' . $html_snippet . ' ' . $second_half . '</div>';

      echo $combined;
      ?>
      <?php
        $video = $xdetail->Video;

        $video_id = '';
        $matches = [];
        $pattern = '/(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/|y2u\.be\/)([a-zA-Z0-9_-]{11})/';
        preg_match($pattern, $video, $matches);
        if (isset($matches[1])) {
            $video_id = $matches[1];
        }
      ?>

      <center>
      <div class="video-container" style="margin-top: 20px;">
          <iframe width="503" height="250" src="https://www.youtube.com/embed/<?= $video_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      </center>


    </div><!-- End  Halaman Artikel -->
       
       <!-- ======= Comments ======= -->
       <div id="disqus_thread"></div>
          <script>
              (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://simatera.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
    <div class="col-md-3">
      <!-- ======= Sidebar ======= -->
      <div class="aside-block">

        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

        <?php 
    $count = 1;
    $reverse_art = array_reverse($art); // Reverse the order of the array
  ?>
  <?php foreach($reverse_art as $row): ?>


    <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
      <div class="post-entry-3 border-bottom">
        <div class="post-meta-3"><span class="date"><?php echo $row->kategori ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('F j, Y', strtotime($row->tanggal)); ?></span></div>
        <h2 class="mb-2"><a href="#"> </span> <?php echo $row->judul ?></a></h2>
        <span class="author d-block"></span>
      </div>
    </div>
  <?php $count++; ?>
  <?php endforeach; ?>

         <!-- Latest -->
         <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
          <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">Museum</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
            <h2 class="mb-2"><a href="#">Museum Yang Sering Ramai Dikunjungi Oleh Anak-Anak SMP Yaitu Museum Geologi</a></h2>
            <span class="author mb-3 d-block">Rendy Riansyah</span>
          </div>

          <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">Sejarah</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
            <h2 class="mb-2"><a href="#"></a>Tempat Bersejarah di Kota Bandung, Seperti Gedung Konferensi Asia Afrika</h2>
            <span class="author mb-3 d-block">Rendy Riansyah</span>
          </div>

          <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">Pariwisata</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
            <h2 class="mb-2"><a href="#">Gua Jepang Bisa Dijadikan Tempat Pariwisata dan Juga Tempat Bersejarah</a></h2>
            <span class="author mb-3 d-block">Rendy Riansyah</span>
          </div>

          <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">Budaya</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
            <h2 class="mb-2"><a href="#">Budaya-Budaya Yang ada Di Kota Bandung</a></h2>
            <span class="author mb-3 d-block">Rendy Riansyah</span>
          </div>
        
        </div> <!-- End Latest --> 
      </div>
    </section>
  </main>



    <!-- Vendor JS Files -->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <script>
      AOS.init({
        offset: 120,
        duration: 3000,
      });
    </script>

      <style>
        /* SideBar */

.post-entry-3 {
  margin-bottom: 35px;
}

.post-entry-3 img {
  margin-bottom: 30px;
}

.post-entry-3 h2 {
  margin-bottom: 20px;
  font-size: 20px;
  font-weight: 500;
  line-height: 1.2;
  font-weight: 500;
}

.post-entry-3 h2 a {
  color: var(--color-black);
}

.post-entry-3.lg h2 {
  font-size: 40px;
  line-height: 1;
}

.post-meta-3 {
  font-size: 11px;
  letter-spacing: 0.07rem;
  text-transform: uppercase;
  font-weight: 600;
  font-family: var(--font-secondary);
  color: rgba(var(--color-black-rgb), 0.4);
  margin-bottom: 10px;
}
      </style>
</body>

</html>