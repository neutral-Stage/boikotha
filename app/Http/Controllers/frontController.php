<?php

namespace App\Http\Controllers;
use App\Reviewer;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        
        return view('front.index');
    }
    public function reviewer()
    {
        $enre= Reviewer::where('type','english' )->get();
        $bnre= Reviewer::where('type','bangla') ->get();

        return view('front.reviewer', compact('enre', 'bnre'));
    }
    public function about()
    {
        return view('front.about');
    }
}
