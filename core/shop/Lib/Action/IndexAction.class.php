<?php
  class IndexAction extends Action
  {
    public function index()
    {
      
      $htmlContent=getTypeContent();
      //查询开头分类
		  $mOb = M('type');
      $result = $mOb -> where('fid=0') -> select();
      //查询热卖产品的前三位
      $mOb = M('cartinfo');
      $re = $mOb -> query('select pid from cartinfo group by pid desc limit 6');
      $mOb = M('product');
      foreach($re as $v)
      {
        $num = $v['pid'];
        $hot[] = $mOb -> query("select * from product as a inner join pimage as b on b.pid=$num where a.id=$num");
      }
      //查询新品上市
      $mOb = M('product');
      $new = $mOb -> query('select * from product as a inner join pimage as b on b.pid=a.id order by a.id desc limit 6');
      
      $this -> assign('new',$new);
      $this -> assign('hot',$hot);
      $this -> assign('result',$result);
      $this -> assign('htmlContent',$htmlContent);
	    $this -> display();  
    }
  }
  