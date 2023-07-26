@extends('layout')

@section('content')

<div class="col-sm-6" style="margin-top: 30px;">
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
	<form method="post" action="login">
		@csrf
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
</div>

@stop