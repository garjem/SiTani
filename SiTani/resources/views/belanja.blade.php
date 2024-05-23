<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar.bg-body-tertiary {
            background-color: #58A399 !important;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .search-form {
            position: relative;
            margin-top: 10px; /* Jarak ke bawah */
        }

        .search-form .form-control {
            padding-left: 40px; /* Sesuaikan dengan lebar gambar */
            border-radius: 20px; /* Membuat outline berbentuk bulat */
        }

        .search-form img {
            position: absolute;
            left: 10px; /* Jarak gambar dari kiri */
            top: 50%;
            transform: translateY(-50%);
            width: 20px; /* Sesuaikan dengan lebar gambar */
        }
        .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        }

        .card-img-top {
            width: 90%;
            height: 180px;
            object-fit: cover;
            margin-top: 10px; /* Ubah nilai sesuai dengan jarak yang diinginkan */
        }

        /* Add some margin between the search input and the love button */
        .search-form .form-control + .btn-love {
          margin-left: -35px;
        }

        /* Style the love button */
        .btn-love {
          padding: 0.375rem 0.75rem;
          font-size: 1rem;
          line-height: 1.5;
          border-radius: 0.25rem;
          background-color: #fff;
          border: 1px solid #ccc;
        }

        /* Change the color of the heart icon inside the love button */
        .btn-love {
        border: none;
        background: none;
        }
        .btn-love:hover {
        filter: none;
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
                    <img src="keranjang.png" width="40" height="40">
                </a>
                <a class="navbar-brand" href="#">
                    <img src="profile.png" width="40" height="40">
                </a>
            </div>
        </nav>
    </header>
    <main>
        <form class="d-flex w-50 mx-auto mb-5 search-form" role="search">
            <div class="input-group rounded-pill">
                <input class="form-control me-2" type="search" placeholder="Cari Belanja..." aria-label="Search">
                <img src="search.png" alt="Search Icon">
                <button type="button" class="btn btn-light btn-love">
                  <img src="heart.png" id="love-image" alt="Love Icon">
                </button>
                <!-- <button class="btn btn-outline-light" type="submit">Cari</button> -->
            </div>
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
    </main>
</body>
</html>