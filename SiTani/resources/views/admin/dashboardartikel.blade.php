@extends('admin.mainadmin')
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
    
  </style>
</head>
<body>

  <div class="container table-container justify content-center">
    <div class="row">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Judul</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($articles as $article)
              <tr>
                <td> {{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td style="text-align: justify; letter-spacing: 1px;">{{$article->content}}</td>
                <td><button class="btn btn-primary">Ubah</button>
                <td><button class="btn btn-danger">Hapus</button></td>
              </tr>
            @endforeach
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