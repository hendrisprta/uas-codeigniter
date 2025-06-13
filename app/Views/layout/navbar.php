<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Data Alumni POLIMAT/</title>
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

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="/" class="logo d-flex align-items-center me-auto">
      <h1 class="sitename">Sistem Alumni <br> PoLT3K😎</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/">Beranda</a></li>

        <?php if (has_permission("data-pegawai")):?>
          <li><a href="/crud">Data Alumni</a></li>
          <li><a href="/departemen">Program Studi</a></li>
          <li><a href="/users">Manajemen Akun</a></li>
        <?php endif;?>

        <?php if (has_permission("data-penilaian")):?>
          <li><a href="/penilaian">Tracer Study</a></li>
        <?php endif;?>

        <li><a href="<?= base_url()?>#contact">Kontak</a></li>

        <?php if (logged_in()) : ?>
        <li class="dropdown">
          <a href="#"><span><?= user()->username ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="/profil">Profil</a></li>
            <li><a href="/password">Ubah Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
        <?php else : ?>
        <li><a class="btn-getstarted scrollto" href="/login">Masuk</a></li>
        <?php endif; ?>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>

