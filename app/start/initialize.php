<?php

use FluxCore\Config\ConfigServiceProvider;
use Illuminate\Events\EventServiceProvider;
use Illuminate\Exception\ExceptionServiceProvider;
use Illuminate\Filesystem\FilesystemServiceProvider;

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