<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['name','photo'];

     public function rooms()
    {
    	return $this->belongsToMany('App\Room','booking_detail')
    				->withPivot('qty')
    				->withTimestamps();
    }

}
