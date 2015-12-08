<?php
class ProductAction extends Action{
	function index(){
		$productOb=M("product");
		$arr=$productOb->select();
		$pimageOb=M("pimage");
		foreach($arr as $k=>$v){
			//获取图片，并加在$arr中
			$imageArr=$pimageOb->where("pid={$v['id']}")->find();
			$v['imagepath']=$imageArr['picname'];
			$arr[$k]=$v;
		}
		$this->assign('arr',$arr);
		$this->display();
	}
	function detail(){
		//接收id
		$id=$_GET['id'];
		//根据id获取产品数据
		$mOb=M("product");
		$pArr=$mOb->where("id=$id")->find();
		//产品图片
		$imageOb=M("pimage");
		$imageArr=$imageOb->where("pid=$id")->select();
		$this->assign('pArr',$pArr);
		$this->assign('imageArr',$imageArr);
		$this->display();
		
		
		
		
	}
}