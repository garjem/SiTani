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
    </style>
</head>

<body>
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
                <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <img src="profile.png" width="40" height="40">
                </a>
            </div>
    </nav>

<!-- modal 1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel1">Profil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column align-items-center">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-light" type="button">Ubah Profil</button>
          <button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Pengaturan</button>
          <button class="btn btn-light" type="button">FAQ</button>
          <button class="btn btn-light" type="button">Pengajuan Mitra</button>
          <button class="btn btn-danger" type="button">Keluar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel2">Pengaturan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column align-items-center">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-light" type="button">Cookies and Policy</button>
          <button class="btn btn-light" type="button">Privasi dan Keamanan</button>
          <button class="btn btn-light" type="button">Tema dan Tampilan</button>
          <button class="btn btn-light" type="button">Bahasa</button>
          <button class="btn btn-danger" type="button">Hapus Akun</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>