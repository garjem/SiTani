<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1 text-white" href="#">SiTani</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link" href="/workshop" data-page="workshop">Workshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Artikel" data-page="artikel">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/belanja" data-page="belanja">Belanja</a>
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
            <img src="{{ asset('/assets/keranjang.png') }}" width="30" height="30">
        </a>
        <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            <img src="{{ asset('/assets/profile.png') }}" width="30" height="30">
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
    .profile-picture {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: #e5e5e5;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 15px;
    }

    .profile-picture i {
        font-size: 50px;
        color: #6c757d;
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .modal-content {
        border-radius: 15px;
    }

    .modal-body a {
        color: #000;
        text-decoration: none;
        display: block;
        padding: 10px 0;
        border-bottom: 1px solid #e5e5e5;
    }

    .modal-body a:last-child {
        border-bottom: none;
    }

    .modal-body a:hover {
        background-color: #f0f0f0;
    }

    .modal-body a.logout {
        color: red;
    }

    /* New styles for profile section */
    .profile-header {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .profile-header .modal-title {
        margin-top: 10px; /* Adjust this value as needed */
    }
</style>

<!-- modal 1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header profile-header">
        <div class="profile-picture">
          <i class="fas fa-user"></i>
        </div>
        <h5 class="modal-title fs-5" id="exampleModalLabel1">{{ Auth::user() ? Auth::user()->name : 'User' }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column align-items-center">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#profileModal">Ubah Profil</button>
          <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#settingsModal">Pengaturan</button>
          <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#faqModal">Frequently Asked Question</button>
          <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#partnerModal">Pengajuan Mitra</button>
          <button type="button" class="btn btn-block" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div class="profile-picture mb-3">
          <i class="fas fa-user"></i>
        </div>
        <h5 class="card-title mb-3">{{ Auth::user() ? Auth::user()->name : 'User' }}</h5>
        <br>
        <form method="POST" action="{{ route('profile.update') }}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user() ? Auth::user()->name : '' }}" required placeholder="Name">
          </div>
          <br>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user() ? Auth::user()->email : '' }}" required placeholder="Email address">
          </div>
          <br>
          <div class="form-group">
            <input type="tel" class="form-control" id="phone_number" name="no_wa" value="{{ Auth::user() ? Auth::user()->no_wa : '' }}" placeholder="Phone Number">
          </div>
          <br>
          <div class="form-group">
            <input type="password" class="form-control" id="new_password" name="new_password" required placeholder="Kata Sandi Baru">
          </div>
          <br>
          <div class="form-group">
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Konfirmasi Kata Sandi">
          </div>
          <br>
          <button type="submit" class="btn btn-block">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Logout content here -->
        Anda yakin ingin keluar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="{{ route('logout') }}" class="btn btn-danger logout"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
          Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (Include this if not already included) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

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
