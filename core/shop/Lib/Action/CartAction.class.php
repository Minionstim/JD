<?php
header("content-type:text/html;charset=utf-8");
	class CartAction extends Action
	{
		public function add()
		{ //进购物车
			//产品id
			$pid = $_POST['id'];
			//购买的数量
			$num = $_POST['number'];
			if(isset($_COOKIE['cert']))
			{
				$str = $_COOKIE['cert'];
				$arr = unserialize($str);
				$arr[$pid] = $num;
			}else
			{
				$arr = array($pid => $num);
			}
			$str = serialize($arr);
			//进cookie
			setcookie("cert",$str,time()+30*24*3600,"/");
			//跳转到购物车首页
			header("location:".U("Cart/index"));
		}
		public function index()
		{//购物车首页
			//从cookie中产品信息读出
			if(isset($_COOKIE['cert']))
			{
				$str = $_COOKIE['cert'];
				$arr = unserialize($str);
				//根据产品id，去数据表中获取产品记录，拼一个新的二维数据
				$productOb = M("Product");
				$pimageOb = M("Pimage");
				$pArrn = array();
				$money = 0;//总钱数
				foreach($arr as $k=>$v)
				{
					$pArr = $productOb -> where("id=$k") -> select();
					$pArr[0]['cartnum'] = $v;
					//获取产品图片
					$pimageArr = $pimageOb -> where("pid=$k") -> find();
					$pArr[0]['imagename'] = $pimageArr['path'];
					//小计
					$pArr[0]['money'] = $pArr[0]['userprice']*$v;
					$money+=$pArr[0]['userprice']*$v;
					$pArrn[] = $pArr[0];
				}
				//把拼好的二维数据传到模板上
				$this -> assign('pArrn',$pArrn);
				$this -> assign('money',$money);
			}
			//显示购物车中的数据
			$this -> display();
		}
		public function update()
		{
			$str = serialize($_POST['number']);
			//进cookie
			setcookie("cert",$str,time()+30*24*3600,"/");
			//跳转到购物车首页
			header("location:".U("Cart/index"));
		}
		public function delete()
		{
			//接受产品id
			$pid = $_GET['id'];
			//去cookie中读取数据
			$str = $_COOKIE['cert'];
			//反序列化
			$arr = unserialize($str); //array(5=>11,6=>22,7=>33)
			
			//从数组中把相应的产品删掉
			unset($arr[$pid]);
			//再次把数据序列化
			$str = serialize($arr);
			//进cookie
			setcookie("cert",$str,time()+30*24*3600,"/");
			//跳转到购物车首页
			header("location:".U("Cart/index"));
		}
		public function clear()
		{
			setcookie("cert",'',time()-1,"/");
			//跳转到购物车首页
			header("location:".U("Cart/index"));
		}
		//下订单
		public function checkout()
		{
			//获取产品信息
			if(isset($_COOKIE['cert']))
			{
				$str = $_COOKIE['cert'];
				$arr = unserialize($str);
				//根据产品id，去数据表中获取产品记录，拼一个新的二维数据
				$productOb = M("Product");
				$pArrn = array();
				$money = 0;//总钱数
				foreach($arr as $k=>$v)
				{
					$pArr = $productOb -> where("id=$k") -> select();
					$pArr[0]['cartnum'] = $v;
					//小计
					$pArr[0]['money'] = $pArr[0]['userprice']*$v;
					$money+=$pArr[0]['userprice']*$v;
					$pArrn[] = $pArr[0];
				}
				//把拼好的二维数据传到模板上
				$this -> assign('pArrn',$pArrn);
				$this -> assign('money',$money);
			}
			//end
			$this -> display();
		}
		public function success()
		{
			//判断会员是否登录
			if(!isset($_COOKIE['userid']))
			{
				//回来的url地址
				$this -> error("请登录",U("User/login",array('url'=>str_replace("/","|",U('Cart/checkout')))));
				exit();
			}
			//数据入库
			$cartOb = M("Cart");
			$cartinfoOb = M("Cartinfo");
			$_POST['pubtime'] = time();
			$_POST['userid'] = $_COOKIE['userid'];
			$_POST['ip'] = $_SERVER['REMOTE_ADDR'];
			$_POST['state'] = 0;
			//订单信息入库
			$certid = $cartOb -> data($_POST) -> add();
			if($certid)
			{
				//订单详情信息
				$str = $_COOKIE['cert'];
				$arr = unserialize($str);
				foreach($arr as $k=>$v)
				{
					$price = $_POST['productprice'][$k];
					$re = $cartinfoOb -> data(array('cartid'=>$certid,'pid'=>$k,'num'=>$v,'price'=>$price)) -> add();
				}
				if($re)
				{
					header("location:".U("Cart/success2",array('id'=>$certid)));
				}else
				{
					$this -> error("订单生成失败",U("Cart/checkout"));
				}
			}else
			{
				$this -> error("订单生成失败",U("Cart/checkout"));
			}
		}
		public function success2()
		{ 
		  $id = $_GET['id'];
		  $oMb = M('cart');
		  $cartRe = $oMb -> where("id=$id") -> find();
		  switch($cartRe['ems'])
		  {
		    case 1:
		      $cartRe['ems'] = 'EMS 国内邮政特快专递';
		      break;
		    case 2:
		      $cartRe['ems'] = '顺丰速运';
		      break;
		  }
		  switch($cartRe['alipay'])
		  {
		    case 1:
		      $cartRe['alipay'] = '余额支付';
		      break;
		    case 2:
		      $cartRe['alipay'] = '货到付款';
		      break;
		    case 3:
		      $cartRe['alipay'] = '支付宝';
		      break;
		  }
		 	$oMbt = M('cartinfo');
		  $cartinfo = $oMbt -> where("cartid=$id") -> find();
		  $this -> assign('cartRe',$cartRe);
		  $this -> assign('cartinfo',$cartinfo);
		  $this -> display();
		}
	}
