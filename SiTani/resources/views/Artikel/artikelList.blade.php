@extends('layout.main')

@section('Title', 'Artikel')

@section('css')
<style>
    .input-group {
        width: 50%;
    }

    a {
        text-decoration: none;
        color: black;
    }
    .tambahArtikel{
        background-color: #58A399; 
        border-radius: 50%; 
        width: 50px; 
        height: 50px; 
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        color: white;
        position: fixed;
        margin-top: 28rem;
        margin-left: 80rem
    }

    a.btn{
        color: white;
        font-size: 40px;
        font-weight: bold;
        margin-top: -9px;
    }
</style>
@endsection

@section('Content')

    <div class="d-flex justify-content-center">
        <div class="input-group mb-3 mt-5">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-success" type="button" id="button-addon2">
                    <i class="fas fa-search">Search</i>
                </button>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            @for ($i = 0; $i < 13; $i++)
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <a href="#">
                        <div class="card">
                            <img src="{{ URL('assets/sayurCard.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit quos fuga laborum sed neque at inventore? Aut eius possimus voluptatibus.</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
            <div class="tambahArtikel">
                <a href="" class="btn">+</a>
            </div>
        </div>
    </div>
@endsection
