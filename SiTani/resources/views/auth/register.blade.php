<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="logo.png">
    <title>
        Sign Up | SiTani
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card-container {
            display: flex;
            max-width: 1000px; /* Increased max-width */
            width: 100%;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .left-card {
            flex: 1;
            background-color: #6c63ff;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-card {
            flex: 1;
            padding: 20px;
        }

        .right-card .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .right-card .card-header h4 {
            margin-bottom: 20px;
            font-weight: 700;
        }

        .right-card .form-group {
            margin-bottom: 20px;
        }

        .right-card .form-group label {
            font-size: 14px;
            color: #333;
        }

        .right-card .form-group input {
            padding: 10px;
            border-radius: 5px;
        }

        .right-card .btn {
            background-color: #58A399;
            color: #fff;
            padding: 15px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .right-card .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card-container">
            <div class="left-card">
                <img src="images/bayam.jpg" alt="Banner Image" style="max-width: 100%; height:100% ;">
            </div>
            <div class="right-card">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Sign Up</h4>
                        <p>Enter your details to register</p>
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
                    </div>
                    <div class="card-footer text-center">
                        <p>Already have an account? <a href="{{ route('login') }}" class="text-primary">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>