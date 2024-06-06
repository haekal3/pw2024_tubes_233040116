<?php
require 'functions.php';

if ( isset($_POST['register']) ) {
    if( register($_POST) > 0) {
        echo "<script>
                alert('user berhasil ditambahkan!');
            </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- css -->
    <link rel="stylesheet" href="css/registerr.css">
</head>
<body>
    <div class="register-box">
        <div class="register-header">
            <header>Register</header>
        </div>
        <form action="" method="POST">
            <div class="input-box">
                <input name="username" type="text" class="input-field" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input name="email" type="email" class="input-field" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input name="password" type="password" class="input-field" placeholder="Password" required>
            </div>
            <div class="input-box">
                <input name="password2" type="password" class="input-field" placeholder="Konfirmasi Password" required>
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit" name="register">Register</button>
            </div>
            <div class="login">
                <p>You have account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
