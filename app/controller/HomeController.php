<?php

class HomeController extends BaseController
{
	protected $layout = 'layout.master';

	protected function setupLayout()
	{
		$this->view->share('title', 'Home');
	}
	
	public function index()
	{
		$this->layout->nest('content', 'home.index');
		$this->view->share('name', 'World');
	}
}