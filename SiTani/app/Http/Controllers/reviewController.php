<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function show($id)
    {
    $product = Product::findOrFail($id);
    $reviews = Review::where('product_id', $id)->get();

    return view('/reviewproduct/review', compact('product', 'reviews'));
    }

}
