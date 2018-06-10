<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const TABLE = 'posts';

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function image(){
        return $this->hasOne('App\Post','parent_id');
    }
}
