<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
</head>
<body>
<div><a href="__APP__/Type/add">添加分类</a>&nbsp;|&nbsp;<a href="__APP__/Type/oper">管理分类</a>&nbsp;|&nbsp;<a href="__APP__/Product/oper">管理产品</a></div>
<hr/>
<div>当前操作：管理分类</div>
<table>
	<tr>
		<th>id</th>
		<th>tname</th>
		<th>管理</th>
	</tr>
	<?php echo ($str); ?>
</table>
</body>
</html>