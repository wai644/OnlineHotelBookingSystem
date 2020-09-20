<?php

namespace App\Http\Controllers;

use App\Room;
use App\Service;
use App\Roomtype;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rooms=Room::all();
        return view('backend.rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtypes=Roomtype::all();        
        $services=Service::all();
        return view('backend.rooms.create',compact('services','roomtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
        "name" => 'required',
        "price" => 'required',
        "photo" => 'required',
        "description" => 'required',
        "roomtype" => 'required'
    ]);

    // If include file, upload file
    $imageName = time().'.'.$request->photo->extension();

    $request->photo->move(public_path('backend/roomimg'),$imageName);

    $path = 'backend/roomimg/'.$imageName;
    // Data insert
    $room = new Room;
    // col name from database
    $room->name = $request->name;
    $room->price = $request->price;
    $room->photo = $path;
    $room->description = $request->description;
    $room->roomtype_id = $request->roomtype;
    $room->save();
    $room->services()->attach(request('service'));
   
    // redirect
    return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $room = Room::findOrFail($id);
        return view('backend.rooms.show',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($room);
        $services=Service::all();
        $room=Room::find($id);
        $roomtypes=Roomtype::all();

         return view('backend.rooms.edit',compact('room','services','roomtypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //dd($request);
         $request->validate([
            'name' => 'required',
            'price' => 'required',
            'photo' => 'sometimes',
            'oldphoto' => 'required',
            'description' => 'required',
            "roomtype" => 'required'
        ]);


        // file upload, if data
        if ($request->hasFile('photo')) {
           $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/roomimg'),$imageName);

            $path = 'backend/roomimg/'.$imageName; 
        }else{
            $path = $request->oldphoto;
        }

        // data update
        $room->name = $request->name;
        $room->price = $request->price;
        $room->photo = $path;     
        $room->description = $request->description;
        $room->roomtype_id = $request->roomtype;
        $room->save();
        $room->services()->sync(request('service'));

        // redirect
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
         $room->delete();
        return redirect()->route('rooms.index');
    }
}
