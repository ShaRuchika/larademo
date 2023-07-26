@extends('layout')

@section('content')

<div class="col-sm-6">
	<h2>Edit page</h2>
	<form method="post" action="">
		@csrf
		<input type="hidden" name="id" value="{{$data->id}}">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control" id="name" value="{{$data->name}}" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" id="email" value="{{$data->email}}" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" name="address" class="form-control" id="address" value="{{$data->address}}" placeholder="Enter address">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

@stop
