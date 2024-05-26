<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$musik = query("SELECT * FROM musik_news, penyanyi WHERE musik_news.id_musik = penyanyi.id_musik");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/halamanadmin.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!-- navbar -->
<!-- tabel -->
    <div class="tabel">
        <div class="judul">
            <h3>Daftar Berita</h3>
        </div>
        <div class="d-grid col-1 my-2 mx-5">
            <a href="tambahData.php" class="btn btn-primary">Insert +</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>News</th>
                <th>Jurnalis</th>
                <th>Hari/Tanggal</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Penyanyi</th>
                <th>Genre</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($musik as $msk) : ?>
            <tr>
                <th><?= $i++; ?></th>
                <td><?= $msk ['judul_news']; ?></td>
                <td><?= $msk ['jurnalis']; ?></td>
                <td><?= $msk ['hari_tanggal']; ?></td>
                <td><?= $msk ['konten_news']; ?></td>
                <td><img src="img/<?= $msk ['gambar']; ?>" alt="" width="150px"></td>
                <td><?= $msk ['nama']; ?></td>
                <td><?= $msk ['genre']; ?></td>
                <td class="d-grid gap-2 d-md-flex">
                    <a href="update.php?id_musik=<? $msk['id_musik, id_penyanyi'];?>" class="btn btn-primary btn-sm ">Update</a>
                    <a href="delete.php?id_musik=<?= $msk['id_musik'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>