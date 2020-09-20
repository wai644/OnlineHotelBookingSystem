@extends('master')

@section('title','Rooms')

@section('content')

<div class="container-fluid animated animatedFadeInUp fadeInUp">
	<h1 class="text-center mt-5 mb-4">Roomtype Detail</h1>
	<div class="row">
		<div class='col-md-4 mt-2 animated in-left'>
			<p><img src="{{ asset($roomtype->photo)}}" class='img-fluid'></p>
		</div>

		<div class='col-md-8  pt-5 mt-4 animated in-right'>
			<table class="table table bordered">
				<tbody>
					<tr><td>Roomtype Name:<td>{{$roomtype->name}}</td></tr>
				</tbody>
			</table>
		</div>
	</div>


</div>
	  

@endsection