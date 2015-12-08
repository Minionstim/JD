<?php
class UserAction extends Action{
	function register(){
		$this->display();
	}
	function regsave(){
		$userOb=D("User");
		$re=$userOb->addUser();
		if($re){
			        echo "<script type='text/javascript'>";
			        echo "	alert('注册成功！');";
					echo "	window.location='".__APP__."/User/register';";
					echo "</script>";
		}else{
			//获取错误信息,提示并跳转
			$errInfo=$userOb->getError();
			$this->error($errInfo,"register");
		}
	}
	function login(){
		$tourl=$_GET['tourl'];
		$this->assign('tourl',$tourl);
		$this->display();
		
	}
	
	function check(){
		$mOb=M("user");
		$username=$_POST['username'];
		$password=$_POST['password'];
		$re=$mOb->where("username='{$username}' && password='{$password}'")->find();
		if(!empty($re)){
			setcookie("userid",$re['id'],0,'/');
			setcookie('username',$re['username'],0,"/");
			if(!empty($_POST['tourl']))
				header("location:".str_replace('@',"/",$_POST['tourl']));
			else 
				header("location:".U("Index/index"));
		}
	}
	
	
	
	
	
	
	
	
}