@extends('layout.main')
@section('Title', 'faq')

@section('css')
<link rel="stylesheet" href="{{ URL('/css/faq.css') }}">
@endsection

@section('Content')
<body>
    @include('layout.navbar')
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
                    <div class="accordion mt-3" id="accordionExample" >
                        @foreach ($datas as $data)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$data->id}}" aria-expanded="true" aria-controls="collapse{{$data->id}}">
                                {{ $data->header }}
                            </button>
                            </h2>
                            <div id="collapse{{$data->id}}" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $data->content }}
                            </div>
                            </div>
                        </div>
                        @endforeach
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
