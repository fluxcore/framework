<?php

class Asset extends FluxCore\Core\Facade
{
	public static function pub($path)
	{
		return self::$app['request']->getScheme().'://'.
			self::$app['request']->getHttpHost().
			self::$app['request']->getBasePath().'/'.
			ltrim($path, '/\\');
	}
}