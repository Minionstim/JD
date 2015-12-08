<?php
	class GoodsAction extends Action
	{
		public function index()
		{
			$id=$_GET['id'];
			$ob= M ('goodsinfo')->where("goodsId=$id")->find();
			$this->assign('ob',$ob);
			$this->display();
			// $bookInfo = M("goodsinfo")->select();
			 $this->assign("id",$id);
			// $this->display();
		}
	}
?>