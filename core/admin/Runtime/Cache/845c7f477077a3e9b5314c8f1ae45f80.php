<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
<script type="text/javascript">
  function conf()
  {
    if(confirm("确定修改？"))
    {
      return true;
    }else
    {
      return false;
    }
  }
</script>
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
		<td>目前状态</td>
		<td>修改状态</td>
		<td>确认修改</td>
	</tr>
<?php if(is_array($Show)): foreach($Show as $key=>$v): ?><tr>
	  <td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["name"]); ?></td>
		<td><?php echo ($v["state"]); ?></td>
		<form name="frm" method="post" action="__APP__/Cart/doUpdate/id/<?php echo ($v["id"]); ?>" onsubmit="return conf()">
		<td>
		  <select name="state">
		    <option value="1">未付款</option>
		    <option value="2">已付款</option>
		    <option value="3">出库中</option>
		    <option value="4">已出库</option>
		    <option value="5">已发货</option>
		    <option value="6">已接收</option>
		  </select>
		</td>
		<td><input type="submit"/></td>
		</form>
	</tr><?php endforeach; endif; ?>
</table>
</body>
</html>