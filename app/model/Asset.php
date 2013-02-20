<?php

class Asset extends FluxCore\Core\Facade
{
	protected static $publicUrl = '';

	public static function setPublicUrl($url)
	{
		$url = trim($url, '/\\').'/';

		return (self::$publicUrl = $url);
	}

	public static function getPublicUrl()
	{
		return self::$publicUrl;
	}

	public static function pub($path)
	{
		return self::$publicUrl.ltrim($path, '/\\');
	}
}