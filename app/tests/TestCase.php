<?php

use Mockery as M;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Response;

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

	public function dispatch($uri, $request)
	{
		// Update this according to the 'app/start/run.php -> App::run(...)' callback.
		
		// Prepare request and invoke 'app.before' event.
		$request = App::prepareRequest($request);
		Event::fire('app.before');

		// Dispatch request.
		$response = Route::dispatch($uri, $request);

		// Prepare response and invoke 'app.after' event.
		$response = App::prepareResponse($response, $request);
		Event::fire('app.after');

		// Return a DOMCrawler based on the response.
		return $this->crawl($uri, $response);
	}

	public function crawl($uri, $response)
	{
		// Create DOMCrawler from response data.
		$crawler = new Crawler(null, $uri);
		$crawler->addContent(
			$response->getContent(),
			$response->headers->get('Content-Type', 'text/html')
		);

		// Assign response to crawler.
		$crawler->response = $response;

		return $crawler;
	}
}