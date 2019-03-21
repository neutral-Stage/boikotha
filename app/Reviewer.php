<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    protected $fillable = [
        'name', 'des', 'photo','type'
    ];

    public function review()
    {
        return $this->hasMany('App\Review', 'reviewer_id');
    }
    
}
