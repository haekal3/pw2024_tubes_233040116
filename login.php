<?php
session_start();
require 'functions.php';

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha224', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}


if(isset($_POST['login'])) {
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])) {
            // set session
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            // cek remember me
            if(isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha224', $row['username']), time()+60);
            }
            if($row['role'] == 'admin') {
                header('Location: admin.php');
            } else {
                header('Location: index.php');
            }
        exit();
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css -->
    <link rel="stylesheet" href="css/loginn.css">
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        <?php if(isset($error)) : ?>
            <p style="color: red;">Username/Password salah!</p>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="input-box">
                <input name="username" type="text" class="input-field" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input name="password" type="password" class="input-field" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="cookie">
                <section>
                    <input type="checkbox" id="check">
                    <label for="check" name="remember">Remember me</label>
                </section>
                <section>
                    <a href="#">Forgot password</a>
                </section>
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit" name="login">Login</button>
            </div>
            <div class="regist">
                <p>Don't have account? <a href="Register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>