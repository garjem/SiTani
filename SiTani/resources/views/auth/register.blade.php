<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTani - Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
        }
        .card-header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            font-size: 24px;
        }
        .btn-block {
            background-color: #4CAF50;
            border: none;
        }
        .btn-block:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Selamat Datang!
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
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
                    <div class="form-check form-check-info text-start ps-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to the <a href="#" class="text-dark font-weight-bolder">Terms and Conditions</a>
                        </label>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block">Sign Up</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}">Sudah bergabung? Masuk!</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
