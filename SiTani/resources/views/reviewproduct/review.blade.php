@extends('layout.main')
@section('Title', 'REVIEW')

@section('Content')
<style>
    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f5f5f5; /* Background color to match the design */
    }

    .card {
        width: 80rem;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 2rem;
    }

    #childCard {
        margin-top: 0.5rem; 
        text-align: left;
        padding: 1rem;
        border: 1px solid #ddd;
        border-radius: 10px;
    }

    .rating {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .rating input {
        display: none;
    }

    .rating label {
        font-size: 2em;
        color: #ddd;
        cursor: pointer;
        transition: color 0.2s;
    }

    .rating input:checked ~ label {
        color: #ff4500;
    }

    .rating input:hover ~ label,
    .rating input:checked ~ label:hover {
        color: #ff4500;
    }

    .rating input:hover ~ label ~ label {
        color: #ddd;
    }

    .user-review {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .user-review img {
        border-radius: 50%;
        width: 3rem;
        height: 3rem;
        margin-right: 1rem;
    }

    .user-review .name {
        font-weight: bold;
    }

    .user-review .comment {
        margin-top: 0.5rem;
        font-size: 0.9rem;
    }
    .star{
        color:#ffb254
    }
</style>

<div class="wrapper">
    <div class="card">
        @foreach($data as $d)
        <div class="card-body">
            <div class="user-review" id="childCard">
                <!-- <img src="{{ URL('/path/to/profile-image.png') }}" alt="User profile picture"> -->
                <div>
                    <!-- <div class="name">aming</div> -->
                    <div class="rating">
                        @for($bintang = 0; $bintang<$d['Rating']; $bintang++)
                        <p for="star5" class="star">★</p>
                        @endfor
                        
                    </div>
                    <div class="comment">{{ $d['Deskripsi']}}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
