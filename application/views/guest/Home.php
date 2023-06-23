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

<section id="hero-slider" class="hero-slider">
  <div class="container-md" data-aos="fade-in">
    <div class="row">
      <div class="col-12">
        <div class="swiper sliderFeaturedPosts my-custom-section"> <!-- Add a unique class name -->
          <div class="swiper-wrapper">
            <?php
            $counter = 0;
            $shuffledArt = $art; // Create a copy of the array
            shuffle($shuffledArt); // Shuffle the copied array randomly
            foreach ($shuffledArt as $row):
              if ($counter >= 3) break;
              ?>
              <div class="swiper-slide">
                <a href="<?php echo base_url().'guest/artikel/'.$row->id_artikel;?>" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/<?php echo $row->Foto ?>);">
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
</section>
<!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
  <div class="container" data-aos="fade-up">
    <div class="row g-5">
      <div class="col-lg-4">
        <div class="post-entry-1 lg">
          <a href="<?php echo base_url().'guest/single_post/'.$art[0]->id_artikel;?>"><img src="<?php echo base_url()?>assets/img/<?php echo $art[0]->Foto ?>" alt="" class="img-fluid" style="width: 100%; height: auto;"></a>
          <div class="post-meta">
            <span class="date"><?php echo $art[0]->kategori; ?></span>
            <span class="mx-1">&bullet;</span>
            <span><?php echo $art[0]->tanggal; ?></span>
          </div>
          <h2 style="text-align: justify;"><a href="<?php echo base_url().'guest/single_post/'.$art[0]->id_artikel;?>"><?php echo $art[0]->judul; ?></a></h2>
          <p class="mb-4 d-block">
            <?php
            $words = explode(' ', $art[0]->artikel);
            $limitedWords = array_slice($words, 0, 15);
            echo implode(' ', $limitedWords);
            if (count($words) > 15) {
              echo '...';
            }
            ?>
          </p>

          <div class="d-flex align-items-center author">
            <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
            <div class="name">
              <h3 class="m-0 p-0">Cameron Williamson</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="row g-5">
          <?php $remainingPosts = array_slice($art, 1, 6); ?>
          <?php foreach ($remainingPosts as $index => $article): ?>
            <div class="col-lg-6 border-start custom-border">
              <div class="post-entry-1" >
                <a href="<?php echo base_url().'guest/single_post/'.$article->id_artikel;?>"><img src="<?php echo base_url()?>assets/img/<?php echo $article->Foto ?>" alt="" class="img-fluid" style="width: 100%; height: 150px;"></a>
                <div class="post-meta">
                  <span class="date"><?php echo $article->kategori; ?></span>
                  <span class="mx-1">&bullet;</span>
                  <span><?php echo date('M jS \'y'); ?></span> <!-- Replace with the appropriate date -->
                </div>
                <h2 style="text-align: justify;"><a href="<?php echo base_url().'guest/single_post/'.$article->id_artikel;?>"><?php echo $article->judul; ?></a></h2>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-lg-3">
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
                ?>
                <?php foreach($reverse_art as $row): ?>
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date"><?php echo $row->kategori ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('F j, Y', strtotime($row->tanggal)); ?></span></div>
                    <h2 class="mb-2"><a href="single-post.html"><?php echo $row->judul ?></a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                  </div>
                <?php endforeach; ?>
            </div> <!-- End Latest -->
          </div>
        </div>
      </div> 

    </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->

    <!-- ======= Culture Category Section ======= -->
  <section class="category-section">
  <div class="container" data-aos="fade-up">
    <div class="section-header d-flex justify-content-between align-items-center mb-5">
      <h2>Museum</h2>
      <div><a href="category.html" class="more">See All Museum</a></div>
    </div>

    <div class="row">
      <div class="col-md-9">
        <?php foreach ($art as $index => $article): ?>
          <?php if ($index === 1 && $article->kategori === 'Museum'): ?> <!-- Main Post -->
            <div class="d-lg-flex post-entry-2">
              <a href="<?php echo base_url().'guest/single_post/'.$article->id_artikel;?>" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="<?php echo base_url()?>assets/img/<?php echo $article->Foto ?>" alt="" class="img-fluid" style="width: 100%; height: 330px;">
              </a>
              <div>
                <div class="post-meta">
                  <span class="date"><?php echo $article->kategori ?></span>
                  <span class="mx-1">&bullet;</span>
                  <span><?php echo date('M jS \'y', strtotime($article->tanggal)); ?></span>
                </div>
                <h3><a href="<?php echo base_url().'guest/single_post/'.$article->id_artikel;?>"><?php echo $article->judul ?></a></h3>
                <p style="text-align: justify;"><?php echo implode(' ', array_slice(explode(' ', $article->artikel), 0, 50)); ?>...</p>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <div class="row">
          <div class="col-lg-4">
            <?php foreach ($art as $index => $article): ?>
              <?php if ($index > 1 && $index < 4 && $article->kategori === 'Museum'): ?> <!-- Additional Posts -->
                <div class="post-entry-1 border-bottom">
                  <a href="<?php echo base_url().'guest/single_post/'.$article->id_artikel;?>"><img src="<?php echo base_url()?>assets/img/<?php echo $article->Foto ?>" alt="" class="img-fluid"></a>
                  <div class="post-meta">
                    <span class="date"><?php echo $article->kategori ?></span>
                    <span class="mx-1">&bullet;</span>
                    <span><?php echo date('M jS \'y', strtotime($article->tanggal)); ?></span>
                  </div>
                  <h2 class="mb-2"><a href="<?php echo base_url().'guest/single_post/'.$article->id_artikel;?>"><?php echo $article->judul ?></a></h2>
                  <p class="mb-4 d-block" style="text-align: justify;"><?php echo implode(' ', array_slice(explode(' ', $article->artikel), 0, 40)); ?>...</p>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>

          <div class="col-lg-8">
            <?php foreach ($art as $index => $article): ?>
              <?php if ($index === 4 && $article->kategori === 'Museum'): ?> <!-- Third Post -->
                <div class="post-entry-1">
                  <a href="<?php echo base_url().'guest/single_post/'.$article->id_artikel;?>"><img src="<?php echo base_url()?>assets/img/<?php echo $article->Foto ?>" alt="" class="img-fluid"></a>
                  <div class="post-meta">
                    <span class="date"><?php echo $article->kategori ?></span>
                    <span class="mx-1">&bullet;</span>
                    <span><?php echo date('M jS \'y', strtotime($article->tanggal)); ?></span>
                  </div>
                  <h2 class="mb-2"><a href="<?php echo base_url().'guest/single_post/'.$article->id_artikel;?>"><?php echo $article->judul ?></a></h2>
                  <p class="mb-4 d-block"><?php echo implode(' ', array_slice(explode(' ', $article->artikel), 0, 15)); ?>...</p>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <?php 
          $museum_posts = array_filter($reverse_art, function($post) {
            return $post->kategori === 'Museum';
          }); // Filter posts with "Museum" category
          $limited_posts = array_slice($museum_posts, 0, 6); // Limit the posts to 6
        ?>
        <?php foreach($limited_posts as $row): ?>
          <div class="post-entry-1 border-bottom">
            <div class="post-meta">
              <span class="date"><?php echo $row->kategori ?></span>
              <span class="mx-1">&bullet;</span>
              <span><?php echo date('F j, Y', strtotime($row->tanggal)); ?></span>
            </div>
            <h2 class="mb-2">
              <a href="<?php echo base_url().'guest/single_post/'.$row->id_artikel;?>"><?php echo $row->judul ?></a>
            </h2>
            <span class="author mb-3 d-block">Jenny</span>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>
