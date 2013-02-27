<?php

class ErrorControllerTest extends TestCase
{
	public function testIndexNoDebug()
	{
		// Mock config, exception and view.
		
		Config::set('app.debug', false);

		$exception = new Exception('Message');
		try { throw $exception; } catch(Exception $e) {}

		$expected = View::make('layout.error');
		$expected->nest('content', 'error.500', array('e' => $e));

		// Instance test.
		
		$controller = App::make('ErrorController');

		$view = $controller->index(500, $e);
		$view = ($view) ? $view : BaseController::getLayoutInstance();

		$this->assertInstanceOf('Illuminate\View\View', $view);
		$this->assertEquals('layout.error', $view->getName());
		$this->assertEquals('error.500', $view->content->getName());
		$this->assertEquals($expected->render(), $view->render());
	}

	public function testIndexDebug()
	{
		// Mock config, exception and view.
		
		Config::set('app.debug', true);

		$exception = new Exception('Message');
		try { throw $exception; } catch(Exception $e) {}

		$expected = View::make('fluxcore.debug.exception')->with('e', $e);

		// Instance test.
		
		$controller = App::make('ErrorController');

		$view = $controller->index(500, $e);
		$view = ($view) ? $view : BaseController::getLayoutInstance();

		$this->assertInstanceOf('Illuminate\View\View', $view);
		$this->assertEquals('fluxcore.debug.exception', $view->getName());
		$this->assertEquals($expected->render(), $view->render());
	}
}