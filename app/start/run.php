<?php

// ------------------------------------------------------------------------- //
// Imports
// ------------------------------------------------------------------------- //

use Symfony\Component\HttpFoundation\Response;

// ------------------------------------------------------------------------- //
// Application Run
// ------------------------------------------------------------------------- //
// This method provides a hookable running routine for the application. 
// This is where request should be dispatched to router and response
// sent back to client.
// ------------------------------------------------------------------------- //

$app->run(function($app, $request)
{
	// Prepare request and invoke 'app.before' event.
	$request = App::prepareRequest($request);
	Event::fire('app.before');

	// Dispatch request.
	$response = Route::dispatch($request->getPathInfo(), $request);

	// Prepare response and invoke 'app.after' event.
	$response = App::prepareResponse($response, $request);
	Event::fire('app.after');
	
	// Send response.
	$response->send();
});

// ------------------------------------------------------------------------- //
// Application Finish
// ------------------------------------------------------------------------- //

Event::fire('app.finish');