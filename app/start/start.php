<?php

use FluxCore\Core\Application;
use FluxCore\Core\Facade;

// Constants.
require_once __DIR__.'/../constants.php';

// Create application instance.
$app = new Application;

// Bind paths.
$app->bindPaths(require __DIR__.'/../paths.php');

// Facade.
Facade::clearResolvedInstances();
Facade::setFacadeApplication($app);

// Initialize.
require_once __DIR__.'/initialize.php';

// Services.
require_once __DIR__.'/services.php';

// Autoload.
require_once __DIR__.'/autoload.php';

// Routes.
require_once __DIR__.'/../bindings.php';

// Events.
require_once __DIR__.'/../events.php';

// Events.
require_once __DIR__.'/../exceptions.php';

// Routes.
require_once __DIR__.'/../routes.php';

// Pass application instance back.
return $app;