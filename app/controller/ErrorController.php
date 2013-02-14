<?php

class ErrorController extends BaseController
{
	protected $layout = 'layout.error';

	public function index($code, $e)
	{
		$this->view->share('e', $e);

		switch($code) {
			default: $this->addView('error.500'); break;
			case 404: $this->addView('error.404'); break;
		}

		// Do something with $e. (log)
		
		return $this;
	}
}