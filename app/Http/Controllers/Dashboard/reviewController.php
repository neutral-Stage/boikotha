<?php

namespace App\Http\Controllers\Dashboard;

use App\Review;
use DB;
use App\Reviewer;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reviewController extends Controller
{
    public function index(){

        
        $book=Book::all();

        $reviewer= Reviewer::get();

       $review = Review::all();

        return view('back.review.newreview',compact( 'reviewer','book', 'review'));
    }

    public function store(Request $request)
    {

        
        Review::create($request->except('_token'));
        return redirect()->back()->with('message','Review Added Successfully.');

       
    }

    public function edit($id)
    {
        $review = Review::find($id);
        $book=Book::all();
        $reviewer= Reviewer::get();
       
        return view('back.review.upreview',compact( 'review', 'book','reviewer'));
    }
    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        
        Review::where('id',$id)->update($request->except('_token'));
        return redirect()->back()->with('message', 'Review  Updated Successfully');
    }

    public function delete($id)
    {

        $review = Review::find($id);
        
        $review->delete();
        return redirect()->back()->with('message', 'Review  Deleted successfully.');
    }

    public function getcategory( Request $request)
    {
        //return $id;
        $var = array();
        $except = Review::where('book_id', $request->book_id)->select('reviewer_id')->get();
        //return  $except;
        foreach($except  as $except){
            $var[] = $except->reviewer_id;
        }
        //return $var;
        $rev = DB::table('reviewers')
                ->whereNotIn('id', $var)
                ->get();
         return  $rev;
       
    }
}
