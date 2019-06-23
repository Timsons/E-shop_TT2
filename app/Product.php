<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function keyword() {
        return $this->hasMany('App\keyword');
    }

    public function comment() {
        return $this->hasMany('App\comment');
    }
	
	public function category() {
        return $this->belongsTo('App\category');
    }
}
