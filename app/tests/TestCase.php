<?php

use Mockery as M;

abstract class TestCase extends PHPUnit_Framework_TestCase
{
	protected $app;

	public function setUp()
	{
		$this->app = require __DIR__.'/../start/start.php';
	}

	public function tearDown()
	{
		M::close();
		unset($this->app);
	}
}