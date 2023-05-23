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

      <?php if ($artikel) : ?>

      <section id="search-result" class="search-result">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-8">

              <?php $resulttotal = 0;foreach ($artikel as $art) : ?>
              <?php $resulttotal++;endforeach; ?>
              
              <h5 class="category-title">Menampilkan <?php echo $resulttotal ?> hasil untuk pencarian '<?php echo $_POST['keyword']; ?>'</h5>

                <!-- Post Result 1 -->
              <div class="d-md-flex-column post-entry-2 small-img">

                <?php foreach ($artikel as $art) : ?>

                <a href="#" class="me-4 thumbnail"></a>

                <div>
                  <div class="post-meta">
                    <span class="date"><?php echo $art['Kategori']; ?></span>
                    <span class="mx-1">&bullet;</span> <span><?php echo $art['tanggal']; ?></span>
                  </div>
                  <h3>
                    <a href="#"
                      ><?php echo $art['judul']; ?></a
                    >
                  </h3>
                  <p>
                    <?php echo $art['artikel']; ?>
                  </p>
                </div>  
                <?php 
                endforeach; ?>
              </div>
                  
                <?php else : ?>
                  <?php $resulttotal = 0;foreach ($artikel as $art) : ?>
                  <?php $resulttotal++;endforeach; ?>
                  
                  <h5 class="category-title">Menampilkan <?php echo $resulttotal ?> hasil untuk pencarian '<?php echo $_POST['keyword']; ?>'</h5>
                  
                    <div style="height: 400px;">
                      <h3>Hasil Pencarian Tidak Ditemukan</h3>
                    </div>
                <?php endif ?>

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
                      Popular
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="pills-trending-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-trending"
                      type="button"
                      role="tab"
                      aria-controls="pills-trending"
                      aria-selected="false"
                    >
                      Latest
                    </button>
                  </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                  <!-- Populer -->
                  <div
                    class="tab-pane fade show active"
                    id="pills-popular"
                    role="tabpanel"
                    aria-labelledby="pills-popular-tab"
                  >
                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 13rd '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Saung Angklung Udjo : Dari Sejarah Hingga Prestasi Di
                          Dunia</a
                        >
                      </h2>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 13rd '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Stasiun Bandung dalam Lintasan Sejarah Kereta Api</a
                        >
                      </h2>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 13rd '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Pemandian Cihampelas: Kolam Renang Pertama di
                          Indonesia Peninggalan Belanda</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 13rd '22</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Sejarah Tugu Prasasti Peringatan Pertempuran Gedung
                          Sate</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 13rd '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Sejarah Lengkap Gedung Lanraad (Gedung Indonesia
                          Menggugat)</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 13rd '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Taman Tegallega, Tempat Balap Kuda Favorit Orang
                          Belanda Tempo Doeloe</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>
                  </div>
                  <!-- End Populer -->

                  <!-- Trending -->
                  <div
                    class="tab-pane fade"
                    id="pills-trending"
                    role="tabpanel"
                    aria-labelledby="pills-trending-tab"
                  >
                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Saung Angklung Udjo : Dari Sejarah Hingga Prestasi Di
                          Dunia</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Taman Tegallega, Tempat Balap Kuda Favorit Orang
                          Belanda Tempo Doeloe</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Sejarah Tugu Prasasti Peringatan Pertempuran Gedung
                          Sate</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Pemandian Cihampelas: Kolam Renang Pertama di
                          Indonesia Peninggalan Belanda</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>
                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Stasiun Bandung dalam Lintasan Sejarah Kereta Api</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Sejarah Lengkap Gedung Lanraad (Gedung Indonesia
                          Menggugat)</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>
                  </div>
                  <!-- End Trending -->

                  <!-- Latest -->
                  <div
                    class="tab-pane fade"
                    id="pills-latest"
                    role="tabpanel"
                    aria-labelledby="pills-latest-tab"
                  >
                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Sejarah Lengkap Gedung Lanraad (Gedung Indonesia
                          Menggugat)</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah Bandung</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Stasiun Bandung dalam Lintasan Sejarah Kereta Api</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah Bandung</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Pemandian Cihampelas: Kolam Renang Pertama di
                          Indonesia Peninggalan Belanda</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah Bandung</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Sejarah Tugu Prasasti Peringatan Pertempuran Gedung
                          Sate</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Jenny Wilson</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah Bandung</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Taman Tegallega, Tempat Balap Kuda Favorit Orang
                          Belanda Tempo Doeloe</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>

                    <div class="post-entry-1 border-bottom">
                      <div class="post-meta">
                        <span class="date">Sejarah Bandung</span>
                        <span class="mx-1">&bullet;</span>
                        <span>Mar 17th '23</span>
                      </div>
                      <h2 class="mb-2">
                        <a href="#"
                          >Saung Angklung Udjo : Dari Sejarah Hingga Prestasi Di
                          Dunia</a
                        >
                      </h2>
                      <span class="author mb-3 d-block">Rifki Aufa</span>
                    </div>
                  </div>
                  <!-- End Latest -->
                </div>
              </div>

              <div class="aside-block">
                <h3 class="aside-title">Video</h3>
                <div class="video-post">
                  <a
                    href="https://www.youtube.com/watch?v=dQw4w9WfgXcQ"
                    class="glightbox link-video"
                  >
                    <span class="bi-play-fill"></span>
                    <img
                      src="<?php echo base_url(); ?>assets/img/pemandian-cihampelas.jpg"
                      alt=""
                      class="img-fluid"
                    />
                  </a>
                </div>
              </div>
              <!-- End Video -->

              <!-- End Categories -->

              <!-- End Tags -->
            </div>

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
