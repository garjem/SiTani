@extends('layout.main')
@section('Title', 'faq')

@section('css')
<link rel="stylesheet" href="{{ URL('/css/faq.css') }}">
@endsection

@section('Content')
<body>
    <div class="dropdwon">
        <div class="d-flex justify-content-center">
            <div class="my-xxl-5">
                <h1>Frequently Asked Questions</h1>
                <div class="text-center">
                    <p>Pertanyaan Yang Sering Ditanyakan Oleh User</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mt-lg-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-primary mb-3">+ Tambah</a>
                            <div class="text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Header</th>
                                        <th scope="col">Content</th>
                                        <th scope="col" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                        <tr>
                                        <th scope="row">{{ $data->id }}</th>
                                        <td>{{ $data->header }}</td>
                                        <td>{{ $data->content }}</td>
                                        <td><a href="" class="btn btn-danger btn-sm">Hapus</a></td>
                                        <td><a href="" class="btn btn-info btn-sm">Update</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ URL('/img/faq.png') }}">
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
