<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BelanjaController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('belanja', compact('products'));
    }
}




// {
//     public function index(){
//         return view('belanja');
//     }
// }