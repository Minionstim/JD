<?php
	class LoginAction extends Action
	{
		public function index()
		{
			$this->display();
		}
		//通过问题找回密码
		public function qpassword()
		{
			$this->display();
		}
		function login(){
			$u=$_POST['username'];
			$p=$_POST['password'];
			$ob=M('userinfo')->where("userName='$u' and passWord='$p'")->find();
			if ($ob==null){
				$this->success("会员登陆失败！",__APP__."/Login/index");
			}
			else
			{
				$_SESSION["userMsg"] = $ob;
				//var_dump($_SESSION['userMsg']);
				$this->success("会员登陆成功！",__APP__."/Index/index");
			}
		}
	}
?>