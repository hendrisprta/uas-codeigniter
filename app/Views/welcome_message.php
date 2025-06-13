<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sistem Alumni POLIMAT</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

    <link rel="stylesheet" href="<?= base_url()?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url()?>/datables-cssjs/dataTables.dataTables.css">

      <!-- Favicons -->
  <link href="<?= base_url()?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url()?>/assets/css/main.css" rel="stylesheet">

  <!--SELECT 2-->
    <link href="<?=base_url()?>/select2/select2.min.css" rel="stylesheet"/>
    <script src="<?=base_url()?>/select2/jquery-3.4.1.js"></script>
    <script src="<?=base_url()?>/select2/select2.min.js"></script>
    
</head>
<body>

<?= $this->include('layout/navbar')?>

<?= $this->renderSection('content')?>

<!-- CHIHUY -->
    
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>Selamat Datang di Sistem AlUmNi PoLT3K</h1>
            <p>Sengaja Typo Biar Keren😎</p>
            <div class="d-flex">
              <!--<a href="#about" class="btn-get-started">Get Started</a>
             <a href="https://www.youtube.com/watch?v=8RFbx4lK-Qs&t=2s" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                
              <iframe 
  src="https://archive.org/embed/to-rick-astley-never-gonna-give-you-up-official-music-video" 
  width="560" height="384" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
</iframe>
--> 


<a href="#" onclick="openRickroll(); return false;" class="btn-watch-video d-flex align-items-center">
  <i class="bi bi-play-circle"></i><span>Watch Video</span>
</a>
<div id="rickroll-modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); z-index:9999; justify-content:center; align-items:center;">
  <div style="position:relative; width:80%; max-width:800px; aspect-ratio:16/9;">
    <iframe id="rickroll-frame"
      src=""
      style="width:100%; height:100%; border:none;"
      allow="autoplay"
      allowfullscreen>
    </iframe>
    <button onclick="closeRickroll()" style="position:absolute; top:10px; right:10px; background:#fff; border:none; padding:5px 10px; cursor:pointer; font-size:16px;">✖</button>
  </div>
</div>

<script>
  function openRickroll() {
    const modal = document.getElementById("rickroll-modal");
    const iframe = document.getElementById("rickroll-frame");
    iframe.src = "https://archive.org/embed/to-rick-astley-never-gonna-give-you-up-official-music-video?autoplay=1";
    modal.style.display = "flex";
  }

  function closeRickroll() {
    const modal = document.getElementById("rickroll-modal");
    const iframe = document.getElementById("rickroll-frame");
    iframe.src = ""; // Clear the src to stop playback
    modal.style.display = "none";
  }
</script>
<!-- END RICK ROLL-->

            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>HENDRI KONTORL</span>
        <h2>HENDRI</h2>
        <p>Kami dari</p>
      </div><!-- End Section Title -->


  </main>

  <footer id="footer" class="footer">

    
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/" class="d-flex align-items-center">
            <span class="sitename">AlUmNi PoLT3K</span>
          </a>
          <div class="footer-contact pt-3">
            <!-- <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p> -->
            <p><strong>Email:</strong> <span>hendrisprta@anjay.id</span></p>
          </div>
        </div>

       

        <div class="col-lg-4 col-md-12">
          <h4>Follow Me On</h4>
          <p>Follow Saya di</p>
          <div class="social-links d-flex">
            <!--<a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a> -->
            <a href="https://www.instagram.com/hendristpraa"><i class="bi bi-instagram"></i></a>
          <!--  <a href=""><i class="bi bi-linkedin"></i></a> -->
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>©2025 <span>Copyright</span> <strong class="px-1 sitename">AlUmNi PoLT3K</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

<!-- CHIHUY -->
    <script src="<?= base_url()?>/datables-cssjs/dataTables.js"></script>
    <script src="<?= base_url()?>/js/popper.min.js"></script>
</body>
</html>