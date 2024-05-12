<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .content {
        width: 300px;
        height: 200px;
        margin-bottom: 5px;
    }

    .content img {
        max-width: 100px;
        max-height: 100px;
    }

    .bag {
        background-color: #BED7DC;
    }

    #listgame {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: auto auto;
        gap: 20px;
        justify-content: space-evenly;  
    }

    .isi {
        text-align: center;
        padding: 20px;
        margin-bottom: 20px;
    }

    .isi img {
        width: 150px;
        height: 150px;
    }

    .bag {
        background-color: #BED7DC;
    }

    .category-container {
        display: none;
        justify-content: center;
        align-items: flex-start;
        height: 500px;
        padding: 10px;
    }

    .category-list {
        flex: 1;
        padding: 10px;
        border-right: 1px solid #3c3f43;
        max-width: 200px;
        overflow-y: auto;
    }

    .product-list {
        flex: 3;
        padding: 10px;
        overflow-y: auto;
        max-height: 400px;
    }

    .category-item {
        padding: 10px;
        border-bottom: 1px solid #3c3f43;
        cursor: pointer;
    }

    .category-item.active {
        background-color: #3c3f43;
        color: #ffffff;
    }

    .category-item:hover {
        background-color: #a0a0a0;
    }

    .dropdown-menu {
        background-color: #BED7DC;
        border: none;
        box-shadow: none;
    }

    .dropdown-item {
        color: #3c3f43;
        padding: 10px;
        transition: background-color 0.3s;
    }

    .dropdown-item:hover {
        background-color: #a0a0a0;
        color: #ffffff;
    }
    .bagHome{
        background-color: #A0DEFF;
    }

    .carousel-control-prev,
    .carousel-control-next {
    width: auto;
    height: auto;
    }

    .carousel-control-prev {
    left: 0;
    }

    .carousel-control-next {
    right: 0;
    }
    #fontText{
        font-size: 25pt;
    }
</style>

