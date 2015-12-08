<?php
	//此类为购物车产品处理类
	class ActionAction extends Action
	{
		//利用ajax修改产品数量
		public function change()
		{
			//获得参数
			$carId = $_POST["carId"];
			//var_dump($carId);
			$goodsCount = $_POST["goodsCount"];
			//var_dump($goodsCount);
			//修改数量
			$data = array(
				"goodsCount"=>$goodsCount
			);
			$result = M("carinfo")->where("carId={$carId}")->save($data);
			//该商品总价、所有商品总价
			$new_price = 0;//该商品总价
			$totalPrice = 0;//所有商品总价
			$userId = $_SESSION["userMsg"]["userId"];
			$carInfo = M()->query("select * from carInfo a inner join goodsInfo b where a.goodsId=b.goodsId and userId={$userId}");
			foreach($carInfo as $v)
			{
				$s = $v["new_price"] * $v["goodsCount"];
				$totalPrice += $s;//所有商品总价
				if($v["carId"] == $carId)
				{
					$new_price = $s;//刚刚修改完的产品的总价
				}
			}
			//返回响应的结果
			$arr = array("new_price"=>$new_price,"totalPrice"=>$totalPrice);
			$json = json_encode($arr);
			echo $json;
		}
		//清空购物车
		public function clear()
		{
			$userId = $_SESSION["userMsg"]["userId"];
			$result = M("carinfo")->where("userId={$userId}")->delete();
			$this->redirect("Cart/index");
		}
		//删除单个商品
		public function delete()
		{
			//要删除的商品的主键值
			$carId = $_GET["carId"];
			//删除记录
			$result = M("carinfo")->where("carId={$carId}")->delete();
			//跳转到购物车页面
			$this->redirect("Cart/index");
		}
		public function index()
		{
			//获得要购买的产品信息
			$goodsId = $_GET["goodsId"];
			$goodsCount = $_GET["goodsCount"];
			$userId = $_SESSION["userMsg"]["userId"];
			var_dump($goodsId,$goodsCount,$userId);
			//添加数据库(向carInfo表添加记录)
			$result = M("carinfo")->where("goodsId={$goodsId} and userId={$userId}")->find();
		
			if($result == NULL)
			{
				//没有重复购买
				$data = array(
					"userId"=>$userId,
					"goodsId"=>$goodsId,
					"goodsCount"=>$goodsCount
				);
				$result = M("carinfo")->add($data);
			}
			else 
			{
				//重复购买，修改数量
				$result = M("carinfo")->where("goodsId={$goodsId} and userId={$userId}")->setInc("goodsCount",$goodsCount);
			
			}
			
			//跳转到购物车页面
			$this->redirect("Cart/index");
		}
	}
?>