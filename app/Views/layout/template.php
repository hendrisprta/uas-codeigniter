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
<body>
        <!-- CODE UNTUK MEMANGGIL NAVIGASI -->
        <?= $this->include('layout/navbar')?>

        <?= $this->renderSection('content')?>


 <footer id="footer" class="footer">


    <div class="container copyright text-center mt-4">
      <p>©2025 <span>Copyright</span> <strong class="px-1 sitename">AlUmNi PoLT3K</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>
<!-- SCRIPT UNTUK FUNGSI SEARCH DAN BARIS HALAMAn PAda TABEL -->
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>

    <!-- SCRIPT SELECT 2-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#pegawai').select2();
        })
    </script>

    <!-- SCRIPT FOTO -->
     <script>
        function previewImage(){
            const foto = document.querySelector('#foto')
            const img_preview = document.querySelector('.img-preview')
            const file_foto = new FileReader()
            file_foto.readAsDataURL(foto.files[0])
            file_foto.onload = function(e){
                img_preview.src = e.target.result
            }
        }
     </script>

    <script src="<?= base_url()?>/js/bootstrap.bundle.min.js"></script>   
    <script src="<?= base_url()?>/datables-cssjs/dataTables.js"></script>
    <script src="<?= base_url()?>/js/popper.min.js"></script>

    

</body>
</html>