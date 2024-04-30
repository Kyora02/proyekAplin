<?php

if(isset($_POST['login'])){
    header("location: home.php");
}
if(isset($_POST['securityadmin'])){
    header("location: securityadmin.php");
}
if(isset($_POST['superadmin'])){
    header("location: superadmin.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .box{
        background-color: #E8EFCF;
        border: solid black 1px;
    }
    body{
        background-image: url('Assets/HomeWallpeper.jpg');
        background-size: cover;
    }
    .t1{
        color: black;
    }
</style>
<body>
    <div class="container mt-5 w-50 ">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="box border rounded p-5">
                    <h1 class="text-center">Login</h1>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username"><strong>Username</strong></label>
                            <input type="text" class="form-control rounded" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password"><strong>Password</strong></label>
                            <input type="password" class="form-control rounded" id="password" name="password">
                        </div><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label text-light d-flex justify-content-between" for="flexCheckDefault">
                            <span class="t1"><strong>Remember Me</strong></span>
                            <a href="" class="text-decoration-none">Forgot Password?</a>
                            </label>
                        </div><br>
                        <div class="row justify-content-center">
                            <form action="" method="post">
                                <button class="btn btn-primary" type="submit" name="login">Login</button>

                            </form>
                        </div><br>          
                        <div>
                            <strong>Don't have account?</strong>&nbsp;<a href="register.php" class="text-decoration-none">Register Now</a>
                            </label>
                        </div>              
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>