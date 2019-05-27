<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [

    'category_name'
  ];

  function posts()
  {
      return $this->belongsToMany(Post::class);
  }
}
