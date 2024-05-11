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
            background-color: #f9f9f9;
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
            </li>
            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="toggleContainer()">
                            Category
                        </a>

                    </li>
          </ul>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-7">
                      <form class="d-flex">
                          <div class="input-group w-100">
                              <span class="input-group-text">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15">
                                      <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                                  </svg>
                              </span>
                              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          
        <div>
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 20.25C16.5523 20.25 17 19.8023 17 19.25C17 18.6977 16.5523 18.25 16 18.25C15.4477 18.25 15 18.6977 15 19.25C15 19.8023 15.4477 20.25 16 20.25Z" fill="#307FE2"></path><path d="M16 17.25C15.6044 17.25 15.2178 17.3673 14.8889 17.5871C14.56 17.8068 14.3036 18.1192 14.1522 18.4846C14.0009 18.8501 13.9613 19.2522 14.0384 19.6402C14.1156 20.0281 14.3061 20.3845 14.5858 20.6642C14.8655 20.9439 15.2219 21.1344 15.6098 21.2116C15.9978 21.2887 16.3999 21.2491 16.7654 21.0978C17.1308 20.9464 17.4432 20.69 17.6629 20.3611C17.8827 20.0322 18 19.6456 18 19.25C18 18.7196 17.7893 18.2109 17.4142 17.8358C17.0391 17.4607 16.5304 17.25 16 17.25Z" fill="#307FE2"></path><path d="M9 17.25C8.60444 17.25 8.21776 17.3673 7.88886 17.5871C7.55996 17.8068 7.30362 18.1192 7.15224 18.4846C7.00087 18.8501 6.96126 19.2522 7.03843 19.6402C7.1156 20.0281 7.30608 20.3845 7.58579 20.6642C7.86549 20.9439 8.22186 21.1344 8.60982 21.2116C8.99778 21.2887 9.39992 21.2491 9.76537 21.0978C10.1308 20.9464 10.4432 20.69 10.6629 20.3611C10.8827 20.0322 11 19.6456 11 19.25C11 18.7196 10.7893 18.2109 10.4142 17.8358C10.0391 17.4607 9.53043 17.25 9 17.25Z" fill="#307FE2"></path><path d="M20 5.25H7.00005C6.82375 5.25134 6.64859 5.27829 6.48005 5.33L6.06005 4C6.00854 3.83267 5.91401 3.6818 5.7859 3.56247C5.65779 3.44313 5.5006 3.35953 5.33005 3.32L3.23005 2.82C2.98144 2.78141 2.72742 2.83795 2.51864 2.97834C2.30987 3.11873 2.16169 3.33265 2.10364 3.57745C2.0456 3.82225 2.08196 4.07993 2.20547 4.29911C2.32899 4.51829 2.53058 4.68286 2.77005 4.76L4.31005 5.13L5.31005 8.32C5.30674 8.34991 5.30674 8.38009 5.31005 8.41L7.10005 14.25C7.10005 14.7804 7.31076 15.2891 7.68583 15.6642C8.06091 16.0393 8.56961 16.25 9.10005 16.25H18C18.5305 16.25 19.0392 16.0393 19.4143 15.6642C19.7893 15.2891 20 14.7804 20 14.25L22 7.25C22 6.71957 21.7893 6.21086 21.4143 5.83579C21.0392 5.46072 20.5305 5.25 20 5.25ZM18.08 13.7C18.0279 13.8787 18.001 14.0638 18 14.25H9.10005C9.09219 14.0564 9.05856 13.8647 9.00005 13.68L7.09005 7.25H19.92L18.08 13.7Z" fill="#307FE2"></path></svg>
        </div>
        <div class="dropdown me-4 t1">
              <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="ps-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"  width="30" height="30"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu">
                <li class="dropdown-item">
                  <p class="fw-semibold mb-0">{{session('user')}}</p>
                </li>
                <li><a class="dropdown-item" href="/profile">My Profile   </a></li>
                <li><a class="dropdown-item" href="">Account Settings</a></li>
                <li><a class="dropdown-item text-danger" href="">Logout</a></li>
              </ul>
            </div>         
          </div>
    </div>
    </div>
  </nav><br>
 

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
          <p class="text-center">Top Up Game</p> 
        </div>
        <div class="isi">
          <img src="Assets/akun.jpg" alt="" class="img-fluid">
          <p class="text-center">Jual Beli Akun</p>
        </div>
        <div class="isi">
          <img src="Assets/voucher.jpg" alt="" class="img-fluid">
          <div class="text-center">
            <p style="max-width: 80%; margin: 0 auto;">Voucher & Game Key</p>
          </div>
        </div>
        <div class="isi">
          <img src="Assets/streaming.jpg" alt="" class="img-fluid">
          <p class="text-center">Streaming</p>
        </div>
      </div>
    </div>
  </div><br>
<div class="bagHome container-xl">
  <div id="belicepat" class="p-5">
    <div class="d-flex align-items-center">
      <img src="Assets/petir.jpg" alt="" class="img-fluid mr-2" style="max-width: 100px;">
      <p class="font-weight-bold">Beli Cepat</p>
    </div>
    <div class="navbar" style="display: flex; justify-content: space-around;">
          <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;" onclick="showisi(['mobile-legends', 'pubg-mobile','steam','genshin'])">For You</button>
          <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;" onclick="showisi(['csgo','valo','roblox'])">PC Game</button>
          <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;" onclick="showisi(['mobile-legends','pubg-mobile'])">Mobile Game</button>
          <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;" onclick="showisi(['bigo','nimo','netflix'])">Streaming</button>
      </div>
      <div id="isicontent" style="display:flex;justify-content:space-evenly;">
        <div id="mobile-legends" style="display: none;" class="content">
            <h2>Mobile Legends</h2>
            <center><img src="Assets/ml.jpg" alt="" width="150px" height="150px"></center>   
        </div>
        <div id="nimo" style="display: none;" class="content">
            <h2>Nimo</h2>
            <center><img src="Assets/nimo.jpg" alt="" width="150px" height="150px"></center>   
        </div>
        <div id="netflix" style="display: none;" class="content">
            <h2>Netflix</h2>
            <center><img src="Assets/netflix.jpg" alt="" width="150px" height="150px"></center>   
        </div>
        <div id="bigo" style="display: none;" class="content">
            <h2>Bigo Live</h2>
            <center><img src="Assets/bigo.jpg" alt="" width="150px" height="150px"></center>   
        </div>
        <div id="pubg-mobile" style="display: none;" class="content">
            <h2>PUBG Mobile</h2>
            <center><img src="Assets/pubg.jpg" alt="" width="150px" height="150px"></center>
        </div>
        <div id="steam" style="display: none;" class="content">
            <h2>Steam</h2>
            <center><img src="Assets/steam.jpg" alt="" width="150px" height="150px"></center>
        </div>
        <div id="genshin" style="display: none;" class="content">
            <h2>Genshin Impact</h2>
            <center><img src="Assets/genshins.jpg" alt="" width="150px" height="150px"></center>
        </div>
        <div id="csgo" style="display: none;" class="content">
            <h2>CS:GO</h2>
            <center><img src="Assets/cs.jpg" alt="" width="150px" height="150px"></center>
        </div> 
        <div id="roblox" style="display: none;" class="content">
            <h2>Roblox</h2>
            <center><img src="Assets/roblox.jpg" alt="" width="150px" height="150px"></center>
        </div> 
        <div id="valo" style="display: none;" class="content">
            <h2>Valorant</h2>
            <center><img src="Assets/valo.jpg" alt="" width="150px" height="150px"></center>
        </div>    
      </div>
  </div>
</div>
</body>
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
