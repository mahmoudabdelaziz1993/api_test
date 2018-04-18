<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function post()
    {
      # code...
return $this->belongsTo('App\Post', 'post_id');
}
public function user()
{
  # code...
  return $this ->belongsTo('App\User','user_id');
}
}
