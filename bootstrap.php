<?php

// Define the FluxCore root directory.
define('FC_ROOT', __DIR__.'/');

// Require composer autoloader.
$autoload = require_once FC_ROOT.'vendor/autoload.php';

// Create and register AliasLoader.
$aliasLoader = new FluxCore\Core\AliasLoader();
$aliasLoader->register();

// TODO: Setup everything for index or any other abstraction of the system.