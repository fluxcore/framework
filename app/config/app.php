<?php

return array(

	// --------------------------------------------------------------------- //
	// Application Debugging
	// --------------------------------------------------------------------- //
	// Specifies whether debugging functionality should be enabled or not.
	// --------------------------------------------------------------------- //

	'debug' => true,

	// --------------------------------------------------------------------- //
	// Application Services
	// --------------------------------------------------------------------- //
	// Specifies which services to register to the application.
	// --------------------------------------------------------------------- //

	'services'	=> array(
		'FluxCore\Routing\RoutingServiceProvider',
		'Illuminate\View\ViewServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
	),

	// --------------------------------------------------------------------- //
	// Application Autoload Paths
	// --------------------------------------------------------------------- //
	// Specifies which directories that should be searched by the instant
	// ClassLoader.
	// --------------------------------------------------------------------- //

	'autoload' => array(
		__DIR__.'/../controller',
		__DIR__.'/../model',
	),

	// --------------------------------------------------------------------- //
	// Application Class Aliases
	// --------------------------------------------------------------------- //
	// Specifies which global class aliases should be provided to the
	// application.
	// --------------------------------------------------------------------- //

	'aliases'	=> array(
		'ExceptionHandler'	=> 'FluxCore\Facade\Exception',
		'App'				=> 'Illuminate\Support\Facades\App',
		'Config'			=> 'Illuminate\Support\Facades\Config',
		'Event'				=> 'Illuminate\Support\Facades\Event',
		'Route'				=> 'Illuminate\Support\Facades\Route',
		'View'				=> 'Illuminate\Support\Facades\View',
	),
	
);