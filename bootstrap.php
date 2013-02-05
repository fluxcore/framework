<?php

// Define the FluxCore root directory.
define('FC_ROOT', __DIR__.'/');

// Require composer autoloader.
$autoload = require_once FC_ROOT.'vendor/autoload.php';

// Create application.
$app = new FluxCore\Core\Application;

// Setup paths.
$app['config.path'] = FC_ROOT.'/app/config/';

// Create and register AliasLoader.
$app['autoload.alias'] = new FluxCore\Core\AliasLoader;
$app['autoload.alias']->register();

// Setup service manager and add core services.
$app['service'] = new FluxCore\Core\Service\ServiceManager($app);
$app['service']->add('FluxCore\Config\ConfigServiceProvider');