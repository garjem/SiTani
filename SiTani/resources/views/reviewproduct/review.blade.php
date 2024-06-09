@extends('layout.main')
@section('Title', 'faq')

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
</style>

<div class="wrapper">
    <div class="card">
        <div class="card-body">
            <div class="user-review" id="childCard">
                <img src="{{ URL('/path/to/profile-image.png') }}" alt="User profile picture">
                <div>
                    <div class="name">aming</div>
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5" checked>
                        <label for="star5">★</label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4">★</label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3">★</label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2">★</label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1">★</label>
                    </div>
                    <div class="comment">Enak</div>
                </div>
            </div>

            <div class="user-review" id="childCard">
                <img src="{{ URL('/path/to/profile-image.png') }}" alt="User profile picture">
                <div>
                    <div class="name">aming</div>
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5" checked>
                        <label for="star5">★</label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4">★</label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3">★</label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2">★</label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1">★</label>
                    </div>
                    <div class="comment">Bagus wortelnya</div>
                </div>
            </div>

            <div class="user-review" id="childCard">
                <img src="{{ URL('/path/to/profile-image.png') }}" alt="User profile picture">
                <div>
                    <div class="name">aming</div>
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5" checked>
                        <label for="star5">★</label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4">★</label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3">★</label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2">★</label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1">★</label>
                    </div>
                    <div class="comment">Bagus wortelnya</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
