<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function author(){
    $this->belongsTo('App\Author');
  }
}
