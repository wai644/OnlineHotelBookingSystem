<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    protected $fillable=['name','photo'];

     public function rooms($value='')
  {
  	return $this->hasMany('App\Room');
  }
}
