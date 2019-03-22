<?php

namespace App\Http\Controllers\Dashboard;
use App\Reviewer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class reviewerController extends Controller
{
    public function index(){

       

        $reviewer= Reviewer::get();

        return view('back.reviewer.addreview', compact( 'reviewer'));
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

    public function edit($id)
    {
        $rev = Reviewer::find($id);
        return view( 'back.reviewer.editreview',compact( 'rev'));
    }

    public function update(Request $request, $id)
    {
        $rev = Reviewer::find($id);
        if($request->hasFile('image'))
        {
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            $file->move('reiviewer_photo/', $filename);
            $request['photo']=$filename;
            if(file_exists('reiviewer_photo/'.$rev->photo) && $rev->photo!=null)
            {
                unlink('reiviewer_photo/'.$rev->photo);
            }
        }
        Reviewer::where('id',$id)->update($request->except(['_token','_method','image']));
        return redirect()->back()->with('message','Data Updates');
    }
    public function delete($id)
    {

        $rev = Reviewer::find($id);
        if(file_exists('reiviewer_photo/'. $rev->photo) && $rev->photo!=null)  {
                unlink('reiviewer_photo/'. $rev->photo);
            }
        $rev->delete();
        return redirect()->back()->with('message','Data  Deleted successfully.');
    }
}
