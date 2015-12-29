<?php
	class TypeAction extends Action
	{
		public function add()
		{//分类添加的表单页面
			$str = getTypen(0);
			$this -> assign('str',$str);
			$this -> display();
		}
		public function tsave()
		{
			//入type表
			$re = M('Type') -> data($_POST) -> add();
			if($re)
			{//添加成功
				$this -> success("添加成功",U("Type/oper"));
			}else
			{
				$this -> error("添加失败",U("Type/add"));
			}
		}
		public function oper()
		{
			$str = getTypeTr(0);
			$this -> assign('str',$str);
			$this -> display();
		}
		public function delete()
		{
			$id = (int)$_GET['id'];
			$mOb = M("Type");
			$re = $mOb -> where("id=$id") -> data(array('state'=>9)) -> save();
			if($re)
			{
				$this -> success("删除成功",U("Type/oper"));
			}else
			{
				$this -> error("删除失败",U("Type/oper"));
			}
		}
		public function update()
		{
			$id = (int)$_GET['id'];
			$this -> display();
		}
		
	}
