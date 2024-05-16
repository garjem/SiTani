<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar dengan Bootstrap</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* CSS untuk mengatur logo */
    .navbar-brand img {
      height: 40px; /* Sesuaikan tinggi logo dengan kebutuhan */
    }
    .navbar-green {
        background:#58A399;
    }
    .nav-link {
        color:white;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-green">
  <a class="navbar-brand" href="#">
    <img src="{{ URL('img/SiTani.png') }}" alt="SiTani"> <!-- Ganti logo_perusahaan.png dengan nama file logo perusahaan Anda -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto nav-underline">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboardadmin">User</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/dashboardproduk">Produk</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/dashboardworkshop">Workshop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboardartikel">Artikel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboardmitra">Mitra</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropstart">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profil</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ubah Profil</a></li>
            <li><a class="dropdown-item" href="#">FAQ</a></li>
            <li><a class="dropdown-item" href="#">Pengajuan Mitra</a></li>
            <li><a class="dropdown-item text-danger" href="#">Keluar</a></li>
          </ul>
      </li>
    </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
