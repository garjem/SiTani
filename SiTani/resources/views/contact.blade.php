<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-whatsapp {
            background-color: #58A399;
            color: white;
            border: none;
            padding: 12px 20px; /* Tambahkan lebih banyak padding */
            text-align: center;
            font-size: 18px; /* Perbesar ukuran font */
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 10px; /* Atur border-radius menjadi 10px */
            width: 100%; /* Set lebar tombol */
            max-width: 400px; /* Set lebar maksimal tombol */
            text-decoration: none; /* Hapus garis bawah pada teks */
        }

        .btn-whatsapp:hover {
            background-color: #58A399;
            color: white; /* Pastikan teks tetap berwarna putih saat di-hover */
        }

        body {
            padding-top: 50px; /* Adjust the padding based on the height of your navbar */
        }
    </style>
</head>
<body>
    @include('/layout/navbar')
    <main>
        <div class="container mt-5 text-center">
            <h1><strong>Pengajuan lebih lanjut</strong></h1>
            <div class="d-flex justify-content-center">
                <a href="https://wa.me/6281287157805" class="btn-whatsapp mt-3">Whatsapp</a>
            </div>
            <h1 class="mt-5"><strong>Informasi lebih lanjut</strong></h1>
            <div class="d-flex justify-content-center">
                <a href="https://wa.me/6281287157805" class="btn-whatsapp mt-3">Whatsapp</a>
            </div>
            <h1 class="mt-5"><strong>Konsultasi lebih lanjut</strong></h1>
            <div class="d-flex justify-content-center">
                <a href="https://wa.me/6281287157805" class="btn-whatsapp mt-3">Whatsapp</a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
