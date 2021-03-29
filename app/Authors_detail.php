<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors_detail extends Model
{
    public function author(){
      return $this->belongsTo('App\Author');
    }
}
