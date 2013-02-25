<?php

use FluxCore\Core\AliasLoader;
use Illuminate\Support\ClassLoader;

// Add aliases from config.
AliasLoader::addAliases($app['config']['app.aliases']);

// Add directories from config.
ClassLoader::addDirectories($app['config']['app.autoload']);

// Register loaders.
AliasLoader::register();
ClassLoader::register();