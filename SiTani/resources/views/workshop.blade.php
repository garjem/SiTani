<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTani - Workshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .search-container {
            position: relative;
            width: 100%;
        }

        .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px; /* Sesuaikan ukuran sesuai keinginan Anda */
            height: 20px; /* Sesuaikan ukuran sesuai keinginan Anda */
        }

        .form-control {
            padding-left: 40px; /* Sesuaikan dengan lebar gambar + margin */
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .btn {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-left: 10px;
        }

        .btn-heart img {
            width: 24px;
            height: 24px;
        }
        .btn-heart {
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .container .row {
            margin-top: 20px;
        }

        .card {
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px; 
            min-height: 350px; /* Adjust the minimum height as needed */
            display: flex;
            flex-direction: column;
        }

        .card-body {
            flex-grow: 1;
        }

        .card-text {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Number of lines before truncating */
            -webkit-box-orient: vertical;
        }

        .show-more, .show-less {
            color: black; /* Change the color to black */
            cursor: pointer;
            font-weight: bold;
        }

        .full-text {
            display: none;
        }

        body {
            padding-top: 55px; /* Adjust the padding based on the height of your navbar */
            padding-bottom: 30px
        }

        a.card-link {
            display: block;
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    @include('/layout/navbar')
    <main>
        <form class="d-flex w-50 mx-auto mb-0 mt-4 search-form" role="search">
            <div class="search-container">
                <img src="search.png" alt="Search Icon" class="search-icon">
                <input class="form-control me-2" type="search" placeholder="Cari Belanja..." aria-label="Search">
            </div>
            <button class="btn btn-outline-success me-2" type="submit">Search</button>
            <button class="btn-heart" type="button">
                <img src="heart.png" alt="Heart Icon">
            </button>
        </form>
    
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                @foreach ($workshops as $workshop)
                <div class="col">
                    <div class="card h-100">
                        <a href="{{ url('/detailworkshop', $workshop->id) }}" class="card-link">
                            <img src="{{ asset($workshop->image) }}" class="card-img-top" alt="{{ $workshop->title }}">
                        </a>
                        <div class="card-body text-start">
                            <h5 class="card-title">{{ $workshop->title }}</h5>
                            <p class="card-text">
                                {{ Str::limit($workshop->description, 80, '...') }}
                                @if (strlen($workshop->description) > 100)
                                    <span class="show-more">more</span>
                                @endif
                            </p>
                            <p class="full-text" style="display: none;">{{ $workshop->description }} <span class="show-less">less</span></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Include Chat Feature -->
        @include('chat')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QFTKfZBRQbs0I4VHyE2m2qS3Y3F7k4+i/hriC8zh4Jxmn+fU9peYf9z+voRx3y6s" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const showMoreLinks = document.querySelectorAll(".show-more");
            const showLessLinks = document.querySelectorAll(".show-less");

            showMoreLinks.forEach(function(link) {
                link.addEventListener("click", function(event) {
                    event.stopPropagation();
                    const cardBody = link.closest('.card-body');
                    const fullText = cardBody.querySelector('.full-text');
                    const cardText = cardBody.querySelector('.card-text');

                    cardText.style.display = "none";
                    fullText.style.display = "block";
                });
            });

            showLessLinks.forEach(function(link) {
                link.addEventListener("click", function(event) {
                    event.stopPropagation();
                    const cardBody = link.closest('.card-body');
                    const fullText = cardBody.querySelector('.full-text');
                    const cardText = cardBody.querySelector('.card-text');

                    fullText.style.display = "none";
                    cardText.style.display = "block";
                });
            });
        });
    </script>
</body>
</html>
