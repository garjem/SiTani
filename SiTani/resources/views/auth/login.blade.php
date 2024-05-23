<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sign In | SiTani</title>
    <style>
        :root {
            --input-bg-color: #E0E0E0; /* Customizable background color */
            --input-height: 70px; /* Customizable input height */
            --input-font-size: 16px; /* Customizable font size */
            --label-top-position: 10px; /* Customizable label top position */
            --input-border-radius: 10px; /* Customizable border radius */
        }

        .navbar.bg-body-tertiary {
            background-color: #58A399 !important;
        }

        body {
            background-color: #f0f4f7;
            display: flex;
            height: 100vh;
            flex-direction: column;
        }
        .container {
            max-width: 900px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
        }
        .image-section {
            flex: 1;
            background-image: url('/assets/sayuran.png'); /* Ganti 'your-image.jpg' dengan nama file gambar Anda */
            background-size: cover;
            background-position: center;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        .form-section {
            flex: 1;
            padding: 50px;
        }
        .btn-block {
            background-color: #58A399;
            color: white;
            color: #fff;
        }
        .btn-block:hover {
            background-color: #3aafa9;
        }
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .form-control {
            padding-top: calc(var(--label-top-position) + 20px);
            height: var(--input-height); /* Use the CSS variable for height */
            font-size: var(--input-font-size); /* Use the CSS variable for font size */
            background-color: var(--input-bg-color); /* Use the CSS variable for background color */
            border: 1px solid #ccc; /* Optional: Add a border for better visibility */
            border-radius: var(--input-border-radius); /* Use the CSS variable for border radius */
        }
        .form-group label {
            position: absolute;
            top: var(--label-top-position); /* Use the CSS variable for top position */
            left: 15px;
            color: #999;
            font-size: 14px;
            transition: all 0.2s ease-in-out;
            pointer-events: none;
        }
        .text-center {
            margin-top: 10px;
        }
        .spacer {
            width: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid justify-content-center">
                <span class="navbar-brand text-white " href="#">Sitani</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="image-section"></div>
        <div class="spacer"></div> <!-- Spacer untuk memberikan jarak -->
        <div class="form-section">
            <h1 class="mb-4">Selamat Datang Kembali!</h2>
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