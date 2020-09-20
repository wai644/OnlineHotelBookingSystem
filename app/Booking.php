<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['checkin','checkout','adult','children','note','total','status','user_id'];

    public function rooms($value='')
  {
    return $this->belongsToMany('App\Room','bookingdetails')
    ->withpivot('qty')
    ->withTimestamps();
  }
   public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
