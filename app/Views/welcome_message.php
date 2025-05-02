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

<?= $this->include('layout/navbar')?>

<?= $this->renderSection('content')?>

    <hr>
    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-md-auto">
            <div class="card" style="width: 48rem; ">
                <div class="card-body">
                    <h1>Selamat Datang di Sistem Penilaian Kepegawaian</h1>
                </div>
				<img src="<?= base_url() ?>/img/home.png"
				class="card-img-top" alt="...">
            </div>
            </div>

        </div>
    </div>
    <br>
    
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col col-lg-3">
            <div class="card text-white bg-success" style="max-width: 18rem;">
                <div class="card-header">Jumlah Data Pegawai</div>
                <div class="card-body">
                    <h2 class="card-title">40</h2>
                    
                </div>
            </div>
            </div>
            <div class="col-md-auto">
                <div class="card text-white bg-primary" style="max-width: 18rem;">
                    <div class="card-header">Jumlah Data Departemen</div>
                    <div class="card-body">
                        <h2 class="card-title">40</h2>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
            <div class="card text-white" style="max-width: 18rem; background: sienna;">
                <div class="card-header">Jumlah Penilaian</div>
                <div class="card-body">
                    <h2 class="card-title">40</h2>
                    
                </div>
            </div>
        
            </div>
        
    </div>




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
    


    <script src="<?= base_url()?>/datables-cssjs/dataTables.js"></script>
    <script src="<?= base_url()?>/js/popper.min.js"></script>
</body>
</html>