<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Roomtype;
use App\Service;

class PageController extends Controller
{
  public function home($value='')
  {
  	$roomtypes=Roomtype::all();
    return view('frontend.home',compact('roomtypes'));
  }

   public function about($value='')
  {
    
    return view('frontend.about');
  }

   public function service($value='')
  {
    $rooms=Room::all();
    $services=Service::all();
    return view('frontend.service',compact('services','rooms'));
  }

   public function contact($value='')
  {
    
    return view('frontend.contact');
  }

  public function room($value='')
  {
    return view('frontend.room');
  }

  public function roomfrontend($id)
  {
    $roomtype=Roomtype::find($id);
    $rooms=Room::all();
    return view('frontend.roomfrontend',compact('roomtype','rooms'));
  }

   public function roomdetail($id)
  {
    $services=Service::all();
    $room=Room::find($id);
    return view('frontend.roomdetail',compact('room','services'));
  }

   public function book($value='')
     {
          
          $rooms=Room::all();
      return view('frontend.book',compact('rooms',));
     }


 }
