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
            background-color: #F8F9FA;
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
            background-color: #68A594;
            color: white;
            border-radius: 10px;
        }
        .form-control {
            border-radius: 10px;
        }
        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #E5E5E5;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="card text-center">
            <div class="profile-picture">
                <i class="fas fa-user"></i>
            </div>
            <h5 class="card-title">{{ Auth::user() ? Auth::user()->name : 'User' }}</h5>
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

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
