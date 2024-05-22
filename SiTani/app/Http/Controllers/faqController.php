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
        faq::create ([
            'id' => $request-> id,
            'header' => $request->header,
            'content'=> $request->content,

        ]);
        return redirect ('/faqAdmin');
    }

    public function update (Request $request, $id)
    {
        $faq = faq::findorfail($id);
        $faq-> update([
            'id' => $request->id,
            'header' => $request->header,
            'content' => $request->content,
            
        ]);
        return  redirect('/faqAdmin');
    
    }
    public function input() {
        return view ('faqAdmin/input');

    }
    public function edit($id)
    {
        $faq = faq::where('id',$id)->first();
        return redirect()->route('editPegawai');
    }

    public function delete($id){
        $delete=faq::where('id', $id);
        $delete->delete();
        return back();

    }

}
