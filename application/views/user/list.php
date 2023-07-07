<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simatera - Artikel</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- icons -->
    <link href="<?php echo base_url(); ?>assets/img/simatera-icon2.png" rel="icon" />
    <link href="<?php echo base_url(); ?>assets/img/simatera-icon.png" rel="icon2" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"/>

    <!-- Vendor CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"/>
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
              
              <!-- Filter Form -->
              <form action="<?php echo site_url('user/list'); ?>" method="get" class="search-form">
                  <div class="form-group">
                      <select name="kategori" class="form-control">
                          <option value="">All Categories</option>
                          <?php foreach ($kategori as $category) : ?>
                              <option value="<?php echo $category['nama_kategori']; ?>" <?php echo ($category['nama_kategori'] == $selected_category) ? 'selected' : ''; ?>>
                                  <?php echo $category['nama_kategori']; ?>
                              </option>
                          <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <select name="sort" class="form-control">
                          <option value="">Sort By</option>
                          <option value="latest" <?php if ($sort === 'latest') echo 'selected'; ?>>Latest</option>
                          <option value="oldest" <?php if ($sort === 'oldest') echo 'selected'; ?>>Oldest</option>
                          <option value="alphabetical" <?php if ($sort === 'alphabetical') echo 'selected'; ?>>A-Z</option>
                          <option value="reverse_alphabetical" <?php if ($sort === 'reverse_alphabetical') echo 'selected'; ?>>Z-A</option> <!-- New option -->
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Filter</button>
              </form>

              <!-- List -->
              <div class="d-md-flex-column post-entry-2 small-img mt-3">
                <div class="row">
                  <?php
                  $count = 0;
                  $column = ''; // Define the $column variable
                  $postsPerRow = 3; // Default number of posts per row

                  // Determine the column size based on the screen size
                  if ($column === "large") {
                    $postsPerRow = 3;
                  } elseif ($column === "middle") {
                    $postsPerRow = 2;
                  }

                  foreach ($artikel as $row) :
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
                    }
                    ?>

                    <div class="<?php echo $post_entry_class ?>">
                      <div class="post-entry-1">
                        <a href="single-post.html"><img src="<?php echo base_url()?>assets/img/<?php echo $row->Foto ?>" alt="" class="img-fluid post-thumbnail" style="width: 100%; height: 200px;"></a>
                        <div class="post-meta"> <span class="date"><?php echo $row->kategori ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('F j, Y', strtotime($row->tanggal)); ?></span></div>
                        <h2><a href="single-post.html" style="font-family: inherit; font-weight: bold;"><?php echo $row->judul ?></a></h2>
                        <p style="text-align: justify; font-family: serif;"><?php echo $short_description ?></p>
                        <a href="<?php echo base_url().'user/single_post/'.$row->id_artikel;?>"><button class="btn btn-primary">Read More</button></a>
                      </div>
                    </div>

                    <?php
                    $count++;
                    if ($count % $postsPerRow === 0) {
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
                  <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Latest</button>
                    </li>
                  </ul>

                  <?php 
                      $reverse_art = array_reverse($art); // Reverse the order of the array
                      $limited_art = array_slice($reverse_art, 0, 6); // Limit the array to maximum 6 elements
                    ?>
                    <?php foreach($limited_art as $row): ?>
                      <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                        <div class="post-entry-3 border-bottom">
                          <div class="post-meta-3"><span class="date"><?php echo $row->kategori ?></span> <span class="mx-1">&bullet;</span> <span><?php echo date('F j, Y', strtotime($row->tanggal)); ?></span></div>
                          <h2 class="mb-2"><a href="<?php echo base_url().'user/single_post/'.$row->id_artikel;?>"> </span> <?php echo $row->judul ?></a></h2>
                          <span class="author d-block"></span>
                        </div>
                      </div>
                    <?php endforeach; ?>

                </div>

                <div class="aside-block">
                  <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Kategori</button>
                    </li>
                  </ul>

                    <?php foreach($kategori as $category): ?>
                      <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                        <div class="post-entry-3 border-bottom">
                          <h2 class="mb-2"><a href="<?php echo base_url().'user/list?kategori='.$category['nama_kategori'].'&sort=';?>"> </span> <?php echo $category['nama_kategori'] ?></a></h2>
                        </div>
                      </div>
                    <?php endforeach; ?>

                </div>
            </div>
              <!-- Paging -->
                <div class="text-start py-4">
                  <div class="custom-pagination">
                      <?php
                      $pagination_links = $this->pagination->create_links();
                      $pagination_links = str_replace('<a href', '<a class="page-link" href', $pagination_links);
                      $pagination_links = str_replace('<a class="page-link" href="#"', '<a class="page-link active"', $pagination_links);
                      echo $pagination_links;
                      ?>
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
.search-form {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.search-form .form-group {
    margin-left: 10px;
}

.search-form .btn-primary {
    margin-left: 10px;
}
.post-entry-1 {
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 5px;
}
.post-entry-1 .post-thumbnail {
  width: 100%;
  height: 500px;
  border-radius: 10px;
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

.custom-pagination {
  display: flex;
  justify-content: center; /* Center the pagination links */
  align-items: center;
  margin-top: 20px;
  padding: 5px 10px; /* Add padding around the link */
  margin: 0 5px; /* Add space between the page links */
}

.custom-pagination .page-link {
  outline: none !important;
  padding: 15px 8px; /* Add padding around the link */
  margin: 0 10px; /* Add space between the page links */
  font-size: 16px; /* Increase the font size */
}

.custom-pagination .page-link.active {
  background: var(--color-black) !important; /* Remove the background color */
  color: var(--color-white) !important; /* Set the text color to black */
  outline: none !important;
  border: 2px solid var(--color-black); /* Increase the border width to 4px */
  padding: 5px 10px; /* Add padding around the link */
  text-align: center; /* Center the text */
  font-size: 18px; /* Increase the font size */
}

</style>