<?php
class UserModel extends Model{
	protected $_validate=array(
			array('username','/^[a-z_][a-z0-9_]{3,19}$/i',"用户名格式错误",1,'regex'),
			array('username','',"用户名已经存在",1,'unique'),
			array('email','email',"邮箱格式错误",1,'regex'),
			array('email','',"邮箱已经存在",1,'unique'),
			array('password','/^\S{6,20}$/i','密码格式错误',1,"regex"),
			array('confirm_password',"password",'两次密码不一致',1,"confirm"),
			array('qq','/^[1-9]\d{3,11}$/',"qq格式错误"),
			array('tel','/^1[34578]\d{9}$/','手机格式错误'),
	);
	function addUser(){
		$re=$this->create();//自动去post中获取数据
		if($re){
			return $this->add();
		}else{
			return false;
		}
	}
	
}