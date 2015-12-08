<?php
class NewsAction extends Action{
	function index(){
		$cid=$_GET['cid'];
		//获取某栏目下的文章数据
		$arr=M("news")->where("cateid=$cid")->select();
		//传给模板
		$this->assign('arr',$arr);
		//显示模板
		$this->display();
	}
	function add(){
		//展现添加表单页面
		$this->display();
	}
	function save(){
		//处理表单提交的数据
		$mOb=new Model();
		//当前的时间戳
		$_POST['pubtime']=time();
		$re=$mOb->table("news")->add($_POST);
		if($re){
			$this->success("添加成功","index/cid/{$_POST['cateid']}");
		}else{
			$this->error('添加失败',"add/cid/{$_POST['cateid']}");
		}
			
	}
	function update(){
		$id=$_GET['id'];
		$re=M('news')->where("id={$id}")->find();
		$this->assign("arr",$re);
		$this->display();
	}
	function change(){
		$id=$_GET['id'];
		if($_POST!=NULL){
			$data=array(
					'title'=>$_POST['title'],
					'content'=>$_POST['content'],
					'writer'=>$_POST['writer']
			);
		$re=M('news')->where("id=$id")->save($data);
		if($re){
			$this->success("修改成功","__APP__/News/update/id/{$id}");
		}else{
			$this->error('修改失败',"__APP__/News/update/id/{$id}");
		}
		}
	}
	function del(){
		$id=$_GET['id'];
		$re=M('news')->where("id={$id}")->delete();
		if($re){
			$this->success("删除成功","__APP__/Index/change");
		}else{
			$this->error('删除失败',"__APP__/News/update/id/{$id}");
		}
	}
}