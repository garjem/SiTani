<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: white;
        }
        .btn {
            background-color: #68a594;
            color: white;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .form-control {
            border-radius: 10px;
            margin-bottom: 10px;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="card text-center">
            <div class="profile-picture">
                <i class="fas fa-user"></i>
            </div>
            <h5 class="card-title">{{ Auth::user() ? Auth::user()->name : 'User' }}</h5>
            <button type="button" class="btn btn-block" data-toggle="modal" data-target="#profileModal">Ubah Profil</button>
            <button type="button" class="btn btn-block" data-toggle="modal" data-target="#logoutModal">Keluar</button>
        </div>
    </div>

    <!-- Profile Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profileModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="profile-picture mb-3">
                        <i class="fas fa-user"></i>
                    </div>
                    <h5 class="card-title mb-3">{{ Auth::user() ? Auth::user()->name : 'User' }}</h5>
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user() ? Auth::user()->name : '' }}" required placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user() ? Auth::user()->email : '' }}" required placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="phone_number" name="no_wa" value="{{ Auth::user() ? Auth::user()->no_wa : '' }}" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="new_password" name="new_password" required placeholder="Kata Sandi Baru">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Konfirmasi Kata Sandi">
                        </div>
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

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>

