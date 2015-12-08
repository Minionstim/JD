<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>当前位置：栏目管理</div>
<div ><a href="__APP__/Category/add">栏目添加</a></div>

<form action="__APP__/Category/update" method="post">
<table border="1" bgcolor="gray" align="center">
	<tr>
		<td>id</td>
		<td>名称</td>
		<td>数据类型</td>
		<td>内容</td>
		<td>排序</td>
		<td colspan="2">操作</td>
	</tr>
	<?php if(is_array($carr)): foreach($carr as $key=>$v): ?><tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo (str_repeat('&nbsp;&nbsp;',$v["num"])); echo ($v["cname"]); ?></td>
		<td><?php echo ($v["mtype"]); ?></td>
		<td><a href="__APP__/News/index"><?php echo ($v["content"]); ?></a></td>
		<td><input value="<?php echo ($v["ordernum"]); ?>"  type="text" name="ordernum[<?php echo ($v["id"]); ?>]"/></td>
		<td><a href="">修改</a></td>
		<td><a href="">删除</a></td>
	</tr><?php endforeach; endif; ?>	
	<tr>
		<td colspan="7"><input type="submit" value="保存"/></td>
	</tr>
</table>
</form>
</body>
</html>