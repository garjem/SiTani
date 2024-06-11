<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTani - Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar.bg-body-tertiary {
            background-color: #58A399 !important;
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .custom-image-size {
            width: 470px;
            height: 470px;
        }
        .product-image {
            border-radius: 10px;
            margin-top: 20px;
        }
        .chat-button {
            background-color: #58A399;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 10px;
            margin-left: 20px;
        }
        .chat-button:hover {
            background-color: #469980;
        }
        .btn-outline {
            border-color: #58A399;
            border: 1.5px solid #58A399;
            color: #58A399;
        }
        .btn-outline:hover {
            background-color: #58A399;
            color: white;
        }
        .rating {
            font-size: 1.5em;
            display: inline-block;
            color: #ddd;
        }
        .rating .filled {
            color: #ffc107;
        }
        .favorite-icon {
            font-size: 1.5em;
            color: lightgray;
            cursor: pointer;
            margin-left: 10px;
        }
        .favorite-icon:hover {
            color: #ff6b6b;
        }
        .subtotal-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .quantity-container {
            display: flex;
            align-items: center;
        }
        .favorite-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        .spacing-bottom {
            margin-bottom: 25px;
        }
        .button-container {
            margin-bottom: 10px; /* Sesuaikan jarak yang diinginkan di sini */
        }
        /* Tambahkan kelas baru untuk tombol tambahkan ke keranjang */
        .add-to-cart-button {
            background-color: #58A399;
            color: white;
            border: none;
            padding: 15px 180px; /* Sesuaikan padding untuk membuat tombol lebih lebar */
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            vertical-align: middle;
            white-space: nowrap;
        }
        /* Hover state untuk tombol tambahkan ke keranjang */
        .add-to-cart-button:hover {
            background-color: #469980;
        }
        .buy-now-button {
            background-color: white;
            color: #58A399;
            border: 2px solid #58A399; /* Border sesuai warna tombol chat toko */
            padding: 15px 220px; /* Sesuaikan padding untuk membuat tombol lebih lebar */
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            vertical-align: middle;
            white-space: nowrap;
        }

        /* Hover state untuk tombol beli langsung */
        .buy-now-button:hover {
            background-color: #58A399;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">SiTani</span>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Workshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="#">
                <img src="/assets/keranjang.png" width="30" height="30">
            </a>
            <a class="navbar-brand" href="#">
                <img src="/assets/profile.png" width="30" height="30">
            </a>
        </div>
    </nav>
</header>
<main>

    
    <div class="container">
        <div class="row spacing-bottom">
            @foreach ($products as $product)
            <div class="col-md-6">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image custom-image-size">
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center spacing-bottom">
                    <h1>{{ $product->name }}</h1>
                    <div class="d-flex align-items-center">
                        <button class="chat-button">Chat toko</button>
                    </div>
                </div>
                <p class="spacing-bottom">{{ $product->description }}</p>
                <div class="d-flex justify-content-between align-items-center spacing-bottom">
                    <h2 class="me-3">Rp{{ number_format($product->price, 0, ',', '.') }}/Kg</h2>
                    <a href="/reviews" class="text-decoration-none text-dark">
                        <div class="d-flex align-items-center">
                            <span class="rating">
                                {!! str_repeat('<span class="filled">★</span>', $product->rating) !!}
                                {!! str_repeat('★', 5 - $product->rating) !!}
                            </span>
                            <span>{{ $product->reviews }} ulasan</span>
                        </div>
                    </a>
                </div>
                <div class="my-3 d-flex justify-content-between align-items-center spacing-bottom">
                    <div class="quantity-container">
                        <label for="quantity">Stok: {{ $product->stock }} Kg</label>
                        <div class="d-flex align-items-center ms-2">
                            <button class="btn btn-outline">-</button>
                            <input type="text" id="quantity" value="1" class="form-control mx-2" style="width: 50px; text-align: center;">
                            <button class="btn btn-outline">+</button>
                        </div>
                    </div>
                    <span class="favorite-icon">❤</span>
                </div>
                <div class="subtotal-container spacing-bottom">
                    <h3>Subtotal:</h3>
                    <h3>Rp{{ number_format($product->price, 0, ',', '.') }}</h3>
                </div>
                <div class="button-container">
                    <button class="add-to-cart-button">Tambahkan ke Keranjang</button>
                </div>
                <div class="button-container">
                    <button class="buy-now-button">Beli Langsung</button>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</main>
</body>
</html>
