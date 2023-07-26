@extends('layout')

@section('content')
<h1>Restaurant list page is here</h1>

@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">NAME</th>
			<th scope="col">EMAIL</th>
			<th scope="col">ADDRESS</th>
			<th scope="col">OPERATION</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $item)
		<tr>
			<th scope="row">{{$item->id}}</th>
			<td>{{$item->name}}</td>
			<td>{{$item->email}}</td>
			<td>{{$item->address}}</td>
			<td><a href="<?php echo url('/delete/'.$item->id); ?>"><i class="far fa-trash-alt"></i></a>
			<a href="<?php echo url('/edit/'.$item->id); ?>"><i class="fas fa-edit"></i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>


@stop