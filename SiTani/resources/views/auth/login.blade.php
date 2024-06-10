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

        .navbar-brand img {
            height: 30px; /* Set a default height */
            width: auto; /* Maintain aspect ratio */
        }

        body {
            background-color: #FFFFFF;
            margin: 0;
        }

        .full-height-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 56px); /* Height of the navbar */
        }

        .container {
            max-width: 1200px;
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
        
        .form-footer {
            text-align: center;
        }

        .spacer {
            width: 20px;
        }

        .form-footer a.login-link {
            color: black; /* Change the link color to black */
            font-weight: bold; /* Make the link text bold */
            text-decoration: none; /* Remove underline */
        }
        
        .form-footer a.login-link:hover {
            text-decoration: underline; /* Add underline on hover */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">
                    <img src="assets/SiTani.png" alt="SiTani" class="navbar-logo"> <!-- Ganti '/path/to/your/image.png' dengan path gambar Anda -->
                </a>
            </div>
        </nav>
    </header>
    <div class="full-height-container">
        <div class="container">
            <div class="image-section"></div>
            <div class="spacer"></div> <!-- Spacer untuk memberikan jarak -->
            <div class="form-section">
                <h1 class="mb-4">Selamat Datang Kembali!</h1>
                <p>Masukkan alamat email dan password!</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Ingat Saya</label>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block">Masuk</button>
                    </div>
                </form>
                <div class="form-footer mt-3">
                    <p>Belum punya akun? <a href="{{ route('register') }}" class="login-link">Daftar!</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
