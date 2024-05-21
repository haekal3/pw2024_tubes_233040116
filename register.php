<!DOCTYPE html>
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
</html>
