<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div><a href="__APP__/Category/index">栏目管理</a></div>
<div>当前位置：栏目添加</div>
<form action="__APP__/Category/save" method="post">
<table>
	<tr>
		<td>栏目名称</td>
		<td><input type="text" name="cname"/></td>
	</tr>
	<tr>
		<td>数据类型</td>
		<td><select name="mtype">
		<option value="文章">文章</option>
		<option value="产品">产品</option>
		</select></td>
	</tr>
	<tr>
		<td>父级栏目</td>
		<td><select name="fid">
			<option value="0">顶级</option>
			<?php echo ($pStr); ?>
		</select></td>
	</tr>
	<tr>
		<td>是否显示</td>
		<td><input type="radio" name="isshow" value="1"/>显示&nbsp;&nbsp;<input type="radio" name="isshow" value="0" checked="checked"/>不显示</td>
	</tr>
	<tr>
		<td>栏目内容</td>
		<td><textarea style="width:500px;height:200px;" name="content"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" ><input type="submit" value="添加栏目"/></td>
	</tr>
</table>
</form>
</body>
</html>