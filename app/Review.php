<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title','bn_title', 'rating', 'book_id', 'reviewer_id', 'des', 'bn_des'
    ];

    public function reviewer()
    {
        return $this->belongsTo('App\Reviewer', 'reviewer_id');
    }
    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id');
    }
}
