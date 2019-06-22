<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = 'comment';

  public function product() {
      return $this->hasMany('App\product');
  }

  public function user() {
      return $this->belongsTo('App\user');
  }
}
