<?php

// Register application services.
foreach ($app['config']['app.services'] as $service) {
	$app['services']->register(new $service($app));
}

// Boot application services.
$app['services']->boot();