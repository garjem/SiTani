<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailProdukController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('detailproduk', compact('products'));
    }
}
