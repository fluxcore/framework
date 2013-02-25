<?php

define('FLUXCORE_START', microtime(true));
define('FLUXCORE_ROOT', __DIR__.'/../');

// Require composer autoload.
require_once FLUXCORE_ROOT.'/vendor/autoload.php';

// Pass bootstrap on to app.
$app = require_once FLUXCORE_ROOT.'/app/start/start.php';

// Run app.
require FLUXCORE_ROOT.'/app/start/run.php';