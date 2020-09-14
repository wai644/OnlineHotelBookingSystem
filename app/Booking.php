<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['checkin','checkout','adult','children','user_id','rooom_id'];

    public function rooms($value='')
  {
    return $this->hasMany('App\Room');
  }
}
