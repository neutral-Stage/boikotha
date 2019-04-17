<?php

namespace App\Http\Controllers\Dashboard;

use App\Book;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class videoController extends Controller
{
     public function index()
    {


        $book = Book::all();
        $video = Video::all();

        // $reviewer = Reviewer::get();

        // $review = Review::all();

       // return view('back.review.newreview', compact('reviewer', 'book', 'review'));

        return view('back.video.newvideo',compact('book', 'video'));
    }

    public function store(Request $request)
    {


        Video::create($request->except('_token'));
        return redirect()->back()->with('message', 'Video Added Successfully.');
    }

    public function edit($id)
    {
        $video = Video::find($id);
        $book = Book::all();
        

        return view( 'back.video.editvideo', compact( 'video', 'book'));
    }

    public function update(Request $request, $id)
    {
        $video = Video::find($id);

        Video::where('id', $id)->update($request->except('_token'));
        return redirect()->back()->with('message', 'Video  Updated Successfully');
    }

    public function delete($id)
    {

        $video = Video::find($id);

        $video->delete();
        return redirect()->back()->with('message', 'Video  Deleted successfully.');
    }
}
