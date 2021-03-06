@extends('frontendtemplate')

@section('content')
    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/roomspage_hero.jpg')}}" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Rooms</span>
                                <h2>Our Rooms</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Room Start -->
        <section class="room-area mt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>{{$roomtype->name}}</h3>
                            </div>
                            <h3 class="archivment-back">{{$roomtype->name}}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                     @foreach($roomtype->rooms as $room)
                    <a href="{{route('roomdetail',$room->id)}}">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
        
                        <div class="single-room mb-50">

                            <div class="room-img">
                            
                               <img src="{{asset($room->photo)}}" class="img-fluid" >
                
                            </div>
                            <div class="room-caption">

                              <h3><a href=""></a>{{$room->name}}</h3>
                                <div class="per-night">
                                    <span>Price : {{$room->price}} MMK</span>
                                </div>
                                

                                
                            </div>

                    </div>
                        </div>
                    </a>
                

                   @endforeach
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection