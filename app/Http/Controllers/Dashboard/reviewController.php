<?php

namespace App\Http\Controllers\Dashboard;

use App\Review;
use App\Reviewer;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reviewController extends Controller
{
    public function index(){

        
        $book=Book::all();
        $enre= Reviewer::where('type','english')->get();

        $bnre= Reviewer::where('type','bangla')->get();

        return view('back.review.newreview',compact( 'enre','bnre','book'));
    }

    public function store(Request $request)
    {

        
        Review::create($request->except('_token'));
        return redirect()->back()->with('message','Review Added Successfully.');

       
    }
}
