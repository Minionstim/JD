<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
</head>
<body>
<div><h1>当前操作：管理产品</h1></div>
<hr/>
<div>
<a href="__APP__/Product/add">添加产品</a>&nbsp;|&nbsp;
<a href="__APP__/Product/oper">管理产品</a>&nbsp;|&nbsp;
<a href="__APP__/BackG/index">管理中心
</a></div>
<hr/>
<div>当前操作：修改产品</div>
<form enctype="multipart/form-data" action="__APP__/Product/update/id/<?php echo ($re["id"]); ?>" method="post">
<table>
	<tr>
		<td>产品名称：</td>
		<td><input type="text" name="pname" value="<?php echo ($re["pname"]); ?>"/></td>
	</tr>
	<tr>
		<td>产品分类：</td>
		<td>
		<select name="typeid" value="<?php echo ($re["typeid"]); ?>">
			<?php echo ($str); ?>
		</select>
		</td>
	</tr>
	<tr>
		<td>图片：</td>
		<td><input type="file" multiple="multiple" name="upload[]"/></td>
	</tr>
	<tr>
		<td>价格：</td>
		<td><input type="text" name="price" value="<?php echo ($re["price"]); ?>"/></td>
	</tr>
	<tr>
		<td>会员价格：</td>
		<td><input type="text" name="userprice" value="<?php echo ($re["userprice"]); ?>"/></td>
	</tr>
	<tr>
		<td>优惠价格：</td>
		<td><input type="text" name="buyprice" value="<?php echo ($re["buyprice"]); ?>"/></td>
	</tr>
	<tr>
		<td>优惠数量：</td>
		<td><input type="text" name="buynum" value="<?php echo ($re["buynum"]); ?>"/></td>
	</tr>
	<tr>
		<td>品牌：</td>
		<td><input type="text" name="brand" value="<?php echo ($re["brand"]); ?>"/></td>
	</tr>
	<tr>
		<td>库存量：</td>
		<td><input type="text" name="num" value="<?php echo ($re["num"]); ?>"/></td>
	</tr>
	<tr>
		<td>规格参数：</td>
		<td><textarea name="format" rows="6" cols="50"><?php echo ($re["format"]); ?></textarea></td>
	</tr>
	<tr>
		<td>产品介绍：</td>
		<td><textarea name="intro" rows="6" cols="50"><?php echo ($re["intro"]); ?></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="添加"/></td>
	</tr>
</table>
</form>
</body>
</html>