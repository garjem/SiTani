<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::all();
        return view('workshop', compact('workshops'));
    }
    public function show($id){
        $workshopp = Workshop::findorFail($id);
        return view('workshopdetail', compact('workshopp'));
    }
    
}
