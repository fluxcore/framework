<?php

return array(

	'services'	=> array(
		'FluxCore\Routing\RoutingServiceProvider',
		'FluxCore\Wrapper\RequestServiceProvider',
	),

	'aliases'	=> array(
		'Config'	=> 'FluxCore\Config\ConfigFacade',
		'Route'		=> 'FluxCore\Routing\RoutingFacade',
		'Request'	=> 'FluxCore\Wrapper\RequestFacade',
	),
	
);