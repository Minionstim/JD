<?php
  class IndexAction extends Action
  {
    public function index()
    {
      $this -> display();
    }
    public function login()
    {
      $trueCode = $_SESSION["trueCode"];
      $code = $_POST["verifi"];
      $adminname = $_POST["adminname"];
      $password = $_POST["password"];
      if($trueCode == $code)
      {
        $re = M("manager") -> where("adminname='{$adminname}' AND password='{$password}'") -> select();
        if($re)
        {  
           $_SESSION["adminname"] = $re[0]["adminname"];
           $_SESSION["userType"] = $re[0]["userType"];
          $this -> success("登陆成功",U("BackG/index"));
        }else
        {
          $this -> success("用户名或密码错误",U("Index/index"));
        }
      }else
      {
        $this -> success("验证码错误",U("Index/index"));
      }
    }
  }
