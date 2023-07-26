@extends('layout')

@section('content')

<div class="col-sm-6">

	<form method="post" action="register">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
		</div>
		<button type="submit" class="btn btn-primary">Register</button>
	</form>
</div>

@stop