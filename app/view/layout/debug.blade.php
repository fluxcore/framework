@extends('layout.master')

@section('title')
	Debug - 
@stop

@section('head')
	<link rel="stylesheet" href="{{ Asset::pub('css/debug.css') }}"/>
@stop

@section('body')
	<div id="debug">
		@yield('content')
	</div>
@stop