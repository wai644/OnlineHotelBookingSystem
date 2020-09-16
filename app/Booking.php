<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['checkin','checkout','adult','children','note','total','user_id',];

    public function rooms($value='')
  {
    return $this->hasMany('App\Room');
  }
}
