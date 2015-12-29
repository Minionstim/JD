<?php
class UserAction extends Action{
	public function login()
	{
		$url = $_GET['url'];
		$this -> assign('url',$url);
		$this -> display();
	}
	public function check()
	{
		//判断用户名密码是否正确
		$username = $_POST['username'];
		$password = $_POST['password'];
		$url = $_POST['url'];
		$mOb = M("User");
		$re = $mOb -> where("username='$username' and password='$password'") -> find();
		if(is_array($re) && !empty($re))
		{
			//创建会话变量
			setcookie("userid",$re['id'],0,"/");
			setcookie("username",$username,0,"/");
			//跳转
			if($url == null)
			{
			  $this -> success("登录成功",U('Index/index'));
			}
			header("location:".str_replace("|","/",$url));
		}else
		{
			$this->error("登录失败",U('User/login',array('url'=>$url)));
		}
	}
	public function register()
	{
	   //显示注册
	  $this -> display();
	}
	public function adduser()
	{
	  //用户注册
	  $mOb = M("User");
	  $re = $mOb -> data($_POST) -> add();
	  if($re)
	  {
	    $this -> success("注册成功",U("User/login"));
	  }
	  else
	  {
	    $this -> error("注册失败",U("User/adduser"));
	  }
	}
}