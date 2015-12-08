<?php
class CertAction extends Action{
	function add(){
		if(!empty($_POST)){
			//更新购物车
			$arr=$_POST['num'];
			
		}else{
			$pid=$_GET['pid'];//产品id
			$num=1;//默认买一个
			//读cookie，看购物车中是否已经有记录
			if(isset($_COOKIE['cert']) && !empty($_COOKIE['cert'])){
				$arr=unserialize($_COOKIE['cert']);
				//判断是否买的一个产品
				if(isset($arr[$pid])){
					$arr[$pid]=$arr[$pid]+1;
				}else{
					$arr[$pid]=$num;
				}
			}else{
				$arr=array($pid=>$num);
			}
			
		}
		$strArr=serialize($arr);
		setcookie("cert",$strArr,time()+30*24*3600,"/");
		//跳转到购物车列表
		header("location:".U("Cert/index"));
	}
	function index(){//购物车列表
		//去cookie中拿数据
		if(!empty($_COOKIE['cert'])){
			$str=$_COOKIE['cert'];
			$arr=unserialize($str);
			
			$pOb=M("Product");
			$imageOb=M("Pimage");
			$newArr=array();
			$money=0;
			foreach($arr as $k=>$v){//根据产品id，获取产品数据
				$pArr=$pOb->where("id={$k}")->find();
				$imageArr=$imageOb->where("pid=$k")->find();
				$pArr['picname']=$imageArr['picname'];
				$pArr['num']=$v;
				$newArr[]=$pArr;
				$money+=$v*$pArr['userprice'];
			}
			$this->assign('arr',$newArr);
			$this->assign('money',$money);
				
		}
		$this->display();
		
	}
	//单条删除
	function delete(){
		$pid=$_GET['pid'];
		//去cookie中删除
		$str=$_COOKIE['cert'];
		$arr=unserialize($str);
		unset($arr[$pid]);
		setcookie("cert",serialize($arr),time()+30*24*3600,"/");
		header("location:".U("Cert/index"));
	}
	//清空购物车
	function clear(){
		setcookie("cert",'',time()-1,"/");
		header("location:".U("Cert/index"));
	}
	//去结算
	function checkout(){
		//是否登录
		if(isset($_COOKIE['userid'])){
			//已经登录，显示结算页面
			echo "结算页面";
		}else{
			//如果未登录，跳转到登录
			$tourl=str_replace("/","@",U("Cert/checkout"));
			$this->error("请登录会员",str_replace(".html.html",'.html',U("User/login",array('tourl'=>$tourl))));
		}
	}
	
	
	
	
	
	
	
	
	
}