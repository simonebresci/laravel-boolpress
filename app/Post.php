<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // protected $fillable = ['title', 'body','author_id'];
  public function author(){
    return $this->belongsTo('App\Author');
  }

  public function comments(){
    return $this->hasMany('App\Comment');
  }

  public function tags(){
    return $this->belongsToMany('App\Tag');
  }
}
