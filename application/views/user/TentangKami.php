<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIMATERA |  About</title>
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
  <link href="<?php echo base_url()?>assets/css/tentangkami.css" rel="stylesheet">
</head>

<body>

  <main id="main">
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
                  <img src="<?php echo base_url()?>assets/img/Web.jpg" alt="" class="img-fluid">
                </div>
                <div class="ps-md-5 mt-4 mt-md-0">
                <?php foreach ($setting->result() as $x): ?>	
                  <div class="post-meta mt-4">About us</div>
                  <!-- <h2 class="mb-4 display-4">Company History</h2> -->
                  <br>

                  <p><?= $x->tentang_kami;?></p>
                  <?php endforeach; ?>
                </div>
          </div>

        </div>
          </div>

        </div>

      </div>
    </section>

    <section class="bg-light">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-between align-items-lg-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <h2 class="display-4 mb-4">Latest News</h2>
            <?php
            // Assuming you have a database connection configured in CI3
            $latestNewsQuery = $this->db->query("SELECT * FROM artikel_simatera ORDER BY id_artikel DESC LIMIT 1");
            if ($latestNewsQuery->num_rows() > 0) {
              $latestNews = $latestNewsQuery->row();
              $content = $latestNews->artikel;
              $words = explode(' ', $content);
              $limitedContent = implode(' ', array_slice($words, 0, 70));
              ?>
              <p><?php echo $limitedContent; ?></p>
              <?php
            }
            ?>
            <p><a href="#" class="more">Lihat Semua Posting Lainnya</a></p>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div href="#" class="me-4 thumbnail">
                <img src="<?php echo base_url()?>assets/img/<?php echo $latestNews->Foto ?>" alt="" class="img-fluid" style="box-shadow: 5px 5px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--     <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h2 class="display-4">Our Team</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Founder &amp; CEO</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Wade Warren</h4>
            <span class="d-block mb-3 text-uppercase">Founder, VP</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Jane Cooper</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-5.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-6.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Editor Staff</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
        </div>
      </div>
    </section> -->
    
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/aos/aos.js"></script>

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
