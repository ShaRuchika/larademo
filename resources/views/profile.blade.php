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

Id : {{$data[0]->id}}<br>
Name : {{$data[0]->name}}<br>
Email : {{$data[0]->email}}<br>
Address : {{$data[0]->address}} 

@stop