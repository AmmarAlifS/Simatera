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
                <h1 class="mb-5"><?php echo $xdetail->judul;?></h1>
              
                <?php
                $artikel = $xdetail->artikel;

                // Split the article into an array of words
                $words = str_word_count($artikel, 1);

                // Calculate the total number of words
                $total_words = count($words);

                // Find the midpoint index
                $midpoint = intval($total_words / 2);

                // Extract the first half of the article
                $first_half = implode(' ', array_slice($words, 0, $midpoint));

                // Extract the second half of the article
                $second_half = implode(' ', array_slice($words, $midpoint));

                // HTML snippet to insert in the middle
                $html_snippet = '<div class="image-slider">
                    <!-- ======= Hero Slider Section ======= -->
                    <section id="hero-slider" class="hero-slider">
                        <div class="container-md" data-aos="fade-in">
                            <div class="row">
                                <div class="col-12">
                                    <div class="swiper sliderFeaturedPosts">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(\'' . base_url() . 'assets/img/De-Javasche-Bank1.jpg\');">
                                                    <div class="img-bg-inner">
                                                        <h2>Gedung De Javasche Bank 1909.</h2>
                                                        <p>Gedung De Javasche Bank dibangun pada tahun 1909 dan menghadap ke Landraadweg (Jl. Perintis Kemerdekaan).</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="swiper-slide">
                                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(\'' . base_url() . 'assets/img/De-Javasche-Bank2.jpg\');">
                                                    <div class="img-bg-inner">
                                                        <h2>Gedung De Javasche Bank Tahun 1930.</h2>
                                                        <p>Gedung De Javasche Bank Bandung yang baru menghadap ke Logeweg (Jl. Braga) pada awal tahun 1930-an.</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="swiper-slide">
                                                <a href="#" class="img-bg d-flex align-items-end" style="background-image: url(\'' . base_url() . 'assets/img/De-Javasche-Bank3.jpg\');">
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
                </div>';

                // Combine the first half, HTML snippet, and second half
                $combined = '<div class="text-justify" style="text-align: justify">' . $first_half . ' ' . $html_snippet . ' ' . $second_half . '</div>';

                // Output the combined result
                echo $combined;
                ?>

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
                    <!-- Facebook -->
                    <div class="fb-share-button" data-href="<?php echo current_url(); ?>" data-layout="button_count" data-image="<?php echo base_url() . 'assets/img/' . $xdetail->Foto ?>"></div>

                    <!-- Twitter -->
                    <a href="https://twitter.com/share?url=<?php echo current_url(); ?>&text=Check%20out%20this%20article" class="twitter-share-button" data-show-count="false" data-image="<?php echo base_url() . 'assets/img/' . $xdetail->Foto ?>">Tweet</a>

                    <!-- Pinterest -->
                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo current_url(); ?>&media=<?php echo base_url() . 'assets/img/' . $xdetail->Foto ?>&description=Check%20out%20this%20article" data-pin-do="buttonPin" data-pin-custom="true">
                        <img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="Pin It" />
                    </a>


                </div>

<!-- End Hero Slider Section -->
              <!-- <p>Sehubung dengan hal tersebut, J. Reijsenbach Presiden ke-10 De Javasche Bank mengirim surat No. 165 pada tanggal 7 Mei 1902 kepada Dewan Militer Hindia Belanda dan surat No. 420 tanggal 16 Juni 1902  kepada pemerintah Hindia-Belanda yang isinya meminta izin untuk membuka Kantor Cabang De Javasche Bank di Bandung. Tanggal 29 Oktober 1906 Direksi De Javasche Bank menerima surat dari Gubernur Jenderal Hindia-Belanda No. 52 tertanggal 24 Oktober 1906 tentang penyerahan sebidang tanah seluas 10.40 m2 di District Oedjoengbroengkoelon, desa Kejaksangirang kepada De Javasche Bank dengan Sertifikat Hak Milik No.103 tanggal 8 Maret 1907 berikut Surat Ukur N0. 153 tanggal 13 Februari 1907 dan No.Kadester 1022.</p>
              <p>Lahan Gedung De Javasche Bank adalah bekas Gudang tempat penyimpanan garam yang terbakar pada tahun 1901 dan kemudian menjadi sebuah lahan terbuka (plein) tempat pertunjukan sirku, sandiwara, dan pertunjukan seni lainnya. Pada malam minggu, para preanger planters saling jual tampang, bersantai, makan minum dan pamer mobil keluaran anyar milik mereka. Lahan ini terletak di seberang rumah kediaman keluarga belanda kaya soesman, pemilik kuda pacu dan lapangan pacuan kuda Tegallega. Rumah keluarga Siesnab sejarang menjadi Gedung Kerta Mukti.</p>
              <p>Gedung Javasche Bank (sekarang Gedung Bank Indonesia) dirancang oleh Edward Cuypers, Fermont, dan Hulswit terdiri dari dua buah gedung. Yang pertama disebut dengan Gedung Perintis yang terletak di sisi Jalan Perintis Kemerdekaan. Sedangkan gedung kedua disebut dengan Gedung Braga yang dibangun di ruas Jalan Braga, di depan Gedung Kertamukti</p>
              <p>Jika dilihat dari bangunannya, Gedung Perintis terlihat lebih baru, hal ini dikarenakan gedung ini sudah pernah mengalami renovasi. Gedung BI ini dibangun pada tahun 1909 dengan nama De Javasche Bank yang kemudian pada tahun 1953 diambil alih dan diresmikan sebagai Bank Indonesia.</p>
              <p>Ed. Cuypers sebagai perancang BI lebih banyak mengambil unsur-unsur arsitektur Romawi-Yunani yang sangat kental terlihat dengan pemakaian unsur-unsur kolom silindrisnya dengan kepala kolom yang berukir dan menggunakan pediment yang berbentuk segitiga dan berukit pada bagian tengahnya.</p>
              <p>Selain gaya arsitektur Romawi-Yunani, Cuypers juga mengambil gaya De-Stijl yang diwujudkannya dalam penggunaan kaca patri.kaca patri biasanya digunakan pada bangunan-bangunan yang mahal didaerah Belanda pada zaman dahulu, oleh karena itu dengan hadirnya kaca patri di sini, diharapkan dapat menimbulkan kesan mewah pada bangunan BI ini.</p>
              <p>Selain itu, gedung BI ini didesain simetris, tidak hanya dalam massanya saja, namun juga simetris dalam pola bukaan jendelanya. Sebagai aksen dari pintu masuk, Cuypers memberikan arc yang tinggi menjulang, maksudnya bukaan yang diberikan bisa setinggi tujuh meter, hal ini membuat fasad yang diasilkan terkesan seimbang.</p> -->
            </div><!-- End  Halaman Artikel -->
       
       <!-- ======= Comments ======= -->
       <div id="disqus_thread"></div>
          <script>
              /**
              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
              /*
              var disqus_config = function () {
              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              */
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
            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

          <!-- Popular -->
          <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Sejarah</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
              <h2 class="mb-2"><a href="#">Tempat Bersejarah di Kota Bandung, Seperti Gedung Konferensi Asia Afrika</a></h2>
              <span class="author mb-3 d-block">Rendy Riansyah</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Pariwisata</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
              <h2 class="mb-2"><a href="#">Gua Jepang Bisa Dijadikan Tempat Pariwisata dan Juga Tempat Bersejarah</a></h2>
              <span class="author mb-3 d-block">Rendy Riansyah</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Budaya</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
              <h2 class="mb-2"><a href="#">Budaya-Budaya Yang ada Di Kota Bandung</a></h2>
              <span class="author mb-3 d-block">Rendy Riansyah</span>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Museum</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
              <h2 class="mb-2"><a href="#">Museum Yang Sering Ramai Dikunjungi Oleh Anak-Anak SMP Yaitu Museum Geologi</a></h2>
              <span class="author mb-3 d-block">Rendy Riansyah</span>
            </div>
          </div> <!-- End Popular -->

         <!-- Latest -->
         <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
          <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">Museum</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
            <h2 class="mb-2"><a href="#">Museum Yang Sering Ramai Dikunjungi Oleh Anak-Anak SMP Yaitu Museum Geologi</a></h2>
            <span class="author mb-3 d-block">Rendy Riansyah</span>
          </div>

          <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">Sejarah</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
            <h2 class="mb-2"><a href="#"></a>Tempat Bersejarah di Kota Bandung, Seperti Gedung Konferensi Asia Afrika</h2>
            <span class="author mb-3 d-block">Rendy Riansyah</span>
          </div>

          <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">Pariwisata</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
            <h2 class="mb-2"><a href="#">Gua Jepang Bisa Dijadikan Tempat Pariwisata dan Juga Tempat Bersejarah</a></h2>
            <span class="author mb-3 d-block">Rendy Riansyah</span>
          </div>

          <div class="post-entry-1 border-bottom">
            <div class="post-meta"><span class="date">Budaya</span> <span class="mx-1">&bullet;</span> <span>March 20th '23</span></div>
            <h2 class="mb-2"><a href="#">Budaya-Budaya Yang ada Di Kota Bandung</a></h2>
            <span class="author mb-3 d-block">Rendy Riansyah</span>
          </div>
        
        </div> <!-- End Latest --> 
       
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
</body>

</html>