<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTani - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 900px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .image-section {
            background-image: url('https://example.com/your-image.jpg'); /* Ganti URL dengan URL gambar Anda */
            background-size: cover;
            background-position: center;
        }
        .form-section {
            padding: 50px;
        }
        .btn-block {
            background-color: #5bc0be;
            color: white;
        }
        .btn-block:hover {
            background-color: #3aafa9;
        }
        .text-center {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container row no-gutters">
        <div class="col-md-6 image-section"></div>
        <div class="col-md-6 form-section">
            <h2 class="mb-4">Selamat Datang Kembali!</h2>
            <p>Masukkan alamat email dan password!</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-block">Masuk</button>
                </div>
            </form>
            <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar!</a></p>
        </div>
    </div>
</body>
</html>
