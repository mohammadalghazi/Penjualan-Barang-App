<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Store</title>
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap@5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Font | Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            font-weight: 700;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar {
            padding: 10px 20px;
        }
        .navbar-brand img {
            height: 40px;
        }
        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            margin: 0 10px;
        }
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        .carousel-item img {
            width: 100%;
            height: 60vh;
            object-fit: cover;
        }
        .product-card {
            margin-bottom: 30px;
            cursor: pointer;
        }
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-body {
            padding: 20px;
            text-align: center;
        }
        .card-title {
            font-weight: 600;
            margin-bottom: 10px;
            color: #007bff;
        }
        .card-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .about-section {
            background-color: #ffffff;
            padding: 60px 0;
            text-align: center;
        }
        .about-section h2 {
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }
        .about-section p {
            color: #666;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }
        footer {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap; /* Allow items to wrap */
        }
        .footer-logo {
            height: 40px;
            margin-bottom: 10px;
        }
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
            flex-wrap: wrap; /* Allow items to wrap */
        }
        .footer-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
        .footer-copy {
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }
        .pagination .page-item .page-link {
            color: #007bff;
        }
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <header class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/logo-capstone1.png') }}" alt="Logo" class="d-inline-block align-text-top">
                </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="material-icons">shopping_cart</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Slideshow -->
        <section class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/1920x600" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/1920x600" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/1920x600" class="d-block w-100" alt="Slide 3">
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
        </section>

        <!-- Show Product -->
        <section class="row py-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">All</button>
                            <button class="nav-link" id="nav-cat1-tab" data-bs-toggle="tab" data-bs-target="#nav-cat1" type="button" role="tab" aria-controls="nav-cat1" aria-selected="false">Category 1</button>
                            <button class="nav-link" id="nav-cat2-tab" data-bs-toggle="tab" data-bs-target="#nav-cat2" type="button" role="tab" aria-controls="nav-cat2" aria-selected="false">Category 2</button>
                        </div>
                    </nav>
                    <div class="input-group w-50">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search products...">
                    </div>
                </div>
                <div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center" id="pagination">
                            <!-- Pagination items will be dynamically added here -->
                        </ul>
                    </nav>
                </div>
                <div class="row" id="productContainer">
                    <!-- Product Cards -->
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                            <div class="card" onclick="window.location.href='#';">
                                <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Product {{ $i }}">
                                <div class="card-body">
                                    <h5 class="card-title">Product {{ $i }}</h5>
                                    <p class="card-text">Description for product {{ $i }}.</p>
                                    <p class="card-text">Price: ${{ rand(10, 100) }}</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="row about-section">
            <div class="container">
                <h2>About Us</h2>
                <p>Welcome to our store! We offer a wide range of quality products to meet your needs. Our mission is to provide a pleasant shopping experience with a friendly touch. Shop with us and discover the best deals and products!</p>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-light py-4 position-relative">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
                <!-- Logo di pojok kiri atas -->
                <div class="footer-logo mb-3 mb-md-0">
                    <img src="{{ asset('assets/img/logo-capstone1.png') }}" alt="Logo" style="height: 40px;">
                </div>

                <!-- Menu di footer -->
                <ul class="footer-links d-flex justify-content-center flex-wrap gap-3 mb-3 mb-md-0">
                    <li class="nav-item"><a href="#" class="nav-link text-light text-decoration-none">Products</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-light text-decoration-none">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-light text-decoration-none">FAQ</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-light text-decoration-none">Contact</a></li>
                </ul>

                <!-- Copyright di pojok kiri bawah -->
                <div class="footer-copy position-absolute bottom-0 start-0 p-3 mt-3">
                    <p class="mb-0">&copy; 2023 Your Company. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery@3.7.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Bootstrap@5.3.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const products = [];
        for (let i = 1; i <= 50; i++) {
            products.push({
                id: i,
                title: `Product ${i}`,
                description: `Description for product ${i}.`,
                price: Math.floor(Math.random() * 100) + 10,
                imgSrc: 'https://via.placeholder.com/350x250'
            });
        }

        let currentPage = 1;
        const itemsPerPage = 12;

        function displayProducts(page) {
            const productContainer = document.getElementById('productContainer');
            productContainer.innerHTML = '';
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedItems = products.slice(start, end);

            paginatedItems.forEach(product => {
                const productCard = `
                    <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                        <div class="card" onclick="window.location.href='#';">
                            <img src="${product.imgSrc}" class="card-img-top" alt="${product.title}">
                            <div class="card-body">
                                <h5 class="card-title">${product.title}</h5>
                                <p class="card-text">${product.description}</p>
                                <p class="card-text">Price: $${product.price}</p>
                            </div>
                        </div>
                    </div>
                `;
                productContainer.insertAdjacentHTML('beforeend', productCard);
            });

            renderPagination();
        }

        function renderPagination() {
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';
            const pageCount = Math.ceil(products.length / itemsPerPage);

            for (let i = 1; i <= pageCount; i++) {
                const pageItem = `
                    <li class="page-item ${i === currentPage ? 'active' : ''}">
                        <a class="page-link" href="#" onclick="goToPage(${i})">${i}</a>
                    </li>
                `;
                paginationContainer.insertAdjacentHTML('beforeend', pageItem);
            }
        }

        function goToPage(page) {
            currentPage = page;
            displayProducts(page);
        }

        function searchProducts() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const filteredProducts = products.filter(product => product.title.toLowerCase().includes(searchTerm) || product.description.toLowerCase().includes(searchTerm));

            const productContainer = document.getElementById('productContainer');
            productContainer.innerHTML = '';
            filteredProducts.forEach(product => {
                const productCard = `
                    <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                        <div class="card" onclick="window.location.href='#';">
                            <img src="${product.imgSrc}" class="card-img-top" alt="${product.title}">
                            <div class="card-body">
                                <h5 class="card-title">${product.title}</h5>
                                <p class="card-text">${product.description}</p>
                                <p class="card-text">Price: $${product.price}</p>
                            </div>
                        </div>
                    </div>
                `;
                productContainer.insertAdjacentHTML('beforeend', productCard);
            });

            renderPagination();
        }

        document.getElementById('searchInput').addEventListener('input', searchProducts);

        displayProducts(currentPage);
    </script>
</body>
</html>
