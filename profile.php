<?php
session_start();
require 'functions.php';

// cek apakah pengguna sudah login
if(!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

// ambil username dari sesi
$username = $_SESSION['username'];

//pengguna dari database
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- css -->
    <link rel="stylesheet" href="css/profilee.css">
</head>
<body>
    <div class="card">
        <h1>Selamat Datang</h1>
        <img src="assets/img/login.png" alt="" class="img">
        <h2 class="username"><?=($username); ?></h2>
        <p class="username"><?=($user['email']); ?></p>
        <div class="button">
            <button><a href="admin.php">Kembali ke Halaman</a></button>
            <button><a href="logout.php">Logout</a></button>
        </div>
    </div>
</body>
</html>