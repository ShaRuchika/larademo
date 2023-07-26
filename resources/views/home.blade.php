@extends('layout')

@section('content')
<h1>Home page is here</h1>
@if(Session::get('user'))
<p>Welcome | {{Session::get('user')}}</p>
@endif
@stop