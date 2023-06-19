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

  <!-- Add the Facebook SDK -->
 <!-- Facebook SDK -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="bAgBic2R"></script>

<!-- Twitter SDK -->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<!-- AddThis SDK -->
<script async src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=YOUR_ADDTHIS_PROFILE_ID"></script>

<!-- HTML code -->
<?php
// Get the current page URL
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<div class="container">
    <div class="row">
        <div class="col-md-9 Artikel" data-aos="fade-up">

            <!-- ======= Halaman Artikel ======= -->
            <div class="Artikel">
                <div class="post-meta">
                    <span class="date">Sejarah</span>
                    <span class="mx-1">&bullet;</span>
                    <span><?php echo $xdetail->tanggal ?></span>
                </div>
                <h1 class="mb-5"><?php echo $xdetail->judul ?></h1>

                <?php echo $xdetail->artikel ?>

                <div class="image-slider">
                    <!-- ======= Hero Slider Section ======= -->
                    <section id="hero-slider" class="hero-slider">
                        <div class="container-md" data-aos="fade-in">
                            <div class="row">
                                <div class="col-12">
                                    <div class="swiper sliderFeaturedPosts">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/<?php echo $xdetail->Foto ?>);">
                                                    <div class="img-bg-inner">
                                                        <h2>Gedung De Javasche Bank 1909.</h2>
                                                        <p>Gedung De Javasche Bank dibangun pada tahun 1909 dan menghadap ke Landraadweg (Jl. Perintis Kemerdekaan).</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="swiper-slide">
                                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/<?php echo $xdetail->Foto2 ?>);">
                                                    <div class="img-bg-inner">
                                                        <h2>Gedung De Javasche Bank Tahun 1930.</h2>
                                                        <p>Gedung De Javasche Bank Bandung yang baru menghadap ke Logeweg (Jl. Braga) pada awal tahun 1930-an.</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="swiper-slide">
                                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/<?php echo $xdetail->Foto3 ?>);">
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
                </div>

                <?php
                $video = $xdetail->Video;

                // Extract the video ID from the YouTube URL
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
                        <iframe width="503" height=300" src="https://www.youtube.com/embed/<?= $video_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </center>

                <!-- Share buttons -->
<div class="share-buttons">
  <div class="caption">Bagikan ke:</div>

  <div class="share-button-row">
    <div class="share-button">
      <!-- Facebook -->
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(current_url()); ?>" target="_blank">
        <img src="https://img.icons8.com/color/48/000000/facebook-new.png" alt="Facebook" />
      </a>
    </div>

    <div class="share-button">
      <!-- Twitter -->
      <a href="https://twitter.com/share?url=<?php echo urlencode(current_url()); ?>&text=<?php echo urlencode($xdetail->judul); ?>" target="_blank">
        <img src="https://img.icons8.com/color/48/000000/twitter--v1.png" alt="Twitter" />
      </a>
    </div>

    <div class="share-button">
      <!-- Pinterest -->
      <a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(current_url()); ?>&media=<?php echo urlencode(base_url() . 'assets/img/' . $xdetail->Foto); ?>&description=<?php echo urlencode($xdetail->judul); ?>" target="_blank">
        <img src="https://img.icons8.com/color/48/000000/pinterest--v1.png" alt="Pinterest" />
      </a>
    </div>

    <div class="share-button">
      <!-- Telegram -->
      <a href="https://t.me/share/url?url=<?php echo urlencode(current_url()); ?>&text=<?php echo urlencode($xdetail->judul); ?>" target="_blank">
        <img src="https://img.icons8.com/color/48/000000/telegram-app--v1.png" alt="Telegram" />
      </a>
    </div>
  </div>
</div>
       
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
            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

          <!-- Popular -->
          <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
              <?php 
                $reverse_art = array_reverse($art); // Reverse the order of the array
              ?>
              <?php foreach($reverse_art as $row): ?>
              <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date"><?php echo $row->kategori ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('F j, Y', strtotime($row->tanggal)); ?></span></div>
                <h2 class="mb-2"><a href="single-post.html"><?php echo $row->judul ?></a></h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
              </div>
              <?php endforeach; ?>
          </div> <!-- End Popular -->
       
        <!-- <div class="aside-block">
          <h3 class="aside-title">Video</h3>
          <div class="video-post">
            
              



          </div>
          
          </div>
        </div> --><!-- End Video -->

        <!-- <div class="aside-block">
          <h3 class="aside-title">Tags</h3>
          <ul class="aside-tags list-unstyled">
            <li><a href="category.html">Museum</a></li>
            <li><a href="category.html">Budaya</a></li>
            <li><a href="category.html">Sejarah</a></li>
            <li><a href="category.html">Pariwisata</a></li>
            <li><a href="category.html">Politics</a></li>
          </ul>
        </div>End Tags -->

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
  .share-buttons {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .share-button-row {
    display: flex;
    flex-wrap: wrap;
  }

  .share-button {
    margin-right: 10px;
    margin-bottom: 10px;
  }

  .caption {
    font-weight: bold;
  }
</style>

</body>

</html>