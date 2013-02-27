<?php

use Symfony\Component\HttpFoundation\Request;

class HomeControllerTest extends TestCase
{
	public function testIndex()
	{
		// Mock view.
		
		$expected = View::make('layout.master');
		$expected->nest('content', 'home.index', array('name' => 'World'));

		// Instance test.
		
		$controller = App::make('HomeController');

		$view = $controller->index();
		$view = ($view) ? $view : BaseController::getLayoutInstance();

		$this->assertInstanceOf('Illuminate\View\View', $view);
		$this->assertEquals('layout.master', $view->getName());
		$this->assertEquals('home.index', $view->content->getName());
		$this->assertEquals($expected->render(), $view->render());
	}
}