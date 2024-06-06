<?php
session_start();

if( !isset($_SESSION['login']) ) {
    header("Location: login.php");
    exit();
}

if( !isset($_SESSION['username']) || $_SESSION['role'] !='admin' ) {
    header("Location: login.php");
    exit();
}

require 'functions.php';

// paggination/sorting
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahdata = count(query("SELECT * FROM musik_news"));
$jumlahHalaman = ceil($jumlahdata / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$musik = query("SELECT * FROM musik_news, penyanyi WHERE musik_news.id_penyanyi = penyanyi.id_penyanyi  LIMIT $awalData, $jumlahDataPerHalaman");

// ketika tombol cari di klik
if(isset($_POST['cari'])) {
    $musik = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="p-3 mb-3">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-lg-between">
                    <form action="" class="d-flex" role="search" id="search" method="POST">
                        <input type="text" name="keyword" class="form-control me-1" placeholder="Cari..." aria-label="Cari" autocomplete="off" autofocus>
                        <button type="submit" class="btn btn-primary" name="cari"><i class="bi bi-search"></i></button>
                    </form>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/login.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="index.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="tambahData.php">Insert Data</a></li>
                            <li><a class="dropdown-item" href="cetak.php" target="_blank">Cetak Data</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<!-- tabel -->
    <div class="tabel">
        <div class="judul">
            <h3>Data Berita Musik</h3>
        </div>
        <!-- navigasi -->
        <?php if($halamanAktif > 1) : ?>
            <a href="?halaman=<?= $halamanAktif - 1; ?>"><i class="bi bi-arrow-left"></i></a>
        <?php endif;?>

        <?php for($i = 1; $i <= $jumlahHalaman; $i++):?>
            <?php if($i == $halamanAktif) :?>
                <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
            <?php else :?>
                <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif?>
        <?php endfor; ?>

        <?php if($halamanAktif < $jumlahHalaman) : ?>
            <a href="?halaman=<?= $halamanAktif + 1; ?> "><i class="bi bi-arrow-right"></i></a>
        <?php endif;?>
        <table class="table table-bordered">
            <tr class="text-center">
                <th>Id</th>
                <th>News</th>
                <th>Jurnalis</th>
                <th>Hari/Tanggal</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Genre</th>
                <th>Aksi</th>
            </tr>
            <?php if(empty($musik)) : ?>
            <tr>
                <td colspan="9"><p>Data Berita tidak ditemukan!</p></td>
            </tr>
            <?php endif; ?>

            <?php $i = 1; ?>
            <?php foreach($musik as $msk) : ?>
            <tr>
                <th><?= $i; ?></th>
                <td><?= $msk ['judul_news']; ?></td>
                <td><?= $msk ['jurnalis']; ?></td>
                <td><?= $msk ['hari_tanggal']; ?></td>
                <td><?= $msk ['konten_news']; ?></td>
                <td><img src="img/<?= $msk ['gambar']; ?>" alt="" width="150px"></td>
                <td><?= $msk ['genre']; ?></td>
                <td class="d-grid gap-2 d-md-flex">
                    <a href="ubah.php?id_musik=<?= $msk['id_musik'];?>" class="btn btn-primary btn-sm ">Update</a>
                    <a href="delete.php?id_musik=<?= $msk['id_musik'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>