<?php

// Define the FluxCore root directory.
define('FC_ROOT', __DIR__.'/');

// Require composer autoloader.
$autoload = require_once FC_ROOT.'vendor/autoload.php';

// Create application/IoC container.
$app = new FluxCore\Core\Application;

// Create and register AliasLoader.
$app['autoload.alias'] = new FluxCore\Core\AliasLoader();
$app['autoload.alias']->register();

// TODO: Setup everything for index or any other abstraction of the system.