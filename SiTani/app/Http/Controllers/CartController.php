<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::find($request->product_id);
        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->user_id = Auth::id();
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    public function index(){
        $carts = Cart::where('user_id' , Auth::id())->get();
        return view('cart' , compact('carts'));
    }
