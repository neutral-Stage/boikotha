<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'caption', 'bn_caption', 'book_id', 'url'
    ];
}
