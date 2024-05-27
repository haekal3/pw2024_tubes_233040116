<?php
session_start();

if(isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

require 'functions.php';

//ambil id dari url
$id = $_GET['id_musik'];

// query berita berdasarkan id
$msk = query("SELECT * FROM musik_news, penyanyi WHERE (musik_news.id_musik = penyanyi.id_musik)");

//cek apakah tombol Update sudah di tekan
if(isset($_POST['submit'])) {
    if(update($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "data gagal diubah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>Upadate Data Berita</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="judul_news">Judul:
                    <input type="text" name="judul_news" required>
                </label>
            </li>
            <li>
                <label for="jurnalis">Jurnalis:
                    <input type="text" name="jurnalis" required>
                </label>
            </li>
            <li>
                <label for="hari_tanggal">Hari & tanggal: 
                    <input type="text" name="hari_tanggal" required>
                </label>
            </li>
            <li>
                <label for="konten_news">Konten:
                    <input type="text" name="konten_news" required>
                </label>
            </li>
            <li>
                <label for="gambar">Gambar:
                    <input type="text" name="gambar"required>
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Update</button>
            </li>
        </ul>
    </form>
</body>
</html>





<!-- <!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Form Tambah Data</title>
        <link rel="stylesheet" href="css/tambah.css">
    </head>
    <body>
        <div class="container">
            <div class="tambah-container">
                <h1>Tambah Data</h1>
                <from action="" method="POST">
                    <div class="input-group">
                        <label for="judul_news">Judul Berita: </label>
                        <input type="text" id="judul_news" name="judul_news" required/>
                    </div>
                    <div class="input-group">
                        <label for="jurnalis">Jurnalis: </label>
                        <input type="text" id="jurnalis" name="jurnalis" required/>
                    </div>
                    <div class="input-group">
                        <label for="hari_tanggal">Hari & Tanggal: </label>
                        <input type="text" id="hari_tanggal" name="hari_tanggal" required/>
                    </div>
                    <div class="input-group">
                        <label for="konten_news">Konten Berita: </label>
                        <textarea type="text" id="konten_news" name="konten_news" required></textarea>
                    </div>
                    <div class="input-group">
                        <label for="gambar">Gambar: </label>
                        <input type="text" id="gambar" name="gambar" required/>
                    </div>
                    <div class="input-group">
                        <button name="submit" type="submit">Upload</button>
                    </div>
                </from>
                </div>
            </div>
        </div>
    </body>
</html> -->