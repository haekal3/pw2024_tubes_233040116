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

//cek apakah tombol Upload sudah di tekan
if(isset($_POST['submit'])) {
    if(insert($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'tambahData.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <!-- css -->
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>
    <div class="card">
        <form action="" method="POST" enctype="multipart/form-data">
        <h1>Tambah Data Berita</h1>
            <div>
                <div class="input-box">
                    <input type="text" name="judul_news" placeholder="judul" required>
                </div>
                <div class="input-box">
                    <input type="text" name="jurnalis" placeholder="jurnalis" required>
                </div>
                <div class="input-box">
                    <input type="text" name="hari_tanggal" placeholder="hari&tanggal" required>
                </div>
                <div class="input-box">
                    <input type="text" name="konten_news" placeholder="konten" required>
                </div>
                <div class="input-box">
                    <input type="file" name="gambar" placeholder="gambar">
                </div>
                <div class="input-box">
                    <label for="genre">Pilih Genre</label>
                    <select name="id_penyanyi">
                        <option>---</option>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM penyanyi") or die (mysqli_error($koneksi)); 
                        while($data = mysqli_fetch_array($query)) {
                            echo "<option value=$data[id_penyanyi]>$data[genre]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="button">
                    <button class="btn" id="submit" name="submit">Upload</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>