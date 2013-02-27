<?php

use Symfony\Component\HttpFoundation\Request;

class HomeControllerTest extends TestCase
{
	public function testIndex()
	{
		$this->assertEquals(
			'Hello World!',
			trim(
				$this->dispatch('/', Request::create('/', 'GET'))
					->filter('body')
					->text()
			)
		);
	}
}