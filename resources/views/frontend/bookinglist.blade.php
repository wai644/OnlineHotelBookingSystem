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
                                <span>Books</span>
                                <h2>Your Book List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Room Start -->
         <div class="container mt-5">
    
    <!-- Shopping Cart Div -->
    <div class="row mt-5 shoppingcart_div">
      <div class="col-12">
        <a href="{{route('homepage')}}" class="btn mainfullbtncolor btn-secondary float-right px-3"> 
         Book Next Room
        </a>
      </div>
    </div>

    <div class="row mt-5 shoppingcart_div">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th> No </th>
              <th>Checkin</th>
              <th>Checkout</th>
              <th>Room Photo</th>
              <th>Name </th>
              <th>Price</th>
              <th>Qty</th>
              <th>Subtotal</th>

            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
            @foreach($bookings as $bookinglist)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$bookinglist->checkin}}</td>
                <td>{{$bookinglist->checkout}}</td>
                <td><img src="" width="120px" height="100px" class="rounded circle"></td>
              </tr>

            @endforeach
            
          </tbody>
          <tfoot>
            <tr>
             
            </tr>
          </tfoot>
        </table>
      </div>
    </div>

    <!-- No Shopping Cart Div -->

  </div>
    </main>
@endsection