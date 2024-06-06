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
if(!isset($_GET['id_musik'])) {
    header("Location: index.php");
    exit;
}

// mengambil id dari url
$id_musik = $_GET['id_musik'];

if(delete($id_musik) > 0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "data gagal dihapus";
}
?>