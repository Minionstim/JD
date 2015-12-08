<?php
	class DiyAction extends Action
	{
		public function index()
		{
			$this->assign("pageName","Diy");
			$this->display();
		}
		public function diy()
		{
			$this->display();
		}
	}
?>