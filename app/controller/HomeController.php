<?php

class HomeController extends BaseController
{
	protected $layout = 'layout.master';
	
	public function index()
	{
		$this->layout->nest('content', 'home.index');
		$this->view->share('name', 'World');
	}
}