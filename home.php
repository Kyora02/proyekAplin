<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
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

        #isi {
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }

        #isi img {
            width: 150px;
            height: 150px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bag">
        <!-- Navbar content -->
    </nav>

    <div id="listgame">
        <!-- 10 items -->
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
        <div id="isi">
        <img src="Assets/petir.jpg" alt=""> <br>
        Beli Cepat
        </div>
        <!-- Repeat these 6 more times for a total of 10 items -->
    </div>

     
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
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
