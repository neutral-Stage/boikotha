<?php

namespace App\Http\Controllers\Dashboard;

use App\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class booksController extends Controller
{
    public function index(){

 
        // $enre= Re viewer::where('type','eng lish')->get();

        // $bnre= Re viewer::where('type','ban gla')->get();

        return view('back.books.addbooks');
    }
    public function store(Request $request)
    {

        if($request->hasFile('image')) {
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            $request['photo']=$filename  ;
            $file->move('reiviewer_photo/', $filename);
        }
        Book::create($request->except('_token'));
        return redirect()->back()->with('message','Book Added Successfully.');

       
    }
}
