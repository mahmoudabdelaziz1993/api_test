<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function review()
    {
      # code...
return $this->hasMany('App\Review',"post_id");
  }

public function user()
{
  # code...
  return $this ->belongsTo('App\User',"user_id");
}
}
