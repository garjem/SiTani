<?php

namespace App\Http\Controllers;

use App\Models\reviewsitani;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function viewReview (){
        $data = reviewsitani::all();
        return view ('reviewproduct.review', compact('data'));
    }

    public function reviewForm (){
        return view ('reviewproduct.reviewform');
    }

    Public function createreview (Request $request)
    {
        reviewsitani::create ([
            'Rating' => $request->rating,
            'Deskripsi'=> $request->deskripsi,
        ]);
        return back();
    }
}


