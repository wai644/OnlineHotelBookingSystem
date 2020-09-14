<?php

namespace App\Http\Controllers;

use App\Roomtype;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtypes=Roomtype::all();
        return view('backend.roomtypes.index',compact('roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.roomtypes.create');
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
            'name' => 'required',
            'photo' => 'required',
        ]);
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/roomtypeimg'),$imageName);

        $path = 'backend/roomtypeimg/'.$imageName;
        // Data insert

        $roomtype = new Roomtype;
        $roomtype->name = $request->name;
        $roomtype->photo = $path;

        $roomtype->save();
        return redirect()->route('roomtypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function show(Roomtype $roomtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomtype $roomtype)
    {
        return view('backend.roomtypes.edit',compact('roomtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomtype $roomtype)
    {
         $request->validate([
            'name' => 'required',
            'photo' => 'required|sometimes',
        ]);
        if($request->hasFile('photo')){
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/roomtypeimg'),$imageName);

        $path = 'backend/roomtypeimg/'.$imageName;
        }else{
            $path=$request->oldphoto;
        }
        // Data insert

        $roomtype->name = $request->name;
        $roomtype->photo = $path;

        $roomtype->save();
        return redirect()->route('roomtypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roomtype  $roomtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomtype $roomtype)
    {
        $roomtype->delete();
        return redirect()->route('roomtypes.index');
    }
}
