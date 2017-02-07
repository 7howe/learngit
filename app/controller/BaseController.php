<?php 
	class BaseController
	{
		protected $view;

		public function __construct()
		{
			$class = get_class($this);
			$template = str_replace("controller", "", strtolower($class));
			$this->view = View::getView()->make($template);
		}


		public function assign($varname,$value)
		{
			$this->view = $this->view->with($varname,$value);
		}
		
		public function display()
		{
			echo $this->view->render();
		}

	}