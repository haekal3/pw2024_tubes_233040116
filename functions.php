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

// Insert
function insert($data) {
    global $koneksi;

    $judul_news = $data['judul_news'];
    $jurnalis = $data['jurnalis'];
    $hari_tanggal = $data['hari_tanggal'];
    $konten_news = $data['konten_news'];
    $gambar = $data['gambar'];

    $query = "INSERT INTO musik_news VALUES
    (null, '$judul_news', '$jurnalis', '$hari_tanggal', '$konten_news', '$gambar')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// update
function update($data) {
    global $koneksi;

    $id = $data['id_musik, id_penyanyi'];
    $judul_news = $data['judul_news'];
    $jurnalis = $data['jurnalis'];
    $hari_tanggal = $data['hari_tanggal'];
    $konten_news = $data['konten_news'];
    $gambar = $data['gambar'];

    $query = "UPDATE musik_news SET
                judul_news = '$judul_news',
                jurnalis = '$jurnalis',
                hari_tanggal = '$hari_tanggal',
                konten_news = '$konten_news',
                gambar = '$gambar'
            WHERE id_musik, id_penyanyi = $id;
                ";

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
    mysqli_query($koneksi, "INSERT INTO user VALUES(null, '$username', '$email', '$password')");

    return mysqli_affected_rows($koneksi);
}
?>