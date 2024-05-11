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
            <a href="securityadminrequest.php" class="nav-link text-white">
            Request Transaction
            </a>
        </li>
        <li>
            <a href="securityadminconfirm.php" class="nav-link text-white">
            Confirm Transaction
            </a>
        </li>
    
        </ul>
        <hr>
        <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://media.licdn.com/dms/image/D4D03AQHH-5SQVy71Iw/profile-displayphoto-shrink_800_800/0/1706322955624?e=2147483647&v=beta&t=uRJ794S4lVY9wSSMGhS6hp0B2PJsSdlDVzNScwHAWQY" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{session("user")}}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Sign out</a></li>
        </ul>
        </div>
    </div>
    
    <div class="w-full text-bg-dark" >
        <div style="display:flex;justify-content:space-evenly;background-color:#272731; padding:20px;border-radius:15px;" >
            <h2 >Welcome {{session('user')}},[ Security Admin ]!</h2>


        </div><br><br><br><br>
        <div class="container">
            <h4 style="background-color:#272731; padding:20px;border-radius:15px;">Total Transaksi Yang Telah Di Lakukan : </h4><br>
            
            <div style="background-color:#282c34;padding:20px;border-radius:15px;">
                <table class="table table-dark">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jumlah Transaksi Sukses</th>
                        <th scope="col">Jumlah Transaksi Gagal</th>
                    </tr>
                    <tr>
                        <td scope="row"> 22 - 04 - 2024 </td>
                        <td> 15 </td>
                        <td> 2 </td>
                    </tr>
                    <tr>
                        <td scope="row"> 18 - 04 - 2024 </td>
                        <td> 25 </td>
                        <td> 6 </td>
                    </tr>
                    <tr>
                        <td scope="row"> 15 - 04 - 2024 </td>
                        <td> 30 </td>
                        <td> 5 </td>
                    </tr>
                    <tr>
                        <td scope="row"> 14 - 04 - 2024 </td>
                        <td> 12 </td>
                        <td> 1 </td>
                    </tr>
                </table>
            </div>

        </div>
        

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>