<?php 
	class HomeController extends BaseController
	{
		public function index() 
		{
			$content = Article::first()->content;
			$user = Users::first()->name;
			$this->assign('content',$content);
			$this->assign('user',$user);
			$this->display();
		}

		public function view($id)
		{
			if($id > 1){
				$content = 'num > 1';

			}else {
				$content = Article::first()->content;
			}
			$this->assign('content',$content);
			$this->display();
		}
	}