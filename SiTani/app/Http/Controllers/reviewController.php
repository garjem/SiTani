<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function viewReview (){
        return view ('reviewproduct.review');
    }
}
