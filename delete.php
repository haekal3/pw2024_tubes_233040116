<?php
require 'functions.php';

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