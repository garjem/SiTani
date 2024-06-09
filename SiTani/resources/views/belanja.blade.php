<!-- resources/views/belanja.blade.php -->
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
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/wortel.png" class="card-img-top" alt="Wortel">
                        <div class="card-body text-start">
                            <h5 class="card-title">Wortel</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Wortel adalah sayuran umbi yang terkenal dengan warna oranye cerahnya. Mereka kaya akan beta-karoten, serat, dan vitamin, terutama vitamin A.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/buncis.png" class="card-img-top" alt="Buncis">
                        <div class="card-body text-start">
                            <h5 class="card-title">Buncis</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Buncis, adalah sejenis polong-polongan yang dapat dimakan dari berbagai kultivar Phaseolus vulgaris. Buah, biji, dan daunnya dimanfaatkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/petai.png" class="card-img-top" alt="Petai">
                        <div class="card-body text-start">
                            <h5 class="card-title">Petai</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Petai, pete, atau mlanding merupakan pohon tahunan tropika dari suku polong-polongan, anak-suku petai-petaian. Tumbuhan ini tersebar luas di Nusantara bagian barat.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/jengkol.png" class="card-img-top" alt="Jengkol">
                        <div class="card-body text-start">
                            <h5 class="card-title">Jengkol</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Jengkol termasuk suku polong-polongan. Buahnya berupa polong dan bentuknya gepeng berbelit membentuk spiral, berwarna lembayung tua.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/wortel.png" class="card-img-top" alt="Wortel">
                        <div class="card-body text-start">
                            <h5 class="card-title">Wortel</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Wortel adalah sayuran umbi yang terkenal dengan warna oranye cerahnya. Mereka kaya akan beta-karoten, serat, dan vitamin, terutama vitamin A.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/buncis.png" class="card-img-top" alt="Buncis">
                        <div class="card-body text-start">
                            <h5 class="card-title">Buncis</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Buncis, adalah sejenis polong-polongan yang dapat dimakan dari berbagai kultivar Phaseolus vulgaris. Buah, biji, dan daunnya dimanfaatkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/petai.png" class="card-img-top" alt="Petai">
                        <div class="card-body text-start">
                            <h5 class="card-title">Petai</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Petai, pete, atau mlanding merupakan pohon tahunan tropika dari suku polong-polongan, anak-suku petai-petaian. Tumbuhan ini tersebar luas di Nusantara bagian barat.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/jengkol.png" class="card-img-top" alt="Jengkol">
                        <div class="card-body text-start">
                            <h5 class="card-title">Jengkol</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Jengkol termasuk suku polong-polongan. Buahnya berupa polong dan bentuknya gepeng berbelit membentuk spiral, berwarna lembayung tua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Chat Feature -->
        @include('chat')
    </main>
</body>
</html>