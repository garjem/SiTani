@extends('layout.main')
@section('Title', 'Review')

@section('css')
<link rel="stylesheet" href="{{ URL('/css/faq.css') }}">
<style>
    .star-rating {
        direction: rtl;
        display: inline-block;
        padding: 20px;
    }
    .star-rating input[type="radio"] {
        display: none;
    }
    .star-rating label {
        font-size: 2rem;
        color: #ddd;
        cursor: pointer;
    }
    .star-rating input[type="radio"]:checked ~ label {
        color: #f5b301;
    }
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: #f5b301;
    }
</style>
@endsection

@section('Content')
<body>

<div class="d-flex justify-content-center">
    <div class="my-xxl-5">
        <h1>Review</h1>
    </div>
</div>
<!-- Start form -->
<div class="container">
    <div class="card mt-2">
        <div class="card-header">
            <h2>REVIEW</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('review.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Rating:</label>
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" required><label for="star5">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4"><label for="star4">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3"><label for="star3">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2"><label for="star2">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1"><label for="star1">&#9733;</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="????" id="description" placeholder="Masukan Deskripsi">
                </div>
                
            </form>
        </div>
        <div class="card-footer ">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
<!-- end form -->

</body>
@endsection

     <!-- end form -->

    <!-- <form method="POST" action="{{ route('review') }}" enctype="multipart/form-data">
        @csrF

        <label for="quality">Kualitas Sayuran:</label><br>
        <input type="number" id="quality" name="quality" min="1" max="5" required><br><br>

        <label for="service">Pelayanan Penjual</label><br>
        <input type="number" id="service" name="service" min="1" max="5" required><br><br>

        <label for="comments">Deskripsi</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
</form> -->