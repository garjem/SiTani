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

        .search-container {
            position: relative;
            width: 100%;
        }

        .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px; /* Sesuaikan ukuran sesuai keinginan Anda */
            height: 20px; /* Sesuaikan ukuran sesuai keinginan Anda */
        }

        .form-control {
            padding-left: 40px; /* Sesuaikan dengan lebar gambar + margin */
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .btn {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-left: 10px;
        }

        .btn-heart img {
            width: 24px;
            height: 24px;
        }
        .btn-heart {
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .container .row {
            margin-top: 20px;
        }

        .card {
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px; 
        }
        body {
            padding-top: 55px; /* Adjust the padding based on the height of your navbar */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand mb-0 h1 text-white" href="#">SiTani</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
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
                    <img src="keranjang.png" width="30" height="30">
                </a>
                <a class="navbar-brand" href="#">
                    <img src="profile.png" width="30" height="30">
                </a>
            </div>
        </nav>
    </header>
    <main>
        <form class="d-flex w-50 mx-auto mb-0 mt-4 search-form" role="search">
            <div class="search-container">
                <img src="search.png" alt="Search Icon" class="search-icon">
                <input class="form-control me-2" type="search" placeholder="Cari Belanja..." aria-label="Search">
            </div>
            <button class="btn btn-outline-success me-2" type="submit">Search</button>
            <button class="btn-heart" type="button">
                <img src="heart.png" alt="Heart Icon">
            </button>
        </form>
    
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body text-start">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">{{ $product->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Include Chat Feature -->
        @include('chat')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QFTKfZBRQbs0I4VHyE2m2qS3Y3F7k4+i/hriC8zh4Jxmn+fU9peYf9z+voRx3y6s" crossorigin="anonymous"></script>
</body>
</html>