<?php

// ------------------------------------------------------------------------- //
// Application Routes
// ------------------------------------------------------------------------- //
// This is where you define routes that will handle requests for the
// application.
// ------------------------------------------------------------------------- //

// GET /
Route::get('/', function()
{
	return App::make('HomeController')->index();
});