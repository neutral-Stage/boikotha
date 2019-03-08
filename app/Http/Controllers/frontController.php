<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function reviewer()
    {
        return view('front.reviewer');
    }
}
