<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1 text-white" href="#">SiTani</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-page="workshop">Workshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-page="belanja">Belanja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-page="artikel">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart" data-page="cart">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/order/list" data-page="orderList">Pesanan</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand" href="#">
            <img src="keranjang.png" width="30" height="30">
        </a>
        <a class="navbar-brand" href="//editProfile" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            <img src="profile.png" width="30" height="30">
        </a>
    </div>
</nav>


<style>
    .navbar.bg-body-tertiary {
        background-color: #58A399 !important;
    }

    .navbar-nav .nav-link {
        color: white;
    }

    .nav-underline .nav-link.active {
        border-bottom: 2px solid white; /* Warna garis bawah */
    }
</style>

<!-- modal 1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel1" >Profil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column align-items-center">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-light" type="button" href="/editProfile">Ubah Profil</button>
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

<!-- Bootstrap JS (Include this if not already included) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                navLinks.forEach(function (navLink) {
                    navLink.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    });
</script>