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

// cari
function cari($keyword) {
    global $koneksi;

    $query = "SELECT * FROM musik_news, penyanyi WHERE judul_news LIKE '%$keyword%' OR genre LIKE '%$keyword%'";

    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// upload
function upload() {
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if($error == 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if(!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek type file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // ukuran file
    // maksimal 10MB = 500000
    if($ukuran_file > 5000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan siap upload
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

    return $nama_file_baru;
}

// Insert
function insert($data) {
    global $koneksi;

    $judul_news = $data['judul_news'];
    $jurnalis = $data['jurnalis'];
    $hari_tanggal = $data['hari_tanggal'];
    $konten_news = $data['konten_news'];
    $id_penyanyi = $data['id_penyanyi'];

    // upload gambar
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO musik_news VALUES
    (null, '$judul_news', '$jurnalis', '$hari_tanggal', '$konten_news', '$gambar', '$id_penyanyi')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// update
function ubah($data) {
    global $koneksi;

    $id_musik = $data['id_musik'];
    $judul_news = $data['judul_news'];
    $jurnalis = $data['jurnalis'];
    $hari_tanggal = $data['hari_tanggal'];
    $konten_news = $data['konten_news'];
    $gambarLama = $data['gambarLama'];

    // cek apakah gambar baru atau lama
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE musik_news SET
                judul_news = '$judul_news',
                jurnalis = '$jurnalis',
                hari_tanggal = '$hari_tanggal',
                konten_news = '$konten_news',
                gambar = '$gambar'
                WHERE id_musik = $id_musik";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// delete
function delete($id_musik) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM musik_news WHERE id_musik = $id_musik") or die(mysqli_error($koneksi));
    return mysqli_affected_rows($koneksi);
}

// registrasi
function register($data) {
    global $koneksi;

    $username = strtolower(stripslashes($data['username']));
    $email = ($data['email']);
    $password = mysqli_real_escape_string($koneksi, $data['password']);
    $password2 = mysqli_real_escape_string($koneksi, $data['password2']);

    //cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar');
            </script>";
        return false;
    }

    //cek konfirmasi password
    if($password !== $password2) {
        echo "<scirpt>
                alert('konfirmasi password tidak sesuai!');
            </scirpt>";
        return false;
    }

    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($koneksi, "INSERT INTO user VALUES(null, '$username', '$email', '$password', 'user')");

    return mysqli_affected_rows($koneksi);
}
?>