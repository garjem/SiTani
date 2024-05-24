<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        

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

        .btn-love {
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px; /* Membuat tombol love berbentuk bulat */
            background-color: #fff;
            border: 1px solid #ccc;
        }

        .btn-love {
            border: none;
            background: none;
        }

        .btn-love img {
            width: 20px;
            height: 20px;
        }

        .btn-love:hover img {
            filter: brightness(0.8); /* Contoh efek hover pada gambar */
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        .input-group .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group .btn-love {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
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
