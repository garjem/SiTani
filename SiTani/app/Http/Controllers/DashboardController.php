<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all();
        return view('\admin\dashboard',compact('users'));
    }
    public function index1(){
        $articles = User::all();
        return view('\admin\dashboardartikel',compact('articles'));
    }
    public function index2(){
        $users = User::all();
        return view('\admin\dashboarmitra',compact('mitras'));
    }
    public function index3(){
        $products = Product::all();
        return view('\admin\dashboardproduk',compact('products'));
    }
    public function index4(){
        $users = User::all();
        return view('\admin\dashboarworkshop',compact('workshops'));
    }
}
