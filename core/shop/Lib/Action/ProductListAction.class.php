<?php
  class ProductListAction extends Action
  {
    //展现分类下的产品
    public function productList()
    {
      $htmlContent=getTypeContent();
      $mOb = M('type');
      $result = $mOb -> where('fid=0') -> select();
      $this -> assign('result',$result);
      $this -> assign('htmlContent',$htmlContent);
      $this -> display();
    }
  }