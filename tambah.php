<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h1>Tambah Berita</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="judul">Judul Berita: </label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="jurnalis">Jurnalis: </label>
                <input type="text" name="jurnalis" id="jurnalis" required>
            </li>
            <li>
                <label for="haritanggal">Hari & Tanggal: </label>
                <input type="text" name="haritanggal" id="haritanggal" required>
            </li>
            <li>
                <label for="isi">Isi Berita: </label>
                <textarea name="isi" id="isi"></textarea required>
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>