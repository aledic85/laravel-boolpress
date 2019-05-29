<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [

      'name',
      'lastname'
    ];

    function posts() {

      return $this->hasMany(Post::class);
    }
}
