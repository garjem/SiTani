@extends('admin.mainadmin')
@section('Title','dashboard')
@section('Content')
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
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->bukti_trf }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->total }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal{{ $order->id }}">
                                View Items
                            </button>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

            @foreach($orders as $order)

                <div class="modal fade" id="orderModal{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Items (Order ID: {{ $order->id }})</h5>
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
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->product->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->product->price }}</td>
                                            <td>{{ $item->quantity * $item->product->price }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('orders.cancel', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                </form>

                                <form action="{{ route('orders.send', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success">Kirim</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    @endsection

    @push('script')
    <script>
        let table = new DataTable('#table-ow', {
            // options
        });

    </script>
    @endpush

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
