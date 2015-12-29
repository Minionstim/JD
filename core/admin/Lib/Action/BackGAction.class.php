<?php
  class BackGAction extends Action
  {
    function index()
    {
      $adminname = $_SESSION["adminname"];
      $userType = $_SESSION["userType"];
      $this -> assign('adminname',$adminname);
      $this -> assign('userType',$userType);
      $this -> display();
    }
  }
