<?php

use Symfony\Component\HttpFoundation\Response;

$app->run(function($app, $request)
{
	$response = Route::dispatch($request->getPathInfo(), $request);
	$response = App::prepareResponse($response, $request);
	
	$response->send();
});