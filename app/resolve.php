<?php

use FluxCore\Routing\Exception\RouteNotFoundException;

$output = "";
try {
	$output = Route::resolve(
		Request::get('p', '/'),
		Request::getFacadeObject()
	);
} catch(Exception $e) {
	// If in production.
	if(FC_PRODUCTION) {
		// Default error is 500 (internal server error).
		$code = 500;

		// If exception is instance of RouteNotFoundException,
		// set error to 404.
		if($e instanceof RouteNotFoundException) {
			$code = 404;
		}

		$output = Controller::make('Error')->index($code, $e);
	} else {
		// Output debug.exception view with exception.
		$output = View::make('debug.exception')->with('e', $e);
	}
}

echo $output;