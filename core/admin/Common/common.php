<?php
	function getTypen($fid = 0,$num = 0)
	{
		$mOb = M("type");
		$arr = $mOb -> where("fid=$fid") -> select();
		$optionStr="";
		//产生缩进字符串 --
		$indentStr = str_repeat("--",$num);
		$num++;
		foreach($arr as $v)
		{
			$optionStr.="<option value='{$v['id']}'>{$indentStr}{$v['tname']}</option>";
			//看一看，有没有子类,自己调用自己
			$sonStr = getTypen($v['id'],$num);
			$optionStr.=$sonStr;
		}
		return $optionStr;
	}
	function getTypeTr($fid = 0,$num = 0)
	{
		$mOb = M("Type");
		$arr = $mOb -> where("fid=$fid and state=0") -> select();
		$trStr = "";
		//产生缩进字符串
		$indentStr = str_repeat("--",$num);
		$num++;
		foreach($arr as $v)
		{
			$trStr.="<tr><td>{$v['id']}</td><td>{$indentStr}{$v['tname']}</td><td><a href='".U("Type/update",array('id'=>$v['id']))."'>修改</a>&nbsp;|&nbsp;<a href='".U('Type/delete',array('id'=>$v['id']))."'>删除</a></td></tr>";
			//看一看，有没有子类，自己调用自己
			$trStrSon = getTypeTr($v['id'],$num);
			$trStr.=$trStrSon;
		}
		return $trStr;
	}
	function getTypep($fid = 0,$valueStr = "",$num = 0)
	{
		$mOb = M('Type');
		$arr = $mOb -> where("fid=$fid and state=0") -> select();
		$optionStr = "";
		$indentStr = str_repeat("--",$num);
		$num++;
		$valueStr.=$fid.">";
		foreach($arr as $v)
		{
			$optionStr.="<option value='{$valueStr}{$v['id']}>'>{$indentStr}{$v['tname']}</option>";
			$reStr = getTypep($v['id'],$valueStr,$num);
			$optionStr.=$reStr;
		}
		return $optionStr;
	}
