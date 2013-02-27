<?php

// ------------------------------------------------------------------------- //
// Application Events
// ------------------------------------------------------------------------- //
// This is where you are supposed to hook any events that the application
// requires to be hooked using either 'App' or 'Event'.
// ------------------------------------------------------------------------- //

App::start(function()
{
	// Initialize static application models.
	// (Models that only require an instance of Application)
	StaticAppModel::initialize();
});

App::before(function()
{
	// This is invoked after 'App::prepareRequest()' and before router dispatch.
});

App::after(function()
{
	// This is invoked after 'App::prepareResponse()' and before response send.
});