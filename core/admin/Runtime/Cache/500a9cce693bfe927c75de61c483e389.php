<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
</head>
<body>
<div><h1>当前操作：添加分类</h1></div>
<hr/>
<div>
<a href="__APP__/Type/add">添加分类</a>&nbsp;|&nbsp;
<a href="__APP__/Type/oper">管理分类</a>&nbsp;|&nbsp;
<a href="__APP__/BackG/index">管理中心</a>
</div>
<hr/>
<form action="__APP__/Type/tsave" method="post">
<table>
	<tr>
		<td>分类名称：</td>
		<td><input type="text" name="tname"/></td>
	</tr>
	<tr>
		<td>父分类：</td>
		<td><select name="fid">
			<option value="0">一级分类</option>
			<?php echo ($str); ?>
		</select></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="添加"/></td>
	</tr>
</table>
</form>
</body>
</html>