<?php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

Event::listen('app.before', function()
{
	//
});

Event::listen('app.after', function($app)
{
	//
});

Event::listen('app.prepareResponse', function($app, $response, Request $request)
{
	if (!$response instanceof Response) {
		$response = new Response($response);
	}

	return $response->prepare($request);
});

Event::listen('app.prepareRequest', function($app, Request $request)
{
	return $request;
});