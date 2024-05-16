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
?>