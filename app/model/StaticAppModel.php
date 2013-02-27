<?php

class StaticAppModel
{
	protected static $app;

	public static function initialize()
	{
		self::$app = App::getFacadeApplication();
	}
}