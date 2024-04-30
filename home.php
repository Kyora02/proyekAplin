<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            grid-template-columns: repeat(5, 1fr); /* 5 columns */
            grid-template-rows: auto auto; /* 2 rows */
            gap: 20px; /* Gap between items */
            justify-content: space-evenly; /* Horizontal alignment */
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

        .container {
            display: none; /* Initially hide the container */
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
</head>

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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="toggleContainer()">
                            Category
                        </a>
                        
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="category-list" id="category-list">
            <div class="category-item"  onclick="showContent(['mobile-legends', 'pubg-mobile'])">Mobile</div>
            <div class="category-item"  onclick="showContent(['csgo', 'roblox', 'valo'])">PC Game</div>
            <div class="category-item">Voucher</div>
            <div class="category-item" onclick="showContent(['nimo', 'netflix', 'bigo'])">Streaming</div>
            <div class="category-item">Console</div>
        </div>

        <div class="product-list" id="product-list">
        </div>
    </div>
    <div id="listgame">
        <div class="isi">
            <img src="Assets/game.jpg" alt="">
            <br>
            Top Up Game
        </div>
        <div class="isi">
            <img src="Assets/akun.jpg" alt="">
            <br>
            Jual Beli Akun
        </div>
        <div class="isi">
            <img src="Assets/voucher.jpg" alt="">
            <br>
            Voucher & Game Key
        </div>
        <div class="isi">
            <img src="Assets/streaming.jpg" alt="">
            <br>
            Streaming
        </div>
    </div>

    <div id="belicepat" style="margin-top:20px;">
        <img src="Assets/petir.jpg" alt=""> Beli Cepat
        <div class="navbar" style="background-color: white;padding: 10px;display: flex; justify-content: space-around;">
            <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;"
                onclick="showContent(['mobile-legends', 'pubg-mobile'])">For You</button>
            <button style="background-color: #555;color: white;border: none;padding: 10px 20px;cursor: pointer;transition: background-color 0.3s;"
                onclick="showContent(['csgo','valo','roblox'])">PC Game</button>
        </div>
        <div id="isicontent" style="display:flex;justify-content:space-evenly;">
            <div id="mobile-legends" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;"
                class="content">
                <h2>Mobile Legends</h2>
                <center><img src="Assets/ml.jpg" alt="" width="150px" height="150px"></center>

            </div>

            <div id="pubg-mobile" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;"
                class="content">
                <h2>PUBG Mobile</h2>
                <center><img src="Assets/pubg.jpg" alt="" width="150px" height="150px"></center>
            </div>

            <div id="csgo" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
                <h2>CS:GO</h2>
                <center><img src="Assets/cs.jpg" alt="" width="150px" height="150px"></center>
            </div>
            <div id="roblox" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;"
                class="content">
                <h2>Roblox</h2>
                <center><img src="Assets/roblox.jpg" alt="" width="150px" height="150px"></center>
            </div>
            <div id="valo" style="display: none;padding: 20px;background-color: #f9f9f9;margin-top: 10px;" class="content">
                <h2>Valorant</h2>
                <center><img src="Assets/valo.jpg" alt="" width="150px" height="150px"></center>
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
        </div>
    </div>
   
    <script>
        function toggleContainer() {
            var container = document.querySelector('.container');
            if (container.style.display === 'none') {
                container.style.display = 'flex';
            } else {
                container.style.display = 'none';
            }
        }

        function showContent(contentIds) {
    var productList = document.getElementById('product-list');

    productList.innerHTML = '';
    var categoryItems = document.querySelectorAll('.category-item');
    categoryItems.forEach(function(item) {
        item.classList.remove('active');
    });

    contentIds.forEach(function(contentId) {
        var content = document.getElementById(contentId);
        var clonedContent = content.cloneNode(true);
        clonedContent.style.display = 'block';
        productList.appendChild(clonedContent);
    });

    var clickedCategoryItem = document.querySelector('.category-item[onclick="showContent(\'' + contentIds[0] + '\')"]');
    clickedCategoryItem.classList.add('active');
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
