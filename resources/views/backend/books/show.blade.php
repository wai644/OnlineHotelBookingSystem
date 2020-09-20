@extends('master')

@section('content')
<div class="container-fluid mt-4">
  <h1 class="h3 mb-4 text-gray-800">
      <i class="fas fa-list-alt pr-3"></i> 
      Book Details List
    </h1>
    <div>
      
      <div class="card shadow">
        <div class="card-body mx-3">
        <div class="row mt-4">
          <table class="table text-center">
                  <thead  class="thead-dark">
            <tr>
              <th>No</th>
              <th>Checkin</th>
              <th>Checkout</th>
              <th>Room Name</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
          @php 
            $i=1;
            $total=0;
            @endphp
            @foreach($booking->rooms as $room)
            @php
            $subtotal=$room->price*$room->pivot->qty;
            $total+=$subtotal
            @endphp
            <tr>
              
              <td>{{($i++)}}</td>
              <td>{{$booking->checkin}}</td>
              <td>{{$booking->checkout}}</td>
              <td>{{$room->name}}</td>
              <td>{{$room->price}} Ks</td>
              <td>{{$room->pivot->qty}}</td>
              <td>{{$subtotal}} Ks</td>
            </tr>
          </tbody>
          
          @endforeach   
          <tr class="bg-dark text-white">
              <td colspan="6">Total:</td>
              <td>{{$total}} MMK</td>
            </tr>     
          </table>
        </div>

        <div class=" py-3">
        
              <div class="row mt-2">
          <div class="col-2">
            <a href="{{route('books.index')}}" class="btn btn-info btn-block float-right"> 
                    <i class="fas fa-backward pr-2"></i>  Back 
                  </a>
          </div>
          
        </div>
        </div>
        </div>
      </div>
    </div>
</div>
@endsection