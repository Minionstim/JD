<?php
	class CategoryAction extends Action
	{
		public function index()
		{
			$id = $_GET["id"];
			
			$this->assign("pageName","category{$id}");
			$this->display();
		}
	}
?>