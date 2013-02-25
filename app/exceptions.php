<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

ExceptionHandler::error(function(NotFoundHttpException $e)
{
	if (Config::get('app.debug')) {
		return View::make('debug.exception')->with('e', $e);
	}

	return App::make('ErrorController')->index(404, $e);
});

ExceptionHandler::error(function(Exception $e)
{
	if (Config::get('app.debug')) {
		return View::make('debug.exception')->with('e', $e);
	}

	return App::make('ErrorController')->index(500, $e);
});