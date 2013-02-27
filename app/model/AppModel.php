<?php

class AppModel
{
	function __construct()
	{
		$this->app = App::getFacadeObject();
	}
}