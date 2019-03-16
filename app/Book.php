<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'price', 'publisher', 'age', 'author', 'illustrator', 'isbn', 'public_date', 'cate', 'photo'
    ];
}
