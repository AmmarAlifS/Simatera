<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simatera - Search Results</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- icons -->
    <link href="<?php echo base_url(); ?>assets/img/simatera-icon2.png" rel="icon" />
    <link href="<?php echo base_url(); ?>assets/img/simatera-icon.png" rel="icon2" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS -->
    <link
      href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link
      href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- CSS Link -->
    <link href="<?php echo base_url(); ?>assets/css/variables.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" />
  </head>

  <body>

    <main id="main">
      <!-- Search Results -->
      <section id="search-result" class="search-result">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-8">
              <?php foreach($artikel as $row);?>
              <?php
              $short_description = implode(' ', array_slice(explode(' ', $row->artikel), 0, 20));
              if (str_word_count($row->artikel) > 20) {
                $short_description .= '...';
              } ?>
                <!-- Post Result 1 -->
                <div class="d-md-flex-column post-entry-2 small-img">
                  <div class="row">
                    <?php $count = 0; ?>
                    <?php foreach ($artikel as $row) :
                      $post_entry_class = "col-lg-4 col-md-6";
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
                      } ?>

                    <div class="<?php echo $post_entry_class ?>">
                      <div class="post-entry-1">
                        <a href="single-post.html"><img src="<?php echo base_url()?>assets/img/<?php echo $row->Foto ?>" alt="" class="img-fluid post-thumbnail" style="width: 100%; height: 200px;"></a>
                        <div class="post-meta"> <span><?php echo $row->tanggal ?></span></div>
                        <h2><a href="single-post.html" style="font-family: inherit; font-weight: bold;"><?php echo $row->judul ?></a></h2>
                        <p style="text-align: justify; font-family: serif;"><?php echo $short_description ?></p>
                        <a href="<?php echo base_url().'guest/artikel/'.$row->id_artikel;?>"><button class="btn btn-primary">Read More</button></a>
                      </div>
                    </div>

                    <?php
                    $count++;
                    if ($count % 3 === 0) {
                      echo '</div><div class="row">';
                    }
                    ?>

                    <?php endforeach; ?>
                  </div>
                </div>
            </div>
   
          <div class="col-lg-3 col-md-4">
              <!-- ======= Sidebar ======= -->
              <div class="aside-block">
                <ul
                  class="nav nav-pills custom-tab-nav mb-4"
                  id="pills-tab"
                  role="tablist"
                >
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="pills-popular-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-popular"
                      type="button"
                      role="tab"
                      aria-controls="pills-popular"
                      aria-selected="true"
                    >
                      New Post 
                      <!-- Populer -->
                    </button>
                  </li>
                </ul>

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
                  <!-- <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title mb-0">
                        <span class="trending-number"><?php echo $count ?>.</span> <?php echo $row->judul ?>
                      </h5>
                      <p class="card-text"><small class="text-muted"><?php echo date('F j, Y', strtotime($row->tanggal)); ?></small></p>
                    </div>
                  </div> -->
                  <?php $count++; ?>
                  <?php endforeach; ?>
              </div>

              <!-- End Categories -->

              <!-- End Tags -->
            </div>

            <?php echo $this->pagination->create_links(); ?>
            
              <!-- Paging -->
              <div class="text-start py-4">
                <div class="custom-pagination">
                  <a href="#" class="prev">Previous</a>
                  <a href="#" class="active">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a>
                  <a href="#" class="next">Next</a>
                </div>
              </div>
              <!-- End Paging -->
            </div>

          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- JS Link -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
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