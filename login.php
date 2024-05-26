<?php
session_start();
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
</head>
<body>
    <h1>Login</h1>
    <?php if(isset($error)) : ?>
        <p style="color: red;">Username/Password salah!</p>
    <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Form Login</title>
        <link rel="stylesheet" href="css/login.css"/>
    </head>
    <body>
        <div class="container">
            <div class="login-container">
                <h1>Login</h1>
                <from action="#">
                    <div class="input-group">
                        <label for="username">Username: </label>
                        <input type="username" id="username" name="username" required/>
                    </div>
                    <div class="input-group">
                        <label for="password">Password: </label>
                        <input type="password" id="password" name="password" required/>
                    </div>
                    <div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    <div class="input-group">
                        <button name="submit" type="submit">Login</button>
                    </div>
                    </from>
                    <div class="register">
                        <p>Don't have an account?</p>
                        <h4><a href="register.php">Register</a></h4>
                    </div>
                </div>
            </div>
    </body>
</html> -->
