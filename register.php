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
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password: </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
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
        <title>Form Register</title>
        <link rel="stylesheet" href="css/register.css"/>
    </head>
    <body>
        <div class="container">
            <div class="register-container">
                <h1>Register</h1>
                <from action="#">
                    <div class="input-group">
                        <label for="username">Username: </label>
                        <input type="username" id="username" name="username" required/>
                    </div>
                    <div class="input-group">
                        <label for="email">Email: </label>
                        <input type="email" id="email" name="email" required/>
                    </div>
                    <div class="input-group">
                        <label for="password">Password: </label>
                        <input type="password" id="password" name="password" required/>
                    </div>
                    <div class="input-group">
                        <button name="submit" type="submit">Login</button>
                    </div>
                    </from>
                    <div class="login">
                        <p>Already have an account?</p>
                        <h4><a href="login.php">Login</a></h4>
                    </div>
                </div>
            </div>
    </body>
</html> -->
