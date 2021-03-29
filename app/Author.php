<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function details(){
      return $this->hasOne('App\Authors_detail');
    }

    public function posts(){
      return $this->hasMany('App\Post');
    }

    public function comments(){
      return $this->hasMany('App\Comment');
    }
}
