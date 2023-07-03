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

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="bAgBic2R"></script>

  <!-- Twitter SDK -->
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  <!-- AddThis SDK -->
  <script async src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=YOUR_ADDTHIS_PROFILE_ID"></script>

</head>

<body>

  <main id="main">
  <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date"><?php echo $xdetail->kategori ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $xdetail->tanggal ?></span></div>
              <h1 class="mb-5"><?php echo $xdetail->judul ?></h1>
              <p><?php echo $xdetail->artikel ?></p>
            </div><!-- End Single Post Content -->

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
                                <h2></h2>
                                <p></p>
                              </div>
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/<?php echo $xdetail->Foto2 ?>);">
                              <div class="img-bg-inner">
                                <h2></h2>
                                <p></p>
                              </div>
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/<?php echo $xdetail->Foto3 ?>);">
                              <div class="img-bg-inner">
                                <h2></h2>
                                <p></p>
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

            <!-- video -->
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
                      <iframe width="503" height="300" src="https://www.youtube.com/embed/<?= $video_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </center>

            <!-- Share buttons -->
            <div class="share-buttons" style="margin-top : 50px;" >
              <div class="caption" style="margin-bottom : 25px;">Bagikan ke:</div>
              <div class="share-button-row">
                <div class="share-button">
                  <!-- Facebook -->
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(current_url()); ?>" target="_blank">
                    <img src="<?php echo base_url()?>assets/icon/facebook.png" alt="Facebook" />
                  </a>
                </div>

                <div class="share-button">
                  <!-- Twitter -->
                  <a href="https://twitter.com/share?url=<?php echo urlencode(current_url()); ?>&text=<?php echo urlencode($xdetail->judul); ?>" target="_blank">
                    <img src="<?php echo base_url()?>assets/icon/twitter.png" alt="Twitter" />
                  </a>
                </div>

                <div class="share-button">
                  <!-- Pinterest -->
                  <a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(current_url()); ?>&media=<?php echo urlencode(base_url() . 'assets/img/' . $xdetail->Foto); ?>&description=<?php echo urlencode($xdetail->judul); ?>" target="_blank">
                    <img src="<?php echo base_url()?>assets/icon/pinterest.png" alt="Pinterest" />
                  </a>
                </div>

                <div class="share-button">
                  <!-- Telegram -->
                  <a href="https://t.me/share/url?url=<?php echo urlencode(current_url()); ?>&text=<?php echo urlencode($xdetail->judul); ?>" target="_blank">
                    <img src="<?php echo base_url()?>assets/icon/telegram.png" alt="Telegram" />
                  </a>
                </div>
              </div>
            </div>

            <!-- ======= Comments ======= -->
            <div class="comments">
              <div class="comment d-flex mb-4">
                <div class="flex-grow-1 ms-2 ms-sm-3">
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
              </div>
            </div><!-- End Comments -->

          </div>
          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Latest</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">
                <!-- Latest -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <?php 
                    $reverse_art = array_reverse($art); // Reverse the order of the array
                    $limited_art = array_slice($reverse_art, 0, 6); // Limit the array to maximum 6 elements
                    ?>
                    <?php foreach($limited_art as $row): ?>
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta">
                                <span class="date"><?php echo $row->kategori ?></span>
                                <span class="mx-1">&bullet;</span>
                                <span><?php echo date('F j, Y', strtotime($row->tanggal)); ?></span>
                            </div>
                            <h2 class="mb-2">
                                <a href="<?php echo base_url().'guest/single_post/'.$row->id_artikel;?>">
                                    <?php echo $row->judul ?>
                                </a>
                            </h2>
                            <span class="author mb-3 d-block"></span>
                        </div>
                    <?php endforeach; ?>
                </div> <!-- End Latest -->
              </div>
            </div>
          </div>
          
        </div>
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