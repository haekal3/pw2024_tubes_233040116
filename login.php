<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

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
            header("Location: index.php");
            exit;
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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-box">
        <div class="header">
            <h1>Login</h1>
        </div>

        <?php if(isset($error)) : ?>
            <p style="color: red;">Username/Password salah!</p>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="input-box">            
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </div>
            <div class="input-box">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </div>
            <div class="input-submit">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
        <div class="register-link">
            <p>Don't have account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>