<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Login</title>
        <link href="<?= base_url() ?>/assets/style2.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    </head>
    
    <body>
        <div align="center">

            <form action="/welcome/cekLogin" method="POST">
            <div class="login">
                <div class="avatar">
                    <i class="fa fa-user"></i>
                </div>

                <h2>Halaman Login</h2>
                <div class="box-login">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>

                <div class="box-login">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <button type="submit" class="btn-login">Login</button>

                <div class="bottom">
                    <a href="">Register</a>
                    <a href="">Forgot Password</a>
                </div>
            </form>

            
        </div>
    </body>
</html>