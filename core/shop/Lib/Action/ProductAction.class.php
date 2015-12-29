<?php
	class ProductAction extends Action
	{
		function detail()
		{
			$pid = $_GET['id'];//接收产品id
			//该产品图片名称 
			$imageOb = M("Pimage");
			$imageArr = $imageOb -> where("pid=$pid") -> select();
			//根据产品id，获取产品信息
			$productOb = M("Product");
			$productArr = $productOb -> where("id=$pid") -> select();
			//根据产品分类，获取分类名称，并拼一个字符串
			$typeid = $productArr[0]['typeid'];
			//去掉收尾的>
			$typeid = trim($typeid,">");
			$typeArr = explode(">",$typeid);
			$typeOb = M('Type');
			$typeStr = "";
			foreach($typeArr as $v)
			{
				$arr = $typeOb -> where("id=$v") -> select();
				$typeStr.=" <code>&gt;</code> {$arr[0]['tname']}";
			}
		  $htmlContent = getTypeContent();
		  $this -> assign('htmlContent',$htmlContent);
			$this -> assign('typeStr',$typeStr);
			$this -> assign('imageArr',$imageArr);
			$this -> assign('productArr',$productArr[0]);
			$this -> display();
		}
		public function productList()
		{  
		  $htmlContent = getTypeContent();
		  $this -> assign('htmlContent',$htmlContent);
		  $this -> display();
		}
	}