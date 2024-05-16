<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040116");

// halaman admin
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// Form tambah data
function tambah($data) {
    global $koneksi;

    $judul = $data['judul'];
    $jurnalis = $data['jurnalis'];
    $haritanggal = $data['haritanggal'];
    $isi = $data['isi'];
    $gambar = $data['gambar'];

    $query = "INSERT INTO berita VALUES (null, '$judul', '$jurnalis', '$haritanggal', '$isi', '$gambar')";
    mysqli_query($koneksi, $query);
    echo mysqli_error($koneksi);
    return mysqli_affected_rows($koneksi);
}
?>