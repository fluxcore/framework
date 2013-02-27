<?php

class Asset extends StaticAppModel
{
	public static function pub($path)
	{
		$config = self::$app['config']['asset'];
		$path = ltrim($path, '/\\');

		if (isset($config['public']) && $config['public'] != '') {
			$finalPath = rtrim($config['public'], '/\\')."/$path";
		} else {
			$finalPath = self::$app['request']->getScheme().'://'.
				self::$app['request']->getHttpHost().
				self::$app['request']->getBasePath().'/'.
				$path;
		}

		return $finalPath;
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