<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('/Artikel/artikelList', compact('articles'));
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('/Artikel/articlesdetail', compact('article'));
    }

}

// public function index ()
//     {
//         return view('Artikel.artikelList');
//     }s