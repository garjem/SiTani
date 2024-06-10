@extends('layouts.app')
fds
@section('content')
@include('/layout/navbar')
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
                            <button class="btn btn-outline-secondary btn-sm me-2" data-toggle="modal" data-target="#editCartItemModal{{ $cart->id }}">-</button>
                            {{ $cart->quantity }}
                            <button class="btn btn-outline-secondary btn-sm ms-2" data-toggle="modal" data-target="#editCartItemModal{{ $cart->id }}">+</button>
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
                
                <!-- Modal -->
                <div class="modal fade" id="editCartItemModal{{ $cart->id }}" tabindex="-1" aria-labelledby="editCartItemModal{{ $cart->id }}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCartItemModal{{ $cart->id }}Label">Edit Quantity</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="{{ route('cart.update', $cart->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $cart->quantity }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach
                <tr>
                    <td colspan="3"></td>
                    <td><strong>Total:</strong> Rp{{ number_format($tots, 0, ',', '.') }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkoutModal">
                            Checkout
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-white text-dark">
                <h5 class="modal-title" id="checkoutModalLabel">Upload Bukti Transfer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('order') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body bg-light">
                    <div class="mb-3">
                        <label for="buktiTrf" class="form-label">Upload File</label>
                        <input class="form-control" name="bukti_trf" type="file" id="buktiTrf" aria-describedby="fileHelp">
                        <div id="fileHelp" class="form-text">Upload bukti transfer dalam format JPG, JPEG, atau PNG dengan ukuran maksimal 5MB.</div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
