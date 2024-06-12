<?php
session_start();

if( !isset($_SESSION['login']) ) {
    header("Location: login.php");
    exit();
}

require 'functions.php';
$musik = query("SELECT * FROM musik_news");

// ketika tompol cari di klik
if(isset($_POST['cari'])){
    $musik = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <!-- css -->
    <link rel="stylesheet" href="css/indexx.css">
    <!-- bootstrap -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- navbar -->
    <nav>
        <h1 class="logo">NEWS</h1>
        <form action="" method="post" class="search">
            <input type="text" name="keyword" placeholder="type to search" autocomplete="off">
            <button type="submit" name="cari"><i class="bi bi-search"></i></button>
        </form>
        <div class="dropdown text-end">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/login.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="admin.php">Halaman Admin</a></li>
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- carousel -->
    <section>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/iqbaal.jpg" alt="" height="575px" width="100%">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Iqbaal Ramadhan kembali ke industri musik dengan alias BAALE</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/gambar2.jpg" alt="" height="575px" width="100%">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Grup musik Indonesia ramaikan festival SXSW di Texas AS</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/gambar3.jpg" alt="" height="575px" width="100%">
                    <div class="container">
                    <div class="carousel-caption">
                            <h1>TWS rilis video musik terbaru untuk lagu "BFF"</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- blog -->
    <div class="blog1">
        <div class="p-4 p-md-5 mb-4 rounded text-white" style="background-image: url(assets/img/Gambar.jpg);">
            <div class="col-lg-6 px-0">
                <h1 class="display-6 fst-italic">MENELISIK MEDIA DAN JURNALIS MUSIK, AKTOR UTAMA BERITA MUSIK</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="" class="link-underline link-underline-opacity-0"><h3 class="mb-2 text-black">Lagu Terbaru Sheesh Milik Babymonster Sukses Tembus 2 Chart Billboard</h3></a>
                        <small class="mb-2"><i>Sabtu, 08 Juni 2024</i></small>
                        <p class="card-text mb-auto">Grup idola K-Pop Babymonster, mampu menarik perhatian saat merilis single terbarunya berjudul Sheesh pada 31 Maret 2024. Bahkan, lagu tersebut sukses memasuki dua tangga musik di Billboard.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/img/gambar9.jpg" alt="" width="200" height="260">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <a href="" class="link-underline link-underline-opacity-0"><h3 class="mb-2 text-black">6 Lagu JKT48 tentang Seseorang yang Mencintai Secara Ugal-Ugalan</h3></a>
                        <small class="mb-2"><i>Minggu, 09 Juni 2024</i></small>
                        <p class="card-text mb-auto">JKT48 tentunya memiliki lagu yang berkaitan dengan fenomena tersebut. Simak rekomendasi 6 Lagu JKT48 untuk kamu yang ugal-ugalan dalam mencintai seseorang.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/img/gambar10.jpg" alt="" width="200" height="260">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card -->
    <div class="blog3">
        <div class="content">
            <?php foreach($musik as $msk):?>
            <div class="card" style="width: 18rem; max-height: 500px;">
                <img src="img/<?= $msk ['gambar']; ?>" class="card-img-top" alt="..." width="100%" height="200px">
                <div class="card-body">
                    <h5 class="card-title"><?= $msk ['judul_news']; ?></h5>
                    <p class="card-text"><?= $msk ['konten_news']; ?></p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <!-- footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 News</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>