<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministery extends Model
{
  protected $fillable = [
      'name', 'leader', 'image', 'url',
  ];

  public function tags()
  {
      return $this->hasMany('App\Tag');
  }
}
