<?php

// ------------------------------------------------------------------------- //
// Application Bindings
// ------------------------------------------------------------------------- //
// This is where you should define any IoC bindings that your application
// will require.
// ------------------------------------------------------------------------- //

App::bind('Illuminate\View\Environment', App::share(function()
{
	return View::getFacadeRoot();
}));