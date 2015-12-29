<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">
  function changeImg()
  {
    document.getElementById("myImg").src = "__ROOT__/Public/images/verifi.php?id="+new Date();
  }
  function checklogin()
  {
    if(document.frm.adminname.value == "")
    {
      alert("请输入用户名!");
      document.frm.adminname.focus();
      return false;
    }
    else if(document.frm.password.value == "")
    {
      alert("请输入密码！");
      document.frm.password.focus();
      return false;
    }
    else if(document.frm.verifi.value == "")
    {
      alert("请输入验证码！");
      document.frm.verifi.focus();
      return false;
    }
  }
</script>
<title>后台登录</title>
</head>
<body>
<div><h1>京东后台登录系统</h1></div>
<form name="frm" action="__APP__/Index/login" method="post" onsubmit="return checklogin()">
<table>
	<tr>
	  <td>用户名</td>
	  <td><input type="text" name="adminname"></td>
	</tr>
	<tr>
	  <td>密码</td>
	  <td><input type="password" name="password"></td>
	</tr>
	<tr>
	  <td>验证码</td>
	  <td><input type="text" name="verifi" size="5" maxlength="4"><img id="myImg" onclick="changeImg()" alt="看不清，换一张" title="看不清，换一张" src="__ROOT__/Public/images/verifi.php" align="absmiddle"/></td>
	</tr>
	<tr>
		<td><input type="submit" value="添加"/></td>
		<td><input type="reset" value="重置"/></td>
	</tr>
</table>
</form>
</body>
</html>