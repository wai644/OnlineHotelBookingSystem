<?php

namespace App\Http\Controllers;

use App\Room;
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
        return view('backend.rooms.create');
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
        "people" => 'required',
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
    $room->photo = $path;
    $room->price = $request->price;
    $room->people = $request->people;
    $room->roomtype_id = $request->roomtype;
    $room->save();

    // redirect
    return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
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
         $request->validate([
            "name" => 'required',
            "price" => 'required',
            "photo" => 'sometimes',
            "oldphoto" => 'required',
            "people" => 'required',
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
        $room->photo = $path;
        $room->price = $request->price;
        $room->people = $request->people;
        $room->roomtype_id = $request->roomtype_id;
        $room->save();

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
        //
    }
}
