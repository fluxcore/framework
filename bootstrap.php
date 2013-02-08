<?php

use FluxCore\Config\ConfigFacade;
use FluxCore\Core\AliasLoader;
use FluxCore\Core\Application;
use FluxCore\Core\Facade;
use FluxCore\Core\Service\ServiceManager;

// Define the FluxCore root directory.
define('FC_ROOT', __DIR__.'/');

// Require composer autoloader.
$autoload = require_once FC_ROOT.'vendor/autoload.php';

// Create application.
$app = new Application;

// Setup facade.
Facade::setFacadeApplication($app);

// Setup paths.
$app['path'] = FC_ROOT.'/app/';

// Create and register AliasLoader.
$app['autoload.alias'] = new AliasLoader;
$app['autoload.alias']->register();

// Setup service manager and add core services.
$app['service'] = new ServiceManager($app);
$app['service']->add('FluxCore\Config\ConfigServiceProvider');

// Application configuration.
$appConfig = ConfigFacade::make('app');
{
	// Setup services.
	foreach($appConfig->services as $serviceProvider) {
		$app['service']->add($serviceProvider);
	}

	// Setup aliases.
	$app['autoload.alias']->addAliasMap($appConfig->aliases);
}

// Require routes.
require_once $app['path'].'routes.php';