@extends('admin.mainadmin')
@section('Title', 'faq Admin')

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
                        <button type="button"  class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Tambah
                                </button>
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
                                        <td><a href="{{ URL('deleteFaq/'.$data->id) }}" class="btn btn-danger btn-sm">Hapus</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ URL('/img/faq.png') }}" class="btn-faq">
                </div>

                                </div> <!-- awal Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">FORM FAQ</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method= 'POST' action="{{ route('inputFaq') }}">
                                    @csrf 
                                    <div class="modal-body">
                                    
                                        <div class="mb-3">
                                            <label  class="form-label">Pertanyaan</label>
                                            <input type="teks" class="form-control" name ="header" id="" placeholder="Masukan Pertanyaan">
                                            </div>

                                            <div class="mb-3">
                                            <label class="form-label">Jawaban</label>
                                            <textarea class="form-control" name=content id="" rows="3" placeholder="Masukan Jawaban"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" name="bsimpan" >Simpan </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                            </div>
                            <!-- AkhirModal -->
            </div>
        </div>
    </div>
</body>
@endsection
