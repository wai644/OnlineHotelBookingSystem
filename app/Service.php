<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['name','photo'];

     public function rooms($value='')
  {
    return $this->belongsToMany('App\Service');
  }

}
