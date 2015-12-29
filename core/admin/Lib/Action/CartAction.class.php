<?php
  class CartAction extends Action
  {
    //订单展示
    public function index()
    {
      $mOb = M("cart");
      $arr = $mOb -> select();
      foreach($arr as $k=>$v)
      {
        switch($v[state])
        {
					case 1:
						$v[state] = '未付款';
						break;
					case 2:
						$v[state] = '已付款';
						break;
					case 3:
						$v[state] = '出库中';
						break;
					case 4:
						$v[state] = '已出库';
						break;
					case 5:
						$v[state] = '已发货';
						break;
					case 6:
						$v[state] = '已接收';
						break;
         }
        $cartStr.="<tr><td>&nbsp;{$v['id']}</td><td>{$v['name']}</td><td>{$v['addr']}</td><td>{$v['tel']}</td><td>{$v['email']}</td><td>{$v['ip']}</td><td>{$v['state']}</td><td><a href='".U("Cart/updateShow",array('id'=>$v['id']))."'>修改状态</a></td><td><a href='".U("Cart/delete",array('id'=>$v['id']))."'>删除订单</a></td></tr>";
      }
      $this -> assign('cartStr',$cartStr);
      $this -> display();
    }
    //显示修改页
    public function updateShow()
    {
      $id = (int)$_GET['id'];
      $mOb = M('cart');
      $arr = $mOb -> where("id=$id") -> select();
      switch($arr[0][state])
      {
        case 1:
          $arr[0][state] = '未付款';
          break;
        case 2:
          $arr[0][state] = '已付款';
          break;
        case 3:
          $arr[0][state] = '出库中';
          break;
        case 4:
          $arr[0][state] = '已出库';
          break;
        case 5:
          $arr[0][state] = '已发货';
          break;
        case 6:
          $arr[0][state] = '已接收';
          break;
      }
      $this -> assign('Show',$arr);
      $this -> display();
    }
    //修改订单状态
    public function doUpdate()
    {
      $id = $_GET['id'];
      $mOb = M("cart");
      $arr = $mOb -> where("id=$id") -> save($_POST);
      if($arr)
      {
        header("Location:".U('Cart/index'));
      }else
      { 
        echo "<script type='text/javascript'>alert('修改失败');</script>";
        header("Location:".U('Cart/updateShow',array('id'=>$id)));
      }
      $this -> display("localhost/core/admin.php/Cart/updateShow/id/$id");
    }
    //删除订单
    public function delete()
    {
      $id = (int)$_GET['id'];
      $mOb = M("cart");
      $mObt = M("cartinfo");
      $arr = $mOb -> where("id=$id") -> delete();
      $arr2 = $mObt -> where("cartid=$id") -> delete();
      if($arr)
      {
        $this -> success("删除成功",U("Cart/index"));
      }else
      {
        $this -> error("删除失败",U("Cart/index"));
      }
    }
  }
  