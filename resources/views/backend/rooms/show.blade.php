@extends('master')

@section('title','Rooms')

@section('content')

<div class="container-fluid animated animatedFadeInUp fadeInUp">
	<h1 class="text-center mt-5 mb-4">Room Detail</h1>
	<div class="row">
		<div class='col-md-4 animated in-left'>
			<p><img src="{{ asset($room->photo)}}" class='img-fluid'></p>
		</div>

		<div class='col-md-8  pt-5 mt-0 animated in-right'>
			<table class="table table bordered">
				<tbody>
					<tr><td>Room Name:<td>{{$room->name}}</td></tr>
					<tr><td>Room Price:<td>{{$room->price}}</td></tr>
					<tr><td>Description:<td>{{$room->description}}</td></tr>
				</tbody>
			</table>
		</div>
	</div>


</div>
	  

@endsection