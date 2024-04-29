<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .bag {
    background-color: #BED7DC;
  }
</style>

<body>
<nav class="navbar navbar-expand-lg bag">
    <div class="container-xl d-flex justify-content-center">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <!-- Category items with dropdown behavior -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="category.php" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="category.php?category=Mobile">Mobile</a>
              <a class="dropdown-item" href="category.php?category=PC Game">PC Game</a>
              <a class="dropdown-item" href="category.php?category=Voucher">Voucher</a>
              <a class="dropdown-item" href="category.php?category=Streaming">Streaming</a>
              <a class="dropdown-item" href="category.php?category=Console">Console</a>
            </div>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  </div>
  <div id="listgame" style="display:flex; justify-content: space-evenly;margin-top:30px">
    <div id="isi">
      <img src="Assets/game.jpg" alt="">
      <br>
      Top Up Game 
    </div>
    <div id="isi">
      <img src="Assets/akun.jpg" alt="">
      <br>
      Jual Beli Akun
    </div>
    <div id="isi">
      <img src="Assets/voucher.jpg" alt="">
      <br>
      Voucher & Game Key
    </div>
    <div id="isi">
      <img src="Assets/streaming.jpg" alt="">
      <br>
      Streaming
    </div>
</div>
<div id="belicepat" style="margin-top:20px;">
  <img src="Assets/petir.jpg" alt=""> Beli Cepat
  <div class="navbar" style="background-color: white;padding: 10px;display: flex; justify-content: space-around;">
        <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;" onclick="showContent(['mobile-legends', 'pubg-mobile','steam','genshin'])">For You</button>
        <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;" onclick="showContent(['csgo','valo','roblox'])">PC Game</button>
        <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;" onclick="showContent(['mobile-legends','pubg-mobile'])">Mobile Game</button>
        <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;" onclick="showContent(['bigo','nimo','netflix'])">Streaming</button>
    </div>
    <div id="isicontent" style="display:flex;justify-content:space-evenly;">
      <div id="mobile-legends" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>Mobile Legends</h2>
          <center><img src="Assets/ml.jpg" alt="" width="150px" height="150px"></center>   
      </div>
      <div id="nimo" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>Nimo</h2>
          <center><img src="Assets/nimo.jpg" alt="" width="150px" height="150px"></center>   
      </div>
      <div id="netflix" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>Netflix</h2>
          <center><img src="Assets/netflix.jpg" alt="" width="150px" height="150px"></center>   
      </div>
      <div id="bigo" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>Bigo Live</h2>
          <center><img src="Assets/bigo.jpg" alt="" width="150px" height="150px"></center>   
      </div>
      <div id="pubg-mobile" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>PUBG Mobile</h2>
          <center><img src="Assets/pubg.jpg" alt="" width="150px" height="150px"></center>
      </div>
      <div id="steam" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>Steam</h2>
          <center><img src="Assets/steam.jpg" alt="" width="150px" height="150px"></center>
      </div>
      <div id="genshin" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>Genshin Impact</h2>
          <center><img src="Assets/genshin.jpg" alt="" width="150px" height="150px"></center>
      </div>
      <div id="csgo" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>CS:GO</h2>
          <center><img src="Assets/cs.jpg" alt="" width="150px" height="150px"></center>
      </div> 
      <div id="roblox" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>Roblox</h2>
          <center><img src="Assets/roblox.jpg" alt="" width="150px" height="150px"></center>
      </div> 
      <div id="valo" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
          <h2>Valorant</h2>
          <center><img src="Assets/valo.jpg" alt="" width="150px" height="150px"></center>
      </div>    
    </div>
</div>
</body>
<script>
        function showContent(contentIds) {
            var allContent = document.querySelectorAll('.content');
            allContent.forEach(function (content) {
                content.style.display = 'none';
            });
            contentIds.forEach(function (contentId) {
                var content = document.getElementById(contentId);
                content.style.display = 'block';
            });
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>