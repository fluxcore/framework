@extends('layout.master')

@section('title')
	Error - 
@stop

@section('body')
	<h2>@yield('errorTitle')</h2>
	<p>@yield('errorText')</p>
@stop