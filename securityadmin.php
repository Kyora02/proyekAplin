<?php
if(isset($_POST['logout'])){
    header("location: index.php");
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
    
    .t1{
        color: black;
    }
    .w-full{
        width:100%;
    }
    .nav-link:hover{
        background-color:#6e6464;
    }
</style>
<body>
<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height:100vh;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">APLINKU.COM</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link  text-white" aria-current="page">
            Home
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            Request Transaction
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            Confirm Transaction
            </a>
        </li>
    
        </ul>
        <hr>
        <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://media.licdn.com/dms/image/D4D03AQHH-5SQVy71Iw/profile-displayphoto-shrink_800_800/0/1706322955624?e=2147483647&v=beta&t=uRJ794S4lVY9wSSMGhS6hp0B2PJsSdlDVzNScwHAWQY" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Rico</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
        </div>
    </div>

    <div class="w-full text-bg-dark" style="display:flex;justify-content:space-evenly;">
        <h2>Welcome Rico,[ Security Admin ]!</h2>
        <form action="" method="post">
            <input class="btn btn-primary" type="submit" value="Logout" name="logout">
    
        </form>

    </div>

</div>
</body>
</html>