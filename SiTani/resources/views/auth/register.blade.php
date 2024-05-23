<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTani - Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            background-color: #F2F2F2;
        }
        .container {
            max-width: 400px;
            margin-top: 50px;
        }
        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .card-body {
            padding-top: 3;
        }
        .btn-block {
            background-color: #58A399;
            border: none;
            color: #fff;
        }
        .btn-block:hover {
            background-color: #45a049;
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
        .invalid-feedback {
            display: block;
        }
        .form-header,
        .form-footer {
            text-align: center;
        }
        .form-header h1,
        .form-header p {
            margin: 0;
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
        <div class="form-header">
            <h1>Selamat Datang!</h1>
            <p>Daftarkan alamat email-mu untuk Bergabung</p>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Konfirmasi Kata Sandi</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <div class="form-group">
                        <label for="no_wa">WhatsApp Number</label>
                        <input id="no_wa" type="text" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa" value="{{ old('no_wa') }}" required>
                        @error('no_wa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-footer mt-3">
            <p>Sudah bergabung? <a href="{{ route('login') }}">Masuk!</a></p>
        </div>
    </div>
</body>
</html>
