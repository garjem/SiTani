<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Product;
use App\Models\Workshop;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all();
        return view('\admin\dashboard',compact('users'));
    }
    public function index1(){
        $articles = Article::all();
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
        $workshops = Workshop::all();
        return view('\admin\dashboardworkshop',compact('workshops'));
    }
}
