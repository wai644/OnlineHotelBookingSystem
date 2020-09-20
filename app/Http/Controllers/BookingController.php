<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Booking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct($value='')
    {
        $this->middleware('role:Admin')->only('index','show');
        $this->middleware('role:Customer')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $date1 = $request->startdate;
        $date2 = $request->enddate;

        if ($request->startdate && $request->enddate) {
            $bookings = Booking::whereBetween('checkin',[new Carbon($date1), new Carbon($date2)])->get();
        }else{
            $bookings = Booking::all();
        }

        //dd($bookings);
        return view('backend.books.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roomArr = json_decode($request->room_data);
        //dd($roomArr);
        $total = 0 ;
        foreach ($roomArr as $row){
            $total+=($row->price * $row->qty);
        }

        $booking = new Booking;
        $booking->checkin=$request->checkin;
        $booking->checkout=$request->checkout;
        $booking->adult=$request->adult;
        $booking->children=$request->child;
        $booking->user_id=Auth::id();
        $booking->note = $request->notes;
        $booking->total = $total;
        $booking->save();

        foreach ($roomArr as $row) {
            $booking->rooms()->attach($row->id,['qty'=>$row->qty]);
        }

        return 'successfully';

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking=Booking::find($id);
        return view('backend.books.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

}
