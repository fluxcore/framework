<?php

use Illuminate\View\Environment;

abstract class BaseController
{
	protected $layout;
	protected $view;
	protected $viewPointer = 0;

	function __construct(Environment $view)
	{
		// Store down view environment.
		$this->view = $view;

		// If a layout is defined for controller, create it
		// and store it internally.
		if($this->hasLayout()) {
			$this->layout = $this->view->make($this->layout);
		}

		// Call layout setup method. (optional)
		$this->setupLayout();
	}

	function __toString()
	{
		// Proxy __toString to layouts __toString if controller
		// has layout, otherwise null.
		return ($this->hasLayout())
			? $this->layout->__toString()
			: null;
	}

	public function hasLayout()
	{
		return $this->layout != null;
	}

	protected function setupLayout()
	{
		// This is called if layout hasn't been implemented
		// in the controller.
	}

	public function addView($view, $key = null)
	{
		// If controller doesn't have layout, return now as
		// we can't add a view to a layout that hasn't been
		// specified.
		if(!$this->hasLayout()) {
			return;
		}

		// If no key is defined, just add the view incrementally
		// using the internal view pointer, otherwise use the
		// key that was provided.
		$key = ($key == null) ? $this->viewPointer++ : $key;

		// Assign view.
		$this->layout["__view_{$key}"] = $this->view->make($view);
	}
}