<?php

// ------------------------------------------------------------------------- //
// Imports
// ------------------------------------------------------------------------- //

use FluxCore\Core\Application;
use FluxCore\Core\Facade;

// ------------------------------------------------------------------------- //
// Constants.
// ------------------------------------------------------------------------- //

require_once __DIR__.'/../constants.php';

// ------------------------------------------------------------------------- //
// Application Setup
// ------------------------------------------------------------------------- //

// Create application instance.
$app = new Application;

// Bind paths.
$app->bindPaths(require __DIR__.'/paths.php');

// ------------------------------------------------------------------------- //
// Facade Setup
// ------------------------------------------------------------------------- //

// Facade.
Facade::clearResolvedInstances();
Facade::setFacadeApplication($app);

// ------------------------------------------------------------------------- //
// Delegated Bootstrap
// ------------------------------------------------------------------------- //
// Include any additional bootstrap files here.
// ------------------------------------------------------------------------- //

// Initialize.
require_once __DIR__.'/initialize.php';

// Services.
require_once __DIR__.'/services.php';

// Autoload.
require_once __DIR__.'/autoload.php';

// Core events.
require_once __DIR__.'/events.php';

// Routes.
require_once __DIR__.'/../bindings.php';

// Events.
require_once __DIR__.'/../events.php';

// Events.
require_once __DIR__.'/../exceptions.php';

// Routes.
require_once __DIR__.'/../routes.php';

// ------------------------------------------------------------------------- //
// Other
// ------------------------------------------------------------------------- //

// Pass application instance back.
return $app;