<?php

Route::add('/', 'get', function()
{
	return Controller::make('Home')->index();
});