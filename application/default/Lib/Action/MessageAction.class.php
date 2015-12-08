<?php
	class MessageAction extends Action
	{
		public function index()
		{
			$this->assign("pageName","Message");
			
			$this->display();
		}
	}
?>