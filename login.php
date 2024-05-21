<!DOCTYPE html>
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
</html>
