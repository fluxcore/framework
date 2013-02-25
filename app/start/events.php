<?php

// ------------------------------------------------------------------------- //
// Imports
// ------------------------------------------------------------------------- //

use Illuminate\Support\Contracts\RenderableInterface;
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
		// If null was passed as response and BaseController has layout,
		// we set response as the BaseController layout instance.
		if (is_null($response) &&
			!is_null(BaseController::getLayoutInstance())
		) {
			$response = BaseController::getLayoutInstance();
		}

		// If response is instance of Illuminate RenderableInterface, set
		// response as the render result of the Renderable.
		if ($response instanceof RenderableInterface) {
			$response = $response->render();
		}

		// Create response object.
		$response = new Response($response);
	}

	// Prepare.
	return $response->prepare($request);
});

// 'app.prepareRequest' is wrapped by App::prepareRequest().
Event::listen('app.prepareRequest', function($app, Request $request)
{
	return $request;
});