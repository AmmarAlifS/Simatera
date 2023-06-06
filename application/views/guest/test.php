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
  a {
    color: #fff;
    text-decoration: none;
  }

  * {
    outline: 0;
  }

  body {
    margin-top: 100px;
    font-size: 11px;
    color: #aaa;
    font-family: "Poppins", sans-serif;
  }

  .container {
    max-width: 1140px;
    margin: 0 auto;
    display: block;
  }

  .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 20px;
  }

  .thumb-box {
    display: flex;
    width: calc(33.3333% - 20px);
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
  }

  .thumb-box a {
    padding: 0;
    position: relative;
    width: 100%;
    height: 100%;
  }

  .image-container {
    position: relative;
    width: 100%;
    padding-top: 100%;
    overflow: hidden;
  }

  .thumb-box img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .overlay-box {
    position: absolute;
    bottom: 0;
    width: 90%;
    z-index: 3;
    left: 0;
    padding: 5%;
    background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.75));
  }

  .meta {
    font-size: 14px;
    display: block;
  }

  .main-titlee {
    font-size: 16px;
    display: block;
    font-weight: 700;
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.5);
  }

  .description {
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

  .thumb-box a:hover .description {
    opacity: 1;
    max-height: 100px;
    margin-top: 5px;
    transition: opacity 0.4s ease-out, max-height 0.9s ease-out;
  }

  .thumb-box a:hover .overlay-box {
    background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 1));
  }
</style>
