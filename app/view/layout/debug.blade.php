@extends('layout.master')

@section('head')
	<link rel="stylesheet" href="css/debug.css"/>
@stop

@section('body')
	<div id="debug">
		@yield('content')
	</div>
@stop