<body>
    @if(Session::has('username'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Welcome, {{ Session::get('username') }}</p>
            </div>
        </div>
    </div>
@endif
<nav class="navbar navbar-expand-lg bag">
    <div class="container-xl d-flex justify-content-center">
        <a class="navbar-brand" href="#"><strong>ItemConsignment</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Category 1</a>
                        <a class="dropdown-item" href="#">Category 2</a>
                        <a class="dropdown-item" href="#">Category 3</a>
                    </div>
                </li>
            </ul>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <form class="d-flex">
                            <div class="input-group w-100">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15">
                                        <path
                                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                    </svg>
                                </span>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="dropdown me-4 t1">
                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="ps-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30">
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu">
                    @if(Session::has('username'))
                    <li class="dropdown-item">
                        <p class="fw-semibold mb-0">{{session('user')}}</p>
                    </li>
                    <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                    <li><a class="dropdown-item" href="">Account Settings</a></li>
                    <li><a class="dropdown-item text-danger" href="/logout">Logout</a></li>
                    @else
                    <li><a class="dropdown-item" href="/login">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
<br>
 

  <div class="category-container">
        <div class="category-list" id="category-list">
            <div class="category-item" onclick="showContent(['mobile-legends', 'pubg-mobile'])">Mobile</div>
            <div class="category-item" onclick="showContent(['csgo', 'roblox', 'valo'])">PC Game</div>
            <div class="category-item">Voucher</div>
            <div class="category-item" onclick="showContent(['nimo', 'netflix', 'bigo'])">Streaming</div>
            <div class="category-item">Console</div>
        </div>

        <div class="product-list" id="product-list">
        </div>
    </div>
  <div class="container">
    <div class="row">
      <div id="listgame" class="d-flex justify-content-around">
        <div class="isi">
          <img src="Assets/game.jpg" alt="" class="img-fluid">
          <strong><p class="text-center">Top Up Game</p> </strong>
        </div>
        <div class="isi">
          <img src="Assets/akun.jpg" alt="" class="img-fluid">
          <strong><p class="text-center">Jual Beli Akun</p></strong>
        </div>
        <div class="isi">
          <img src="Assets/voucher.jpg" alt="" class="img-fluid">
          <div class="text-center">
            <strong><p style="max-width: 80%; margin: 0 auto;">Voucher & Game Key</p></strong>
          </div>
        </div>
        <div class="isi">
          <img src="Assets/streaming.jpeg" alt="" class="img-fluid">
          <strong><p class="text-center">Streaming</p></strong>
        </div>
      </div>
    </div>
  </div><br>
<div class="bagHome">
    <div class="container-xl">
        <div id="belicepat" class="p-5">
          <div class="d-flex align-items-center">
            <img src="Assets/petir.png" alt="" class="img-fluid mr-2" style="max-width: 100px;">
            <p class="px-2" id="fontText"><strong>Beli Cepat</strong></p>
          </div><br>
          <div class="navbar" style="display: flex; justify-content: space-around;">
                <button class="btn" style="background-color: #555;color: white;border: none;cursor: pointer;transition: background-color 0.3s;" onclick="showisi(['mobile-legends', 'pubg-mobile','steam','genshin'])">For You</button>
                <button class="btn" style="background-color: #555;color: white;border: none;cursor: pointer;transition: background-color 0.3s;" onclick="showisi(['csgo','valo','roblox'])">PC Game</button>
                <button class="btn" style="background-color: #555;color: white;border: none;cursor: pointer;transition: background-color 0.3s;" onclick="showisi(['mobile-legends','pubg-mobile'])">Mobile Game</button>
                <button class="btn" style="background-color: #555;color: white;border: none;cursor: pointer;transition: background-color 0.3s;" onclick="showisi(['bigo','nimo','netflix'])">Streaming</button>
            </div>
            <div class="container"id="isicontent" style="display:flex;justify-content:space-evenly;">
              <div id="mobile-legends" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/ml.jpg" alt="" width="150px" height="150px">   
                      <p class="mt-2"><strong>Mobile Legends</strong></p>
                  </div>                     
              </div>
              <div id="nimo" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/nimo.jpg" alt="" width="150px" height="150px">   
                      <p class="mt-2"><strong>Nimo</strong></p>
                  </div>
              </div>
              <div id="netflix" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/netflix.jpg" alt="" width="150px" height="150px">   
                      <p class="mt-2"><strong>Netflix</strong></p>
                  </div>
              </div>
              <div id="bigo" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/bigo.jpg" alt="" width="150px" height="150px"></center>      
                      <p class="mt-2"><strong>Bigo Live</strong></p>
                  </div> 
              </div>
              <div id="pubg-mobile" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/pubg.jpg" alt="" width="150px" height="150px"></center>
                      <p class="mt-2"><strong>PUBG Mobile</strong></p>
                  </div>
              </div>
              <div id="steam" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/steam.jpg" alt="" width="150px" height="150px"></center>
                      <p class="mt-2"><strong>Steam</strong></p>
                  </div>
              </div>
              <div id="genshin" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/genshins.jpg" alt="" width="150px" height="150px"></center>
                      <p><strong>Genshin Impact</strong></p>
                  </div>
              </div>
              <div id="csgo" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/cs.jpg" alt="" width="150px" height="150px"></center>
                      <p class="mt-2"><strong>CS:GO</strong></p>
                  </div>
              </div> 
              <div id="roblox" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/roblox.jpg" alt="" width="150px" height="150px">
                      <p class="mt-2"><strong>Roblox</strong></p>
                  </div>
              </div> 
              <div id="valo" style="display: none;" class="content">
                  <div class="text-center">
                      <img src="Assets/valo.jpg" alt="" width="150px" height="150px">
                      <p class="mt-2"><strong>Valorant</strong></p>
                  </div>
              </div>    
            </div>
        </div>
    </div>
</div><br><br><br>

<div class="d-flex justify-content-center">
    <div class="mx-3">
        <div id="carouselExampleIndicators" class="carousel slide" style="max-width: 800px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Assets/carousel.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Assets/carousel1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Assets/carousel2.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="mx-3">
        <div class="d-flex flex-column">
            <img src="Assets/promo.jpeg" alt="" style="max-width: 600px;" class="mb-3">
            <img src="Assets/promo1.jpg" alt="" style="max-width: 600px;">
        </div>
    </div>
</div><br>
<footer>

</footer>

<script>
         function toggleContainer() {
            var container = document.querySelector('.category-container');
            if (container.style.display === 'none') {
                container.style.display = 'flex';
            } else {
                container.style.display = 'none';
            }
        }
        function showisi(contentIds) {
            var allContent = document.querySelectorAll('.content');
            allContent.forEach(function (content) {
                content.style.display = 'none';
            });
            contentIds.forEach(function (contentId) {
                var content = document.getElementById(contentId);
                content.style.display = 'block';
            });
        }

        function showisi(contentIds) {
            var allContent = document.querySelectorAll('.content');
            allContent.forEach(function (content) {
                content.style.display = 'none';
            });
            contentIds.forEach(function (contentId) {
                var content = document.getElementById(contentId);
                content.style.display = 'block';
            });
        }
    function showContent(contentIds) {
    var productList = document.getElementById('product-list');

    productList.innerHTML = '';
    var categoryItems = document.querySelectorAll('.category-item');
    categoryItems.forEach(function (item) {
        item.classList.remove('active');
    });

    contentIds.forEach(function (contentId) {
        var content = document.getElementById(contentId);
        var clonedContent = content.cloneNode(true);
        clonedContent.style.display = 'block';
        productList.appendChild(clonedContent);
    });

    var clickedCategoryItem = document.querySelector('.category-item[onclick="showContent(\'' + contentIds[0] + '\')"]');
    clickedCategoryItem.classList.add('active');
}
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
