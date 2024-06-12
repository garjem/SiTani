<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshopp Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            padding-top: 70px; /* Adjust the padding based on the height of your navbar */
            padding-bottom: 30px
        }
        .container {
            margin-top: 50px;
        }
        .workshopp-image {
            width: 100%;
            height: auto;
            max-height: 500px; /* Default max height */
        }
        .info-box, .workshopp-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #dcdcdc; /* Add stroke around the info box and workshopp content */
        }
        .register-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .register-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    @include('/layout/navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 workshopp-content">
                <img src="{{ $workshopp->image }}" alt="workshopp Image" class="workshopp-image">
                <h3>{{ $workshopp->title }}</h3>
                <p>{{ $workshopp->description }}</p>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <h4>workshopp Info</h4>
                    <p><strong>{{ \Carbon\Carbon::parse($workshopp->start_time)->isoFormat('dddd, D MMMM YYYY') }}</strong></p>
                    <p>{{ \Carbon\Carbon::parse($workshopp->start_time)->format('H.i') }}-{{ \Carbon\Carbon::parse($workshopp->end_time)->format('H.i') }}</p>
                    <p>Gedung Serba Guna Bandung <a href="#">Maps</a></p>
                    <p>Kapasitas Tersisa: {{ $workshopp->capacity }}</p>
                    <a href="https://wa.me/6281287157805" class="register-btn">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
