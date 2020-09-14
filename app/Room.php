<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['name','price','photo','people','roomtype_id'];

    public function roomtype($value='')
  {
  	return $this->belongsTo('App\Roomtype');
  }
  public function services($value='')
  {
    return $this->hasMany('App\Service');
  }
  public function booking($value='')
  {
    return $this->belongsTo('App\Booking');
  }
}
