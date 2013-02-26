<?php

class Asset extends FluxCore\Core\Facade
{
	public static function pub($path)
	{
		$config = self::$app['config']['asset'];
		$path = ltrim($path, '/\\');

		return (isset($config['public']) && $config['public'] != '')
			? rtrim($config['public'], '/\\')."/$path"
			: self::$app['request']->getScheme().'://'.
				self::$app['request']->getHttpHost().
				self::$app['request']->getBasePath().'/'.
				$path;
	}

	public static function cdn($name, $path)
	{
		$config = self::$app['config']['asset'];
		$path = ltrim($path, '/\\');

		return (isset($config['cdn'][$name]))
			? rtrim($config['cdn'][$name], '/\\')."/$path"
			: $path;
	}
}