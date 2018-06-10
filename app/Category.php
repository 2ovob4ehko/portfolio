<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const TABLE = 'categories';

    public function posts(){
        return $this->belongsToMany('App\Post');
    }
}
