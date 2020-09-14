@extends('master')

@section('title','Services')

@section('content')

	<div class="container-fluid">
		<h2>Service Detail</h2>
		<div class="row">
		<div class='col-md-4 mt-2 animated in-left'>
			<p><img src="{{ asset($service->photo)}}" class='img-fluid'></p>
		</div>

		<div class='col-md-8  pt-5 mt-4 animated in-right'>
			<table class="table table bordered">
				<tbody>
					<tr><td>Service Name:<td>{{$service->name}}</td></tr>
				</tbody>
			</table>
		</div>`
	</div>

	</div>

@endsection