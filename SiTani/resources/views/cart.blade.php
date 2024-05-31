<style>
    .card {
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .table thead th {
        border-bottom: none;
    }
    .table tbody td {
        vertical-align: middle;
    }
    .btn-outline-secondary {
        background-color: #ffffff;
        border-color: #0d9488;
        color: #0d9488;
    }
    .btn-outline-secondary:hover {
        background-color: #0d9488;
        color: #ffffff;
    }
    .btn-danger {
        background-color: #ef4444;
        border: none;
    }
    .btn-danger:hover {
        background-color: #dc2626;
    }
    .btn-primary {
        background-color: #0d9488;
        border: none;
    }
    .btn-primary:hover {
        background-color: #0f766e;
    }
    .modal-header, .modal-footer {
        border: none;
    }
    .form-control:focus {
        border-color: #0d9488;
        box-shadow: none;
    }
</style>

<div class="section p-5">
    <div class="card m-5 p-5">
        <h2 class="mb-4">Keranjang</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $tots = 0 ?>
                @foreach ($carts as $cart)
                <tr>
                    <td>{{ $cart->id }}</td>
                    <td>{{ $cart->product->name }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-outline-secondary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editCartItemModal{{ $cart->id }}">-</button>
                            {{ $cart->quantity }}
                            <button class="btn btn-outline-secondary btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#editCartItemModal{{ $cart->id }}">+</button>
                        </div>
                    </td>
                    <td>{{ number_format($cart->product->price * $cart->quantity, 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php $tots += $cart->product->price * $cart->quantity ?>
                