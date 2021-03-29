<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function details(){
      return $this->hasOne('App\Author_detail');
    }

    public function posts(){
      return $this->hasMany('App\Post');
    }
}
