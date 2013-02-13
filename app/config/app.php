<?php

return array(

	'services'	=> array(
		'FluxCore\Routing\RoutingServiceProvider',
		'FluxCore\Wrapper\RequestServiceProvider',
		'Illuminate\Filesystem\FilesystemServiceProvider',
		'Illuminate\Events\EventServiceProvider',
		'Illuminate\View\ViewServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
	),

	'aliases'	=> array(
		'App'			=> 'FluxCore\Core\ApplicationFacade',
		'Config'		=> 'FluxCore\Config\ConfigFacade',
		'Controller'	=> 'FluxCore\Routing\ControllerFacade',
		'Route'			=> 'FluxCore\Routing\RoutingFacade',
		'Request'		=> 'FluxCore\Wrapper\RequestFacade',
		'View'			=> 'FluxCore\Wrapper\ViewFacade',
		'Model'			=> 'Illuminate\Database\Eloquent\Model',
	),
	
);