<?php
require 'functions.php';
$berita_musik = query("SELECT * FROM berita");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Berita Musik</h1>

    <a href="tambah.php">Tambah Berita</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Jurnalis</th>
            <th>Hari & Tanggal</th>
            <th>Isi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($berita_musik as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["judul"]; ?></td>
            <td><?php echo $row["jurnalis"]; ?></td>
            <td><?php echo $row["hari & tanggal"]; ?></td>
            <td><?php echo $row["isi"]; ?></td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" width="100"></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>
    </table>
</body>
</html>