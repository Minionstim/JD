<?php
	class AuctionAction extends Action
	{
		public function index()
		{
			$this->assign("pageName","auction");
			$this->display();
		}
		public function view()
		{
			$this->assign("pageName","auction");
			$this->display();
		}
	}
?>