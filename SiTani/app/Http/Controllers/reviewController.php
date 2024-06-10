<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function viewReview (){
        return view ('reviewproduct.review');
    }

    Public function create (Request $request)
    {
        review::create ([
            'header' => $request->header,
            'content'=> $request->content,
        ]);
        return back();
    }

    public function input() {
        return view ('review/input');
    }
}


