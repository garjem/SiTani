@extends('layout.main')
@section('Title', 'Ulasan Produk')

@section('Content')
<style>
    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f5f5f5;
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
</style>

<div class="wrapper">
    <div class="card">
        <div class="card-body">
            <h2>Ulasan untuk {{ $product->name }}</h2>
            @foreach ($reviews as $review)
            <div class="user-review" id="childCard">
                <img src="{{ asset('path/to/profile-image.png') }}" alt="User profile picture">
                <div>
                    <div class="name">{{ $review->user->name }}</div>
                    <div class="rating">
                        @for ($i = 1; $i <= 5; $i++)
                            <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" {{ $review->rating == $i ? 'checked' : '' }}>
                            <label for="star{{ $i }}">★</label>
                        @endfor
                    </div>
                    <div class="comment">{{ $review->comment }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
