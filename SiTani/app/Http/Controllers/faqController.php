<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        return view ('faq.Faq', ["datas"=>$faq]);
    }

    public function faqAdmin()
    {
        $faq = Faq::all();
        return view ('faqAdmin.Faq', ["datas"=>$faq]);
    }

    Public function create ()
    {

    }
}
