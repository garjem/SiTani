<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTani - Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 55px; /* Adjust the padding based on the height of your navbar */
            padding-bottom: 30px;
        }
        .container .row {
            margin-top: 70px;
        }
        .custom-image-size {
            width: 546px;
            height: 347px;
        }
        .product-image {
            border-radius: 10px;
            margin-top: 20px;
        }
        .chat-button {
            background-color: #58A399;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 10px;
            margin-left: 20px;
        }
        .chat-button:hover {
            background-color: #469980;
        }
        .btn-outline {
            border-color: #58A399;
            border: 1.5px solid #58A399;
            color: #58A399;
        }
        .btn-outline:hover {
            background-color: #58A399;
            color: white;
        }
        .rating {
            font-size: 1.5em;
            display: inline-block;
            color: #ddd;
        }
        .rating .filled {
            color: #ffc107;
        }
        .favorite-icon {
            font-size: 1.5em;
            color: lightgray;
            cursor: pointer;
            margin-left: 10px;
        }
        .favorite-icon:hover {
            color: #ff6b6b;
        }
        .subtotal-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .quantity-container {
            display: flex;
            align-items: center;
        }
        .favorite-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        .spacing-bottom {
            margin-bottom: 25px;
        }
        .button-container {
            margin-bottom: 10px; /* Sesuaikan jarak yang diinginkan di sini */
        }
        /* Tambahkan kelas baru untuk tombol tambahkan ke keranjang */
        .add-to-cart-button {
            background-color: #58A399;
            color: white;
            border: none;
            padding: 15px 180px; /* Sesuaikan padding untuk membuat tombol lebih lebar */
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            vertical-align: middle;
            white-space: nowrap;
        }
        /* Hover state untuk tombol tambahkan ke keranjang */
        .add-to-cart-button:hover {
            background-color: #469980;
        }
        .buy-now-button {
            background-color: white;
            color: #58A399;
            border: 2px solid #58A399; /* Border sesuai warna tombol chat toko */
            padding: 15px 220px; /* Sesuaikan padding untuk membuat tombol lebih lebar */
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            vertical-align: middle;
            white-space: nowrap;
        }

        /* Hover state untuk tombol beli langsung */
        .buy-now-button:hover {
            background-color: #58A399;
            color: white;
        }
        .review-container {
            margin-top: 50px;
        }
        .review-item {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .review-item .review-user {
            font-weight: bold;
        }
        .review-item .review-comment {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @include('/layout/navbar')
    <main>
        <div class="container">
            <div class="row spacing-bottom">
                <div class="col-md-6">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image custom-image-size">
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between align-items-center spacing-bottom">
                        <h1>{{ $product->name }}</h1>
                        <div class="d-flex align-items-center">
                            <button class="chat-button">Chat toko</button>
                        </div>
                    </div>
                    <p class="spacing-bottom">{{ $product->description }}</p>
                    <div class="d-flex justify-content-between align-items-center spacing-bottom">
                        <h2 class="me-3">Rp{{ number_format($product->price, 0, ',', '.') }}/Kg</h2>
                        <a href="/review/{{ $product->id }}" class="text-decoration-none text-dark">
                            <div class="d-flex align-items-center">
                                <span class="rating">
                                    {!! str_repeat('<span class="filled">★</span>', $product->rating) !!}
                                    {!! str_repeat('★', 5 - $product->rating) !!}
                                </span>
                                <span>({{ $reviews->count() }}) ulasan</span>
                            </div>
                        </a>
                    </div>
                    <div class="my-3 d-flex justify-content-between align-items-center spacing-bottom">
                        <div class="quantity-container">
                            <label for="quantity">Stok: {{ $product->stock }} Kg</label>
                            <div class="d-flex align-items-center ms-2">
                                <button id="decrement" class="btn btn-outline">-</button>
                                <input type="text" id="quantity" value="1" class="form-control mx-2" style="width: 50px; text-align: center;">
                                <button id="increment" class="btn btn-outline">+</button>
                            </div>
                        </div>
                        <span class="favorite-icon">❤</span>
                    </div>
                    <div class="subtotal-container spacing-bottom">
                        <h3>Subtotal:</h3>
                        <h3 id="subtotal">Rp{{ number_format($product->price, 0, ',', '.') }}</h3>
                    </div>
                    <div class="button-container">
                        <button class="add-to-cart-button">Tambahkan ke Keranjang</button>
                    </div>
                    <div class="button-container">
                        <button class="buy-now-button">Beli Langsung</button>
                    </div>
                </div>
            </div>

            <div class="review-container">
                <h2>Ulasan Produk</h2>
                @foreach ($reviews as $review)
                <div class="review-item">
                    <div class="review-user">{{ $review->user->name }}</div>
                    <div class="review-comment">{{ $review->comment }}</div>
                </div>
                @endforeach
            </div>

        </div>

    </main>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const decrementButton = document.getElementById('decrement');
        const incrementButton = document.getElementById('increment');
        const quantityInput = document.getElementById('quantity');
        const subtotalElement = document.getElementById('subtotal');
        const price = {{ $product->price }}; // Mendapatkan harga produk
        const stock = {{ $product->stock }};
        const addToCartButton = document.querySelector('.add-to-cart-button');
        const buyNowButton = document.querySelector('.buy-now-button');

        function updateSubtotal() {
            const quantity = parseInt(quantityInput.value);
            const subtotal = price * quantity;
            subtotalElement.textContent = 'Rp' + subtotal.toLocaleString('id-ID');
        }

        decrementButton.addEventListener('click', function() {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                updateSubtotal();
            }
        });

        incrementButton.addEventListener('click', function() {
            let quantity = parseInt(quantityInput.value);
            if (quantity < stock) {
                quantityInput.value = quantity + 1;
                updateSubtotal();
            }
        });

        quantityInput.addEventListener('input', function() {
            let quantity = parseInt(quantityInput.value);
            if (quantity < 1) {
                quantityInput.value = 1;
            } else if (quantity > stock) {
                quantityInput.value = stock;
            }
            updateSubtotal();
        });

        addToCartButton.addEventListener('click', function() {
            const quantity = parseInt(document.getElementById('quantity').value);
            const productId = {{ $product->id }};
            const userId = {{ Auth::user()->id }}; // Pastikan user sudah login

            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Token CSRF untuk keamanan
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {

                } else {
                    alert('Gagal menambahkan produk ke keranjang.');
                }
            })
            .catch(error => {
                console.error('Error:', error);

            });
        });

        buyNowButton.addEventListener('click', function() {
            const quantity = parseInt(quantityInput.value);
            const productId = {{ $product->id }};
            const userId = {{ Auth::user()->id }}; // Pastikan user sudah login

            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Token CSRF untuk keamanan
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = '/cart?checkout=true'; // Redirect ke halaman cart dengan parameter checkout=true
                } else {
                    alert('Gagal menambahkan produk ke keranjang.');
                }
            })
            .catch(error => {
                console.error('Error:', error);

                window.location.href = '/cart?checkout=true'; // Redirect ke halaman cart dengan parameter checkout=true
            });
        });
    });
    </script>
</body>
</html>
