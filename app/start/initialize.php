<?php

// ------------------------------------------------------------------------- //
// Imports
// ------------------------------------------------------------------------- //

use FluxCore\Config\ConfigServiceProvider;
use Illuminate\Events\EventServiceProvider;
use Illuminate\Exception\ExceptionServiceProvider;
use Illuminate\Filesystem\FilesystemServiceProvider;

// ------------------------------------------------------------------------- //
// Application Initialize
// ------------------------------------------------------------------------- //
// This method provides a hookable initialization routine for the
// application. Here you are supposed to register any core services that
// your application may require.
// ------------------------------------------------------------------------- //

$app->initialize(function($app)
{
	// Configuration service.
	$app['services']->register(new ConfigServiceProvider($app));

	// illuminate/filesystem
	$app['services']->register(new FilesystemServiceProvider($app));

	// illuminate/events
	$app['services']->register(new EventServiceProvider($app));

	// illuminate/exception
	$exceptionService = new ExceptionServiceProvider($app);
	$app['services']->register($exceptionService);

	$exceptionService->startHandling($app);
});