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

    <!-- ======= Post Grid Section ======= -->
<!-- <section id="posts" class="posts">
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
          $short_description = implode(' ', array_slice(explode(' ', $row->artikel), 0, 25));
          if (str_word_count($row->artikel) > 25) {
            $short_description .= '...';
          }
          ?>
          <div class="post-entry-1">
            <a href="single-post.html"><img src="<?php echo base_url()?>assets/img/<?php echo $highlight_article->Foto ?>" alt="" class="img-fluid post-thumbnail"></a>
            <div class="post-meta"> <span><?php echo $highlight_article->tanggal ?></span></div>
            <h2 class="post-highlight-title"><a href="single-post.html"><?php echo $highlight_article->judul ?></a></h2>
            <p style="text-align: justify;"><?php echo $short_description ?></p>
            <a href="<?php echo base_url().'guest/single_post/'.$row->id_artikel;?>"><button class="btn btn-primary">Read More</button></a>
          </div>
        </div>
        
        <?php
        // Display the regular articles
        foreach($regular_articles as $row) {
          $post_entry_class = "col-lg-4";
          
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
          <div class="<?php echo $post_entry_class ?>">
            <div class="post-entry-1">
              <a href="single-post.html"><img src="<?php echo base_url()?>assets/img/<?php echo $row->Foto ?>" alt="" class="img-fluid post-thumbnail" style="width: 100%; height: 200px;"></a>
              <div class="post-meta"> <span><?php echo $row->tanggal ?></span></div>
              <h2><a href="single-post.html" style="font-family: inherit; font-weight: bold;"><?php echo $row->judul ?></a></h2>
              <p style="text-align: justify; font-family: serif;"><?php echo $short_description ?></p>
              <!-- <button href="<?php echo anchor('guest/single_post/'.$row->id_artikel)?>" class="btn btn-primary">Read More</button> -->
              <!-- <a href="<?php echo base_url().'guest/single_post/'.$row->id_artikel;?>"><button class="btn btn-primary">Read More</button></a> -->
            <!-- </div> -->
          <!-- </div> -->
          <!-- <?php 
        }
      ?>
    </div>
  </div>
</section> -->
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
        <a href="">
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

<style type="text/css">

  #posts.posts a {
    color: #fff;
    text-decoration: none;
  }

  #posts.posts * {
    outline: 0;
  }

  #posts.posts body {
    margin-top: 100px;
    font-size: 11px;
    color: #aaa;
    font-family: "Poppins", sans-serif;
  }

  #posts.posts .container {
    max-width: 1140px;
    margin: 0 auto;
    display: block;
  }

  #posts.posts .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 20px;
  }

  #posts.posts .thumb-box {
    display: flex;
    width: calc(33.3333% - 20px);
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
  }

  #posts.posts .thumb-box a {
    padding: 0;
    position: relative;
    width: 100%;
    height: 100%;
  }

/*  #posts.posts .image-container {
    position: relative;
    width: 100%;
    padding-top: 100%;
    overflow: hidden;
  }*/

  #posts.posts .thumb-box img {
/*    position: absolute;*/
    top: 0;
    left: 0;
    width: 100%;
    height: 150px;
    object-fit: cover;
  }

  #posts.posts .overlay-box {
    position: absolute;
    bottom: 0;
    width: 100%;
    z-index: 3;
    left: 0;
    padding: 5%;
    background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.75));
  }

  #posts.posts .meta {
    font-size: 14px;
    display: block;
  }

  #posts.posts .main-titlee {
    font-size: 16px;
    display: block;
    font-weight: 700;
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.5);
  }

  #posts.posts .description {
    color: #ccc;
    font-size: 13px;
    margin-top: 5px;
    display: block;
    color: #ccc;
    max-height: 0;
    line-height: 18px;
    overflow: hidden;
    opacity: 0;
    transition: opacity 0.4s ease-out, max-height 0.4s ease-out, margin 0.4s;
  }

  #posts.posts .thumb-box a:hover .description {
    opacity: 1;
    max-height: 100px;
    margin-top: 5px;
    transition: opacity 0.4s ease-out, max-height 0.9s ease-out;
  }

  #posts.posts .thumb-box a:hover .overlay-box {
    background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 1));
  }
</style>




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

<style type="text/css">
.post-entry-1 {
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 20px;
}
.post-entry-1 .post-thumbnail {
  width: 100%;
  height: 500px;
}

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