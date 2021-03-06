@extends('master')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Room Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('rooms.store')}}" method="post" enctype="multipart/form-data">
			       @csrf
			       
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
			        <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputPrice" name="price">
			          <span class="text-danger">{{ $errors->first('price') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputPhoto" name="photo" class="d-block">
			          <span class="text-danger">{{ $errors->first('photo') }}</span>
			        </div>
			      </div>

			       <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
			        <label for="inputPrice" class="col-sm-2 col-form-label">Description</label>
			        <div class="col-sm-5">
			     
			           <textarea id="inputDescription" class="form-control" name="description"></textarea>
			          <span class="text-danger">{{ $errors->first('description') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('service') ? 'has-error' : '' }}">
			        <label for="inputPrice" class="col-sm-2 col-form-label">Choose Service</label>
			        <div class="col-sm-5">
			           <select class="js-example-basic-multiple form-control " name="service[]" multiple="multiple">
	    		@foreach($services as $row)
		    		<option value="{{$row->id}}">{{$row->name}}
		    		</option>
	    		@endforeach
			</select>
			          <span class="text-danger">{{ $errors->first('service') }}</span>
			        </div>
			      </div>

			        <div class="form-group row {{ $errors->has('roomtype') ? 'has-error' : '' }}">
			        <label for="inputRoomtype" class="col-sm-2 col-form-label">Roomtype</label>
			        <div class="col-sm-5">
			          <select class="form-control form-control-md" id="inputRoomtype" name="roomtype">
			            <optgroup label="Choose Roomtype">
			              @foreach($roomtypes as $roomtype)
			                <option value="{{$roomtype->id}}">{{$roomtype->name}}</option>
			              @endforeach 
			            </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('roomtype') }}</span>
			        </div>
			      </div>

			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Create">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection
@section('script')
		<script >
		$(document).ready(function() {
		    $('.js-example-basic-multiple').select2();
		});

		</script>
@endsection
