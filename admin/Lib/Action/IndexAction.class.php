<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
	public function index(){
	
		$this->display();
	}
	function save(){//添加栏目
		$re=M('category')->add($_POST);
		if($re){
			$this->success("提交成功","change");
		}else{
			$this->error("提交失败","add");
		}
	}
    function add(){
    	$optionStr=getCategory(0);
		$this->assign('pStr',$optionStr);
    	$this->display("add");
    }
    function change(){
    	import("ORG.Util.Page");
    	$rowCount=M("category")->count();
    	$page=new Page($rowCount,8);
    	$cInfo=M('category')->query("select * from category limit $page->firstRow,$page->listRows");
    	$reArr=getCategoryByArray(0,0);
    	
    	$this->assign("cInfo",$cInfo);
    	$this->assign("pageList",$page->show());
    	$this->assign('carr',$reArr);
    	$this->display("change");
    }
    function del(){
    	$id=$_GET["id"];
    	if($id!=null){
    		$data=array(
    				"state"=>1
    		);
        $re=M("category")->where("id={$id}")->save($data);
    	if($re){
    		$this->success("栏目删除成功！","__APP__/Index/change");
    	}else{
    		$this->error("栏目删除失败！","__APP__/Index/change");
    	}
    	}
    }
    function update(){
    	$id=$_GET['id'];
    	//修改操作
    	$re=M('category')->where("id={$id}")->find();
    	if($_POST!=null){
    	$result=M("category")->where("id={$id}")->save($_POST);
 	if($result){
    		$this->success("栏目更新成功！","__APP__/Index/change");
    	}else{
    		$this->error("栏目更新失败！","__APP__/Index/change");
    	} 
    	}
        $this->assign("re",$re);
    	$this->display('update');
    }
    	
}


