<?php

return array(

	'services'	=> array(
		'FluxCore\Routing\RoutingServiceProvider',
		'FluxCore\Wrapper\RequestServiceProvider',
		'Illuminate\Filesystem\FilesystemServiceProvider',
		'Illuminate\Events\EventServiceProvider',
		'Illuminate\View\ViewServiceProvider',
	),

	'aliases'	=> array(
		'Config'	=> 'FluxCore\Config\ConfigFacade',
		'Route'		=> 'FluxCore\Routing\RoutingFacade',
		'Request'	=> 'FluxCore\Wrapper\RequestFacade',
		'View'		=> 'FluxCore\Wrapper\ViewFacade',
	),
	
);