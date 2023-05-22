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
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo base_url()?>assets/img/<?php echo $row->Foto ?>);">
                    <div class="img-bg-inner">
                      <h2><?php echo $row->judul ?></h2>
                      <p style="text-align: justify;"><?php echo $row->artikel ?></p>
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

<section id="trending" class="mb-5">
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

    <!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
  <div class="container">
    <div class="row">
      <?php 
        // Randomly select one article for the highlight section
        $highlight_article = $art[array_rand($art)];
        // Remove the highlight article from the list of articles to display in the regular section
        $regular_articles = array_filter($art, function($article) use ($highlight_article) {
          return $article->id_artikel != $highlight_article->id_artikel;
        });
        
        // Display the highlight article
      ?>
        <div class="col-lg-12 post-entry-highlight">
          <?php
          $short_description = substr($row->artikel, 0, 20);
          if (strlen($row->artikel) > 20) {
            $short_description .= '...';
          }
          ?>
          <div class="post-entry-1">
            <a href="single-post.html"><img src="<?php echo base_url()?>assets/img/<?php echo $highlight_article->Foto ?>" alt="" class="img-fluid post-thumbnail"></a>
            <div class="post-meta"> <span><?php echo $highlight_article->tanggal ?></span></div>
            <h2 class="post-highlight-title"><a href="single-post.html"><?php echo $highlight_article->judul ?></a></h2>
            <p style="text-align: justify;"><?php echo $short_description ?></p>
            <button href="single-post.html" class="btn btn-primary">Read More</button>
          </div>
        </div>
        
        <?php
        // Display the regular articles
        foreach($regular_articles as $row) {
          $post_entry_class = "col-lg-4";
          
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
              <h2><a href="single-post.html"><?php echo $row->judul ?></a></h2>
              <p style="text-align: justify;"><?php echo $short_description ?></p>
              <button href="single-post.html" class="btn btn-primary">Read More</button>
            </div>
          </div>
          <?php
        }
      ?>
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
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }
  .btn:hover {
    background-color: #D3D3D3;
  }
</style>