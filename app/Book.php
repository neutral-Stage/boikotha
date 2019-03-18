<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'price', 'publisher', 'age', 'author', 'illustrator', 'isbn', 'public_date', 'cate', 'photo'
    ];

    
    public function review()
    {
        return $this->hasMany( 'App\Review', 'book_id');
    }
    public function reviewer()
    {
        return $this->hasMany( 'App\Reviewer');
    }
}
