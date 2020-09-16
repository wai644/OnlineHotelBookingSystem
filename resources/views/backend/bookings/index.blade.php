@extends('master')

@section('content')
<div class="container-fluid mt-4">

  <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-list-alt pr-3"></i> 
    Booking List
  </h1>

   <div class="card my-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 ">
                    <div class="form-group row">
                        <label class="form-control-label ml-3 mt-2">Checkin date</label>
                        <div class="col-md-12">
                            <input type="date" name="startdate" class="form-control startdate">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="form-group row">
                        <label class="form-control-label ml-3 mt-2"> Checkout date</label>
                        <div class="col-md-12">
                            <input type="date" name="enddate" class="form-control enddate">
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group row">
                        <label class="form-control-label ml-3 mt-3"> </label>
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-outline-success search_date "><i class="fas fa-search"></i></button>
                            </div>  
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>

  <div class=" mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class=" text-center table table-bordered table-striped " id="dataTable" width="100%" cellspacing="0">
          <thead class="table-dark">
            <tr>
              <th width="200px">No</th>
              <th>User Name</th>
              <th>Room</th>
              <th>Total</th>
              <th width="200px">Action</th>

            </tr>
          </thead>
          <tbody class="">
            @php $i=1; @endphp
            @foreach($bookings as $booking)
            <tr>
              <td>{{($i++)}}</td>
              <td>{{($booking->user->name)}}</td>
              <td>{{$booking->room}}</td>
              <td>{{$booking->total}}</td>
              <td>
                  <a href="{{route('bookings.show',$booking->id)}}" class="btn btn-success">
                    <i class="fas fa-info"></i>
                  </a>

                  
                  
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div>
@endsection

