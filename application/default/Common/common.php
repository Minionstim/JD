<?php
	//获得一个订单编号
	function getOrderId()
	{
		$orderId = time();
		for($i=0;$i<3;$i++)
		{
			$orderId .= rand(0,9);
		}
		return $orderId;
	}
	//计算所有商品总价
	function total($carInfo)
	{
		$totalPrice = 0;//所有商品总价
		foreach ($carInfo as $v)
		{
			$s = $v["new_price"] * $v["goodsCount"];
			$totalPrice += $s;
		}
		return $totalPrice;
	}
	//计算该商品总价
	function sum($new_price,$goodsCount)
	{
		$s = $new_price * $goodsCount;
		return $s;
	}
?>