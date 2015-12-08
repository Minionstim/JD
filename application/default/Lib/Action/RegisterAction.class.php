<?php
	class RegisterAction extends Action
	{
		public function index()
		{
			$this->display();
		}
		//用户协议
		public function article()
		{
			$this->display();
		}
		//忘记密码
		public function password()
		{
			$this->display();
		}
		public function zhuce(){
			$ob= M ('userinfo');
			$_POST['pubTime']=time();
			$re=$ob->data($_POST)->add();
			var_dump($re);
			// if ($re==false){
			// 	$this->success("注册失败！请重新注册",__APP__."/Register/index");
			// }
			// else
			// {
			// 	$this->success("注册成功！前往登录页",__APP__."/Login/login");
			// }
		}
	}
?>