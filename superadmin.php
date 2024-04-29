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
</style>
<body>
<div class="container">
    <h2>Welcome Rico,[ Super Admin ]!</h2>
    <form action="" method="post">
        <input class="btn btn-primary" type="submit" value="Logout" name="logout">

    </form>

</div>
</body>
</html>