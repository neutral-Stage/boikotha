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
        $book=Book::with( 'review')->latest()->paginate(10);
        return view('back.books.addbooks',compact('book'));
    }
    public function store(Request $request)
    {

        if($request->hasFile('image')) {
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            $request['photo']=$filename  ;
            $file->move('book_photo/', $filename);
        }
        Book::create($request->except('_token'));
        return redirect()->back()->with('message','Book Added Successfully.');

       
    }
}
