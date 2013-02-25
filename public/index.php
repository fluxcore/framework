<?php

// ------------------------------------------------------------------------- //
// FluxCore Start Constant
// ------------------------------------------------------------------------- //
// This can be used by profilers to get the time of execution.
// ------------------------------------------------------------------------- //

define('FLUXCORE_START', microtime(true));

// ------------------------------------------------------------------------- //
// FluxCore Root Directory
// ------------------------------------------------------------------------- //
// This is used to require all bootstrap files.
// ------------------------------------------------------------------------- //

define('FLUXCORE_ROOT', __DIR__.'/../');

// ------------------------------------------------------------------------- //
// Bootstrap.
// ------------------------------------------------------------------------- //

// Require composer autoload.
require_once FLUXCORE_ROOT.'/vendor/autoload.php';

// Bootstrap application.
$app = require_once FLUXCORE_ROOT.'/app/start/start.php';

// Run app.
require FLUXCORE_ROOT.'/app/start/run.php';