<!-- End Culture Category Section -->

    <!-- ======= Business Category Section ======= -->
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <!-- <img src="assets/img/Simatera C.Png" alt="" class="img-fluid"> -->
            <h1 class="page-title">Tentang Kami</h1>
            
          </div>
        </div>

        <div class="row mb-5">

          <div class="d-md-flex post-entry-2 half">
            <div href="#" class="me-4 thumbnail">
              <br>
              <img src="<?php echo base_url()?>assets/img/Home_TentangKami.jpg" alt="" class="img-fluid">
            </div>
            <div class="ps-md-5 mt-4 mt-md-0">
              <div class="post-meta mt-4">About us</div>
              <?php foreach ($setting->result() as $x): ?>	
                <p><?= $x->tentang_kami;?></p>
                <?php endforeach; ?>
              <!-- <h2 class="mb-4 display-4">Company History</h2> -->
              
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Business Category Section -->

    <!-- ======= Lifestyle Category Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>Lifestyle</h2>
          <div><a href="category.html" class="more">See All Lifestyle</a></div>
        </div>

        <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <a href="<?php echo base_url().'guest/single_post/'.$art->id_artikel;?>"><img src="<?php echo base_url()?>assets/img/<?php echo $art->Foto ?>" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
              <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

              <div class="d-flex align-items-center author">
                <div class="photo"><img src="assets/img/person-7.jpg" alt="" class="img-fluid"></div>
                <div class="name">
                  <h3 class="m-0 p-0">Esther Howard</h3>
                </div>
              </div>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1">
              <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

          </div>

          <div class="col-lg-8">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                  <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-4.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                  <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                  <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                </div>
              </div>
              <div class="col-lg-4">

                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                  <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

              </div>
            </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section><!-- End Lifestyle Category Section -->

  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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