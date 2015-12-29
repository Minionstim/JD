<?php
header("content-type:text/html;charset=utf-8");
  class ProductAction extends Action
	{
		public function add()
		{
			$str = getTypep();
			$this -> assign('str',$str);
			$this -> display();
		}
		public function psave()
		{
			//保存产品，要产品的主键id
			$pOb = M('Product');
			//处理分类字符串
			$_POST['typeid'] = preg_replace("/^0/","",$_POST['typeid']);
			$re = $pOb -> data($_POST) -> add();
			if($re)
			{
				//保存图片
				import("ORG.Net.UploadFile");
				$upload = new UploadFile();
				$upload -> allowExts = array('jpg','gif','jpeg','png');
				$upload -> maxSize = 500000;
				$upload -> savePath = "./Public/upload/";
				$re1 = $upload -> upload();
				if($re1)
				{
					//图片信息入库
					$imageArr = $upload -> getUploadFileInfo();
					$imageOb = M("Pimage");
					foreach($imageArr as $v)
					{
						$imageName = $v['savename'];
						$re2 = $imageOb -> data(array('path'=>$imageName,'pid'=>$re)) -> add();
					}
					if($re2)
					{
						$this -> success("图片信息入库成功",U("Product/oper"));
					}else
					{
						$this -> error("图片信息入库失败",U("Product/add"));
					}
				}else
				{
					$this -> error("产品图片保存失败",U('Product/add'));
				}
				
			}else
			{
				$this -> error("添加失败",U("Product/add"));
			} 
		}
		public function oper()
		{
			$mOb = M('product');
			$arr = $mOb -> select();
			foreach($arr as $v)
			{
				$operstr.="<tr><td>&nbsp;{$v['id']}</td><td>&nbsp;{$v['pname']}</td><td>&nbsp;&nbsp;<a href='".U("Product/upshow",array('id'=>$v['id']))."'>修改</a>&nbsp;<a href='".U("Product/del",array('id'=>$v['id']))."'>删除</a></td></tr>";
			}
			$this -> assign('operstr',$operstr);
			$this -> display();
		}
		public function del()
		{
			$id = (int)$_GET['id'];
			$mOb = M("product");
			$re = $mOb -> where("id=$id") -> delete();
			if($re)
			{
				$this -> success("删除成功",U("Product/oper"));
			}else
			{
				$this -> error("删除失败",U("Product/oper"));
			}
		}
		public function upshow()
		{
			$str = getTypep();
			$id = (int)$_GET['id'];
			$mOb = M("product");
			$re = $mOb -> where("id=$id") -> find();
			$this -> assign('str',$str);
			$this -> assign('re',$re);
			$this -> display();
		}
		public function update()
		{
			$id = (int)$_GET['id'];
			//跟新产品，要产品的主键id
			$pOb = M('Product');
			//处理分类字符串
			$_POST['typeid'] = preg_replace("/^0/","",$_POST['typeid']);
			$re = $pOb -> where("id=$id") -> save($_POST);
			if($re)
			{
				//保存图片
				import("ORG.Net.UploadFile");
				$upload = new UploadFile();
				$upload -> allowExts = array('jpg','gif','jpeg','png');
				$upload -> maxSize = 500000;
				$upload -> savePath = "./Public/upload/";
				$re1 = $upload -> upload();
				if($re1)
				{
					//图片信息入库
					$imageArr = $upload -> getUploadFileInfo();
					$imageOb = M("Pimage");
					foreach($imageArr as $v)
					{
						$imageName = $v['savename'];
						$re2 = $imageOb -> data(array('path'=>$imageName,'pid'=>$re)) -> add();
					}
					if($re2)
					{
						$this -> success("图片信息入库成功",U("Product/oper"));
					}else
					{
						$this -> error("图片信息入库失败",U("Product/upshow"),array('id'=>$id));
					}
				}else
				{
					$this -> error("产品图片保存失败",U('Product/upshow'),array('id'=>$id));
				}
				
			}else
			{
				$this -> error("添加失败",U("Product/oper"));
			} 
		}
	}
