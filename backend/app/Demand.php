<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
  public $timestamps = false;

  protected $fillable = [
      'email', 'tag_id', 'region_id', 'ip'
  ];
}
