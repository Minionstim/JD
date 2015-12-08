<?php
class BaseAction extends Action{
	function _initialize(){
		//判断是否登录
		if(!isset($_SESSION['userMsg'])){
			$this->error("您没有登录",U("/Login/login"));
			exit();
		}
	}
}