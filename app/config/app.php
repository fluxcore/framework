<?php

return array(

	'debug' => true,

	'services'	=> array(
		'FluxCore\Routing\RoutingServiceProvider',
		'Illuminate\View\ViewServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
	),

	'autoload' => array(
		__DIR__.'/../controller',
		__DIR__.'/../model',
	),

	'aliases'	=> array(
		'App' => 'Illuminate\Support\Facades\App',
		'Route' => 'Illuminate\Support\Facades\Route',
		'Event' => 'Illuminate\Support\Facades\Event',
		'ExceptionHandler' => 'FluxCore\Facade\Exception',
		'View' => 'Illuminate\Support\Facades\View',
		'Config' => 'Illuminate\Support\Facades\Config',
	),
	
);