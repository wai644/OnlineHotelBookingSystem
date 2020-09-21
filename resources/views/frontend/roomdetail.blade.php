@extends('frontendtemplate')

@section('content')
<main>

    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/roomspage_hero.jpg')}}">
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
                            <h3>{{$room->name}}</h3>
                        </div>
                        <h3 class="archivment-back">{{$room->name}}</h3>
                    </div>
                </div>
            </div>

            <div class="container-fluid animated animatedFadeInUp fadeInUp">
                <div class="row">
                    <div class='col-md-4 animated in-left'>
                        <p><img src="{{ asset($room->photo)}}" class='img-fluid mt-5' style="box-shadow: 5px 5px #E4DFDE; border-radius: 10px;"></p>
                    </div>

                    <div class='col-md-8  pt-3 mt-4 animated in-right'>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="inputPassword5">Checkin</label>
                                        <input type="date" id="inputPassword5" class="form-control checkindate" aria-describedby="passwordHelpBlock">
                                    </td>
                                    <td width="200px">
                                        <label for="inputPassword5">Checkout</label>
                                        <input type="date" id="inputPassword5" class="form-control checkoutdate " aria-describedby="passwordHelpBlock" style="width: 200px;">
                                    </td>
                                    <td>
                                        <a href="{{route('bookpage')}}" class="addtocartBtn btn text-center text-decoration-none colsm-2 mt-4" style="height: 5px; box-shadow: 5px 5px #E4DFDE; text-align: left;" data-id="{{$room->id}}" data-name="{{$room->name}}" data-photo="{{$room->photo}}" data-price="{{$room->price}}">Book</a>
                                    </td>

                                </tr>
                                <tr><td>Room Price:<td colspan="2">{{$room->price}}</td></tr>
                                <tr><td>Description:<td style="text-align: justify;" colspan="2">{{$room->description}}</td></tr>
                                
                          </tbody>
                      </table>
                  </div>
              </div>
              <h4 class="mt-3 ">{{$room->name}},s  Services</h4 class="mt-3">
              <div class="row">

                 @foreach($room->services as $service)
                 <div class="card mx-3 my-3 mb-4" style="width: 10rem; box-shadow: 5px 5px #E4DFDE; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                  <img src="{{asset($service->photo)}}" class="card-img-top" alt="...">
                  <div class="card-footer">

                    <h5 class="card-title">{{$service->name}}</h5>
                </div>
            </div>
            @endforeach
        </div>


    </div>

</div>
</div>
</div>

{{--  <div class="container-fluid animated animatedFadeInUp fadeInUp">
    <h1 class="text-center mt-5 mb-4">Amenities</h1>
    <div class="row">

        <div class="container-fluid">
            <div class="row">
                <tbody>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </tbody>
            </div>
        </div>

    </div>


</div>
--}}
</section>


<!-- Room End -->


</main>
@endsection