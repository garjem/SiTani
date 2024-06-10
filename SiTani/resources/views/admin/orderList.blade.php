@extends('admin.layout')

@section('content')
    <div class="row m-4">
        <div class="card p-3">
            <h2 class="m-3">Order List</h2>

            <table class="table" id="table-ow">
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
