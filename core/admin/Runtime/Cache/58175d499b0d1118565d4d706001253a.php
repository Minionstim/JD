<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>后台管理页面</title>
</head>
<body>
<h1>京东后台管理中心</h1>
<hr/>
<div>
<a href="__APP__/Type/oper">分类区</a>&nbsp;|&nbsp;
<a href="__APP__/Product/oper">产品区</a>&nbsp;|&nbsp;
<a href="__APP__/Cart/index">订单区</a>&nbsp;|&nbsp;
<a href="">管理员区</a>&nbsp;|&nbsp;
</div>
<hr/>
<div><h3>欢迎进入京东后台管理中心</h3></div>
<table>
	<tr>
		<th>管理员名字：</th>
		<th><?php echo ($adminname); ?></th>
	</tr>
	<tr>
		<th>管理权限：</th>
		<th><?php echo ($userType); ?></th>
	</tr>
</table>
</body>
</html>