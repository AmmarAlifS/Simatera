<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">Tentang Simatera</h3>
              <p>Selamat datang di website kami! Kami adalah platform yang didedikasikan untuk menyediakan informasi dan layanan yang bermanfaat bagi pengunjung kami. Website kami menyajikan berbagai informasi terkini dan terpercaya tentang tempat bersejarah di kota Bandung.</p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="<?php echo base_url().'user/index';?>"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="<?php echo base_url();?>user/artikel"><i class="bi bi-chevron-right"></i> Artikel</a></li>
              <li><a href="<?php echo base_url();?>user/tentangkami"><i class="bi bi-chevron-right"></i> Tentang Kami</a></li>
              <li><a href="<?php echo base_url();?>user/kontak"><i class="bi bi-chevron-right"></i> Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-6">
            <h3 class="footer-heading">Recent Posts</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <?php
              // Retrieve recent posts from the database
              $this->db->order_by('id_artikel', 'desc');
              $this->db->limit(4);
              $query = $this->db->get('artikel_simatera');
              $recentPosts = $query->result();

              // Loop through the recent posts and display them
              foreach ($recentPosts as $post) {
                ?>
                <li>
                  <a href="<?php echo base_url().'user/single_post/'.$post->id_artikel;?>" class="d-flex align-items-center">
                    <img src="<?php echo base_url('assets/img/'.$post->Foto); ?>" alt="" class="img-fluid me-3">
                    <div>
                      <div class="post-meta d-block">
                        <span class="date"><?php echo $post->kategori; ?></span>
                        <span class="mx-1">&bullet;</span>
                        <span><?php echo $post->tanggal;; ?></span>
                      </div>
                      <span><?php echo $post->judul; ?></span>
                    </div>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
      <?php foreach ($setting->result() as $x): ?>	
        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Simatera</span></strong>. All Rights Reserved
            </div>

            <!-- <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div> -->

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a target="_blank" href="<?= $x->twitter;?>" class="twitter"><i class="bi bi-twitter"></i></a>
              <a target="_blank" href="<?= $x->facebook;?>" class="facebook"><i class="bi bi-facebook"></i></a>
              <a target="_blank" href="<?= $x->instagram;?>" class="instagram"><i class="bi bi-instagram"></i></a>
              <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
            </div>

          </div>

        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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