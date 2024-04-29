<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .bag {
            background-color: #BED7DC;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            padding: 20px;
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

        .product-item {
            padding: 10px;
            border-bottom: 1px solid #3c3f43;
            cursor: pointer;
        }

        .product-item:last-child {
            border-bottom: none;
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
    <div class="container">
        <div class="category-list" id="category-list">
            <div class="category-item">Mobile</div>
            <div class="category-item">PC Game</div>
            <div class="category-item">Voucher</div>
            <div class="category-item">Streaming</div>
            <div class="category-item">Console</div>
        </div>

        <div class="product-list" id="product-list">
            <!-- Daftar produk sesuai kategori akan ditambahkan di sini -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        // Ambil semua item kategori
        const categoryItems = document.querySelectorAll('.category-item');

        // Loop melalui setiap item kategori
        categoryItems.forEach(item => {
            // Tambahkan event listener untuk setiap item kategori
            item.addEventListener('click', () => {
                // Hapus kelas 'active' dari setiap item kategori
                categoryItems.forEach(item => {
                    item.classList.remove('active');
                });
                // Tambahkan kelas 'active' ke item kategori yang diklik
                item.classList.add('active');
            });
        });
    </script>
</body>

</html>
