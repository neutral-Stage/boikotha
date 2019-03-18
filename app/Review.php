<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title', 'rating', 'book_id', 'reviewer_id', 'des','type'
    ];

    public function reviewer()
    {
        return $this->belongsTo('App\User', 'reviewer_id');
    }
    public function book()
    {
        return $this->belongsTo('App\User', 'book_id');
    }
}
