<?php

// ------------------------------------------------------------------------- //
// Imports
// ------------------------------------------------------------------------- //

use FluxCore\Core\AliasLoader;
use Illuminate\Support\ClassLoader;

// ------------------------------------------------------------------------- //
// Setup
// ------------------------------------------------------------------------- //

// Add aliases from config.
AliasLoader::addAliases($app['config']['app.aliases']);

// Add directories from config.
ClassLoader::addDirectories($app['config']['app.autoload']);

// ------------------------------------------------------------------------- //
// Register
// ------------------------------------------------------------------------- //

AliasLoader::register();
ClassLoader::register();