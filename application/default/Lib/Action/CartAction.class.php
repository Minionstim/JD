<?php
	class CartAction extends Action
	{
		public function index()
		{
			$userId = $_SESSION["userMsg"]["userId"];
			$carInfo = M()->query("select * from carInfo a inner join goodsInfo b on a.goodsId=b.goodsId and userId={$userId}");
			//var_dump($carInfo);exit;
			$this->assign("carInfo",$carInfo);
			$this->display();
		}
		//更新购物车
		public function update()
		{
			$this->display("index");
		}
		//结算
		public function flow()
		{
			$this->display();
		}
		//处理结算
		public function checkflow()
		{
			//$this->display();
			$this->redirect("Cart/orderdetails");
		}
		//订单详情
		public function orderdetails()
		{
			$this->display();
		}
		//订单提交成功
		public function ordersuccess()
		{
			$this->display();
		}
	}
?>