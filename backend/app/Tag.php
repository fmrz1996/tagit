<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public $timestamps = false;

  protected $fillable = [
      'name', 'ministery_id'
  ];

  public function demands()
  {
      return $this->hasMany('App\Demand');
  }
}
