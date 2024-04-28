<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .box{
        border: solid 1px black;
        background-color: #E8EFCF;
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
    <div class="container mt-5 w-50">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="box border rounded p-5">
                    <h1 class="text-center">Register</h1>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username"><strong>Username</strong></label>
                            <input type="text" class="form-control rounded" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password"><strong>Password</strong></label>
                            <input type="password" class="form-control rounded" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="name"><strong>Name</strong></label>
                            <input type="text" name="name" class="form-control rounded" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email"><strong>Email</strong></label>
                            <input type="text" name="email" class="form-control rounded" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone"><strong>Phone Number</strong></label>
                            <input type="text" name="phone" class="form-control rounded" id="phone">
                        </div><br>
                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label t1" for="flexCheckDefault">
                            <strong>I agree to the</strong>&nbsp;<a href="" class="text-decoration-none">privacy policy of itemku.</a>
                        </label>
                        </div><br>
                        <div class="row justify-content-center">
                            <button class="btn btn-primary" type="submit" name="register">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>