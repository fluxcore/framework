<?php

use Illuminate\View\Environment;

abstract class BaseController
{
	protected static $layoutInstance;

	public static function getLayoutInstance()
	{
		return self::$layoutInstance;
	}

	protected $layout;
	protected $view;

	function __construct(Environment $view)
	{
		// Store View environment.
		$this->view = $view;

		// If a layout is defined for controller, create it
		// and store it internally.
		if (!is_null($this->layout)) {
			self::$layoutInstance = View::make($this->layout);
			$this->layout = self::$layoutInstance;
		}

		// Call layout setup method. (optional)
		$this->setupLayout();
	}

	public function hasLayout()
	{
		return !is_null($this->layout);
	}

	protected function setupLayout()
	{
		// This is called if layout hasn't been implemented
		// in the controller.
	}
}