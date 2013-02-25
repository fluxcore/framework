<?php

App::bind('Illuminate\View\Environment', App::share(function()
{
	return View::getFacadeRoot();
}));