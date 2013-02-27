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
// Composer Autoload
// ------------------------------------------------------------------------- //

require_once __DIR__.'/../../vendor/autoload.php';

// ------------------------------------------------------------------------- //
// Application Bootstrap
// ------------------------------------------------------------------------- //

$app = require_once FLUXCORE_ROOT.'/app/start/start.php';

// ------------------------------------------------------------------------- //
// Application Run
// ------------------------------------------------------------------------- //

require FLUXCORE_ROOT.'/app/start/run.php';