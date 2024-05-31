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

    public function updateQuantity(Request $request, $id)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|numeric|min:1'
        ]);

        $cart = Cart::find($id);
        $cart->quantity = $validatedData['quantity'];
        $cart->save();

        return redirect()->back()->with('success', 'Item quantity updated!');
    }
    
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->back()->with('success', 'Item removed from cart!');
    }

    public function order(Request $request){
        $cart = Cart::where('user_id' , Auth::id())->get();
        $total = 0 ;
        foreach ($cart as $x){
          $total +=  $x->product->price * $x->quantity;
        }