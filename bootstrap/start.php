<?php

// ------------------------------------------------------------------------- //
// Imports
// ------------------------------------------------------------------------- //

use FluxCore\Core\Application;
use FluxCore\Core\Facade;

// ------------------------------------------------------------------------- //
// Constants.
// ------------------------------------------------------------------------- //

if (!defined('UNIT_TESTING')) {
	define('UNIT_TESTING', false);
}

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

// - Core Bootstrap

// Initialize.
require __DIR__.'/initialize.php';

// Services.
require __DIR__.'/services.php';

// Autoload.
require __DIR__.'/autoload.php';

// Core events.
require __DIR__.'/events.php';

// - Application Bootstrap

// Constants.
require __DIR__.'/../app/constants.php';

// Routes.
require __DIR__.'/../app/bindings.php';

// Events.
require __DIR__.'/../app/events.php';

// Events.
require __DIR__.'/../app/exceptions.php';

// Routes.
require __DIR__.'/../app/routes.php';

// ------------------------------------------------------------------------- //
// Other
// ------------------------------------------------------------------------- //

// Call start event.
Event::fire('app.start');

// Pass application instance back.
return $app;