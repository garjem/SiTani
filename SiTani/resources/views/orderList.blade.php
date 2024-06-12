
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .modal-header, .modal-footer {
            background-color: #f8f9fa;
        }
        .btn-custom {
            background-color: #ff4081;
            color: white;
        }
        .btn-custom-secondary {
            background-color: #757575;
            color: white;
        }
    </style>
</head>
<body>
    @extends('layouts.app')
    @include('/layout/navbar')
    @section('content')
        <div class="section p-5">
            <div class="card m-5 p-5">
                <h2 class="mb-4">Order List</h2> <!-- Added heading -->
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Bukti Transfer</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->bukti_trf }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ number_format($order->total, 0, ',', '.') }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal{{ $order->id }}">
                                    View Items
                                </button>
                                @php
                                    $review = $order->reviews->first();
                                @endphp
                                @if($review && $review->status == 'yes')
                                    <button type="button" class="btn btn-secondary">
                                        <a href="{{ route('order.list') }}" style="color:white">Review</a>
                                    </button>
                                @else
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $review ? $review->id : 'new' }}">
                                        Review
                                    </button>
                                @endif
                            </td>
                        </tr>

                        <!-- Modal Edit Review -->
                        @if($review)
                            <div class="modal fade" id="editModal{{ $review->id }}" tabindex="-1" aria-labelledby="editModal{{ $review->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModal{{ $review->id }}Label">Add Review</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('order.addReview', $review->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="review" class="form-label">Review</label>
                                                    <input type="text" class="form-control" id="review" name="review" value="{{ $review->comment }}">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="modal fade" id="editModalnew" tabindex="-1" aria-labelledby="editModalnewLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalnewLabel">Add Review</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('order.addReview', ['id' => 'new']) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="review" class="form-label">Review</label>
                                                    <input type="text" class="form-control" id="review" name="review">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </tbody>
                </table>

                @foreach($orders as $order)
                <!-- Modal View Order Items -->
                <div class="modal fade" id="orderModal{{ $order->id }}" tabindex="-1" aria-labelledby="orderModalLabel{{ $order->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderModalLabel{{ $order->id }}">Order Items (Order ID: {{ $order->id }})</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->items as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->product->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ number_format($item->product->price, 0, ',', '.') }}</td>
                                            <td>{{ number_format($item->quantity * $item->product->price, 0, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endsection

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
