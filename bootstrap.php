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
$app['app'] = $app;

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

// Setup core.
{
	// Setup services.
	foreach($app['config']['app.services'] as $serviceProvider) {
		$app['service']->add($serviceProvider);
	}

	// Boot services.
	$app['service']->boot();

	// Setup aliases.
	$app['autoload.alias']->addAliasMap($app['config']['app.aliases']);
}

// Require routes.
require_once $app['path'].'routes.php';

// Require bindings.
require_once $app['path'].'bindings.php';

// Require constants.
require_once $app['path'].'constants.php';