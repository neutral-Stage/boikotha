<?php

namespace App\Http\Controllers;
use App\Reviewer;
use App\Review;
use App\Book;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        
        return view('front.index');
    }
    public function reviewer()
    {
        $enre= Reviewer::get();
        

        return view('front.reviewer', compact('enre', 'bnre'));
    }
    public function about()
    {
        return view('front.about');
    }
    public function booklist()
    {
        $books=Book::with('review')->get();
        $reviews=Review::with('reviewer','book')->get();

        //$data = $request->session()->all();
         //return $books;
        return view( 'front.booklist',compact( 'reviews', 'books'));
    }


    public function bookDetail($id)
    {
        $book = Book::where('id', $id)->with('review')->first();
        foreach ($book->review as $rvw) {
                $reviews[] = Reviewer::where('id',$rvw->reviewer_id)->first();
            }
            return view( 'front.bookDetail',compact( 'reviews', 'book'));
            
        }
    public function contact()
    {
        return view( 'front.contact');
    }
    public function readReview()
    {   $reviews=Review::with('reviewer','book')->get();
        //return $reviews;
        return view( 'front.read',compact('reviews'));
    }
    
}
