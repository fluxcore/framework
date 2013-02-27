<?php

use Mockery as M;
use Symfony\Component\HttpFoundation\Request;

class AssetTest extends TestCase
{
	public function testGetPublicAsset()
	{
		// Mock configuration.
		$this->app['config'] = array(
			'asset' => array(
				'public' => '',
				'cdn' => array(
					//
				),
			),
		);

		$this->assertEquals(
			'http://:/path/to/file.css',
			Asset::pub('path/to/file.css')
		);

		$this->assertEquals(
			'http://:/path/to/file.css',
			Asset::pub('/path/to/file.css')
		);
	}

	public function testGetOverridedPublicAsset()
	{
		// Mock configuration.
		$this->app['config'] = array(
			'asset' => array(
				'public' => 'https://override.com/path/',
				'cdn' => array(
					//
				),
			),
		);

		$this->assertEquals(
			'https://override.com/path/path/to/file.css',
			Asset::pub('path/to/file.css')
		);

		// Mock configuration.
		$this->app['config'] = array(
			'asset' => array(
				'public' => 'https://override.com/path',
				'cdn' => array(
					//
				),
			),
		);

		$this->assertEquals(
			'https://override.com/path/path/to/file.css',
			Asset::pub('path/to/file.css')
		);
	}

	public function testGetCDNAsset()
	{
		// Mock configuration.
		$this->app['config'] = array(
			'asset' => array(
				'public' => '',
				'cdn' => array(
					'test' => 'https://test.local/',
				),
			),
		);

		$this->assertEquals(
			'https://test.local/path/to/file.css',
			Asset::cdn('test', 'path/to/file.css')
		);

		$this->assertEquals(
			'https://test.local/path/to/file.css',
			Asset::cdn('test', '/path/to/file.css')
		);
	}
}