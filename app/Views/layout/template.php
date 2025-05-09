<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan CRUD</title>

    <link rel="stylesheet" href="<?= base_url()?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url()?>/datables-cssjs/dataTables.dataTables.css">

    

    <link href="<?=base_url()?>/select2/select2.min.css" rel="stylesheet"/>
    <script src="<?=base_url()?>/select2/jquery-3.4.1.js"></script>
    <script src="<?=base_url()?>/select2/select2.min.js"></script>
    

</head>
<body>
        <!-- CODE UNTUK MEMANGGIL NAVIGASI -->
        <?= $this->include('layout/navbar')?>

        <?= $this->renderSection('content')?>


    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2025 Company, Inc</p>
    
            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
    
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
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