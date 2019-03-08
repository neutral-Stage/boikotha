<?php

namespace App\Http\Controllers\Dashboard;
use App\Reviewer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reviewerController extends Controller
{
    public function index(){
    
        return view('back.reviewer.addreview');
    }

    public function store(Request $request)
    {

        if($request->hasFile('image')) {
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            $request['photo']=$filename ; 
            $file->move('reiviewer_photo/', $filename);
        }
        Reviewer::create($request->except('_token'));
        return redirect()->back()->with('message','Reviewer Added Successfully.');

       
    }
}
