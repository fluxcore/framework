<?php

// ------------------------------------------------------------------------- //
// Imports
// ------------------------------------------------------------------------- //

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

// ------------------------------------------------------------------------- //
// Application Core Events
// ------------------------------------------------------------------------- //
// This is where any events that the framework depends on should be defined.
// Ex. Illuminate compatibility hooks.
// ------------------------------------------------------------------------- //

// 'app.prepareResponse' is wrapped by App::prepareResponse().
Event::listen('app.prepareResponse', function($app, $response, Request $request)
{
	// If response is not an instance of HttpFoundation\Response,
	// we create a new instance of HttpFoundation\Response with the
	// response data.
	if (!$response instanceof Response) {
		$response = new Response($response);
	}

	// Prepare.
	return $response->prepare($request);
});

// 'app.prepareRequest' is wrapped by App::prepareRequest().
Event::listen('app.prepareRequest', function($app, Request $request)
{
	// Perform any manipulation
	return $request;
});