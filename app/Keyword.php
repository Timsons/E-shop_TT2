<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
  protected $table = 'keyword';

  public function product() {
      return $this->hasMany('App\Product');
  }
}
