<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan CRUD</title>

    <link rel="stylesheet" href="<?= base_url()?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url()?>/datables-cssjs/dataTables.dataTables.css">

    <script src="<?= base_url()?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>/datables-cssjs/jquery-3.5.1.js" ></script>

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

    <!-- Script memanggil preview-->
    <script>
    function previewImage(){
        const foto = document.querySelector('#foto'); // Memilih input file dengan id "foto"
        const img_preview = document.querySelector('.img-preview'); // Memilih elemen img dengan class "img-preview"
        const file_foto = new FileReader(); // Membuat objek FileReader untuk membaca file

        file_foto.readAsDataURL(foto.files[0]); // Membaca file gambar pertama yang dipilih
        file_foto.onload = function(e){ // Saat file selesai dibaca
            img_preview.src = e.target.result; // Menampilkan gambar di img-preview
        }
    }
</script>


    <script src="<?= base_url()?>/datables-cssjs/dataTables.js"></script>
    <script src="<?= base_url()?>/js/popper.min.js"></script>

</body>
</html>