<?php

class ErrorController extends BaseController
{
	protected $layout = 'layout.error';

	public function index($code, $e)
	{
		switch($code) {
			case 404: $this->layout->nest('content', 'error.404'); break;
			default: $this->layout->nest('content', 'error.500'); break;
		}

		$this->view->share('e', $e);

		// Do something with $e.
	}
}