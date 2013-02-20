<?php

Route::get('/', function()
{
	return App::make('HomeController')->index();
});