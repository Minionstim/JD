<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
</head>
<body>
<div><h1>当前操作：订单管理</h1></div>
<hr/>
<div>
<a href="__APP__/Cart/index">订单列表</a>&nbsp;|&nbsp;
<a href="__APP__/BackG/index">管理中心
</a></div>
<hr/>
<div>当前操作：订单列表</div>
<table>
	<tr>
	  <td>订单ID</td>
		<td>名字</td>
		<td>地址</td>
		<td>电话</td>
		<td>邮箱</td>
		<td>IP</td>
		<td>状态</td>
		<td>&nbsp;&nbsp;编&nbsp;辑</td>
	</tr>
	<?php echo ($cartStr); ?>
</table>
</body>
</html>