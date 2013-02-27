<?php

// ------------------------------------------------------------------------- //
// Imports
// ------------------------------------------------------------------------- //

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

// ------------------------------------------------------------------------- //
// Application Exception Handlers
// ------------------------------------------------------------------------- //
// This is where you should assign the exception handlers that your
// application will use.
// ------------------------------------------------------------------------- //

// -
// Exception (Catch-all)
// -
// Error 500
// -
ExceptionHandler::error(function(Exception $e)
{
	return App::make('ErrorController')->index(500, $e);
});

// -
// Symfony\Component\HttpKernel\Exception\NotFoundHttpException
// -
// Error 404
// -
ExceptionHandler::error(function(NotFoundHttpException $e)
{
	return App::make('ErrorController')->index(404, $e);
});