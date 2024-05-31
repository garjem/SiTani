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