@extends('master')

@section('content')
<div class="container-fluid mt-4">

  <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-list-alt pr-3"></i> 
    Booking List
  </h1>
  <form method="get" action="{{route('books.index')}}" class="mt-2">

   <div class="card my-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 ">
                    <div class="form-group row">
                        <label class="form-control-label ml-3 mt-2">Start date</label>
                        <div class="col-md-12">
                            <input type="date" name="startdate" class="form-control startdate">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="form-group row">
                        <label class="form-control-label ml-3 mt-2">End date</label>
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
  </form>

  <div class=" mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class=" text-center table table-bordered table-striped " id="dataTable" width="100%" cellspacing="0">
          <thead class="table-dark">
            <tr>
              <th width="200px">No</th>
              <th>User</th>
              <th>Checkin</th>
              <th>Checkout</th>
              <th>Adult</th>
              <th>Children</th>
              <th>Total</th>
              <th width="200px">Action</th>

            </tr>
          </thead>
          <tbody class="">
             @php $i=1; 
             @endphp
            @foreach($bookings as $row)
            <tr>
              <td>{{($i++)}}</td>
              <td>{{$row->user->name}}</td>
              <td>{{$row->checkin}}</td>
              <td>{{$row->checkout}}</td>
              <td>{{$row->adult}}</td>
              <td>{{$row->children}}</td>
              <td>{{$row->total}} MMK</td>
              <td>
                
                  <a href="{{route('books.show',$row->id)}}" class="btn btn-success">
                    <i class="fas fa-info"></i>
                  </a>
                  @if($row->status==0)

                  <a href="{{route('book_status',$row->id)}}" class="btn btn-warning">Confirm</a>
                  @else
                  <a class="btn btn-light" disabled="disabled" >Confirmed</a>
                  @endif   
                  
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

