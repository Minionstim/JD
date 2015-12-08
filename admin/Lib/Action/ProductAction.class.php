<?php
class ProductAction extends Action{
	function index(){//呈现产品的管理列表
		//接收栏目id
		$cid=$_GET['cid'];
		//根据栏目id，获取栏目下的产品数据
		$mOb=M("product");
		$arr=$mOb->where("cateid=$cid")->select();
		//把数据传递 给模板
		$this->assign('arr',$arr);
		//显示模板
		$this->display();
	}
	function add(){
		$this->display();
	}
	function save(){
		if(!empty($_FILES)){
			//图片上传
			import("ORG.Net.UploadFile");
			$upload=new UploadFile();
			//指定大小
			$upload->maxSize=1024*1024*3;
			//指定类型
			$upload->allowExts=array("gif",'jpg','png','jpeg');
			//保存的目录
			$upload->savePath="./Public/upload/";
			//保存图片
			$re=$upload->upload();
			if($re){
				$uploadArr=$upload->getUploadFileInfo();
			}else{
				$this->error("图片上传失败","add/cid/{$_POST['cateid']}");
				exit();
			}
		}
		//写产品数据
		$pOb=M("product");
		$_POST['pubtime']=time();
		$re1=$pOb->add($_POST);
		if($re1){
			//产品图片表
			if(isset($uploadArr) && is_array($uploadArr)){
				$imageOb=M("pimage");
				foreach($uploadArr as $v){
					$imageName=$v['savename'];
					//insert into pimage(pid,picname) value($re1,'$imageName')
					$re2=$imageOb->add(array('pid'=>$re1,'picname'=>$imageName));	
				}
				if($re2){
					$this->success("产品添加成功","index/cid/{$_POST['cateid']}");
				}else{
					$this->success("产品添加成功,图片上传失败","index/cid/{$_POST['cateid']}");
				}
			}else{
				$this->success("产品添加成功","index/cid/{$_POST['cateid']}");
			}
			
		}else{
			$this->error("产品添加失败","add/cid/{$_POST['cateid']}");
		}	
	}
	function update(){
		$id=$_GET['id'];
		$re=M('product')->where("id={$id}")->find();
		$this->assign("arr",$re);
		$this->display();
	}
	function change(){
		$id=$_GET['id'];
		if($_POST!=NULL){
			$data=array(
					'title'=>$_POST['title'],
					'content'=>$_POST['content'],
					'price'=>$_POST['price'],
					'brand'=>$_POST['brand'],
					'userprice'=>$_POST['userprice'],
					'guige'=>$_POST['guige']
			);
			$re=M('product')->where("id=$id")->save($data);
			if($re){
				$this->success("修改成功","__APP__/Product/update/id/{$id}");
			}else{
				$this->error('修改失败',"__APP__/Product/update/id/{$id}");
			}
		}
	}
	function del(){
		$id=$_GET['id'];
		$re=M('product')->where("id={$id}")->delete();
		if($re){
			$this->success("删除成功","__APP__/Index/change");
		}else{
			$this->error('删除失败',"__APP__/Product/update/id/{$id}");
		}
	}
}