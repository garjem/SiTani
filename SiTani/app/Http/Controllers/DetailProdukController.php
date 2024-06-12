<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id); // Mengambil produk berdasarkan ID atau gagal jika tidak ditemukan
        $reviews = Review::where('product_id', $id)->get(); // Mengambil ulasan berdasarkan ID produk
        return view('detailproduk', compact('product', 'reviews'));
    }
}
