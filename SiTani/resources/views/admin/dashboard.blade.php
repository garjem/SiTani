@extends('layout.main')
@section('Title','dashboard')
@section('Content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Vertikal</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      position: fixed;
      top: 55px; /* Sesuaikan dengan tinggi top bar */
      left: 0;
      height: calc(100% - 55px); /* Menyesuaikan tinggi sidebar */
      width: 250px;
      background-color: #58A399;
      padding-top: 20px; /* Padding di bagian atas */
    }
    .sidebar-nav {
      list-style-type: none;
      padding-left: 0;
    }
    .sidebar-nav li {
      margin-bottom: 10px;
    }
    .sidebar-nav li a {
      color: white;
    }
    .table-container {
      margin-left: 270px; /* Agar tabel berada di sebelah kanan sidebar */
      margin-top: 20px; /* Agar ada jarak antara tabel dan header */
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <ul class="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Artikel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Workshop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mitra</a>
      </li>
    </ul>
  </div>

  <div class="container table-container">
    <div class="row">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Pelanggan</th>
              <th>Email</th>
              <th>Kata Sandi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>azri</td>
              <td>azri@gmail.com</td>
              <td>********</td>
              <td><button class="btn btn-primary">Ubah</button></td>
            </tr>
            <!-- Tambahkan data pelanggan lainnya di sini -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



@endsection