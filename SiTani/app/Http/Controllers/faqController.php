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

    Public function create (Request $request)
    {
        Faq::create ([
            'header' => $request->header,
            'content'=> $request->content,

        ]);
        return back();
    }

    public function input() {
        return view ('faqAdmin/input');

    }
    
    public function delete($id){
        $delete=Faq::where('id', $id);
        $delete->delete();
        return back();

    }

}
