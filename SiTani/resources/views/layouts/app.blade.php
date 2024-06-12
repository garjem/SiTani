<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .table thead th {
            border-bottom: none;
        }
        .table tbody td {
            vertical-align: middle;
        }
        .btn-outline-secondary {
            background-color: #ffffff;
            border-color: #0d9488;
            color: #0d9488;
        }
        .btn-outline-secondary:hover {
            background-color: #0d9488;
            color: #ffffff;
        }
        .btn-danger {
            background-color: #ef4444;
            border: none;
        }
        .btn-danger:hover {
            background-color: #dc2626;
        }
        .btn-primary {
            background-color: #0d9488;
            border: none;
        }
        .modal-header, .modal-footer {
            border: none;
            background-color: #f8f9fa;
        }
        .form-control:focus {
            border-color: #0d9488;
            box-shadow: none;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>
