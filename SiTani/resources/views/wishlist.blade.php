@extends('layout.main')
@section('Title','dashboard')
@section('Content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wishlist</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .search-form {
            position: relative;
            margin-top: 10px; /* Jarak ke bawah */
        }

    .search-form .form-control {
            padding-left: 40px; /* Sesuaikan dengan lebar gambar */
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
  </style>
</head>
<body>
    @include('/layout/navbar')
    <form class="d-flex w-50 mx-auto mb-5 search-form" role="search">
            <div class="input-group rounded-pill">
                <input class="form-control me-2" type="search" placeholder="Cari Produk..." aria-label="Search">
                <img src="search.png" alt="Search Icon">
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
                        <img src="/assets/jengkol.png" class="card-img-top" alt="Jengkol">
                        <div class="card-body text-start">
                            <h5 class="card-title">Jengkol</h5>
                            <p class="card-text text-justify" style="text-align: justify; letter-spacing: 1px;">Jengkol termasuk suku polong-polongan. Buahnya berupa polong dan bentuknya gepeng berbelit membentuk spiral, berwarna lembayung tua.</p>
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

            </div>    
    </div>
    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection