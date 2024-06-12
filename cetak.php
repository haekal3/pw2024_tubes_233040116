<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
$musik = query("SELECT * FROM musik_news, penyanyi WHERE musik_news.id_penyanyi = penyanyi.id_penyanyi");

$mpdf = new \Mpdf\Mpdf();

$html= '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- css -->
    <link rel="stylesheet" href="css/cetak.css">
</head>
<body>
    <div class="tabel">
        <div class="judul">
            <h3>Data Berita Musik</h3>
        </div>
        <table class="table table-bordered">
            <tr class="text-center">
                <th>Id</th>
                <th>News</th>
                <th>Jurnalis</th>
                <th>Hari/Tanggal</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Genre</th>
            </tr>';
        $i = 1;
        foreach($musik as $msk){
            $html .= '<tr>
                <td>'. $i++ .'</td>
                <td>'. $msk ['judul_news'] .'</td>
                <td>'. $msk ['jurnalis'] .'</td>
                <td>'. $msk ['hari_tanggal'] .'</td>
                <td>'. $msk ['konten_news'] .'</td>
                <td><img src="img/'. $msk ['gambar'] .'"></td>
                <td>'. $msk ['genre'] .'</td>
            </tr>';
        }
$html .='</table>
    </div>
</body>
</html>';

$mpdf->WriteHTML($html);

$mpdf->Output('daftar-berita.pdf',\Mpdf\Output\Destination::DOWNLOAD);

?>