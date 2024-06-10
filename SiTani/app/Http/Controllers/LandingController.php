<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\Registration;
use App\Models\Workshop;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function editProfile(){
        return view('editProfile');
    }
    public function articles(){
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('articles' , ['articles' => $articles]);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_wa = $request->input('no_wa');
        $user->update();

        return redirect()->route('home')->with('success', 'Profile updated successfully.');
    }

}
