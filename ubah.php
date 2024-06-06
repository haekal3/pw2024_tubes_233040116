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
// jika tidak ada id
if(!isset($_GET['id_musik'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari url
$id_musik = $_GET['id_musik'];

// query musik_news berdasarkan id
$musik = query("SELECT * FROM musik_news WHERE id_musik = $id_musik")[0];

//cek apakah tombol Upload sudah di tekan
if(isset($_POST['ubah'])) {
    if(ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diupdate');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diupdate');
        document.location.href = 'ubah.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <!-- css -->
    <link rel="stylesheet" href="css/ubah.css">
</head>
<body>
    <div class="card">
        <form action="" method="POST" enctype="multipart/form-data">
        <h1>Update Data Berita</h1>
        <input type="hidden" name="id_musik" value="<?=$musik['id_musik'] ?>">
        <input type="hidden" name="gambarLama" value="<?=$musik['gambar'] ?>">
            <div>
                <div class="input-box">
                    <input type="text" name="judul_news" placeholder="judul" value="<?=$musik['judul_news'] ?>">
                </div>
                <div class="input-box">
                    <input type="text" name="jurnalis" placeholder="jurnalis" value="<?=$musik['jurnalis'] ?>">
                </div>
                <div class="input-box">
                    <input type="text" name="hari_tanggal" placeholder="hari&tanggal" value="<?=$musik['hari_tanggal'] ?>">
                </div>
                <div class="input-box">
                    <input type="text" name="konten_news" placeholder="konten" value="<?=$musik['konten_news'] ?>">
                </div>
                <div class="input-box">
                    <input type="file" name="gambar" placeholder="gambar">
                </div>
                <div class="button">
                    <button class="btn" id="ubah" name="ubah">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>