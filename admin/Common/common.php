<?php
function getCategory($fid=0,$num=0){
	//找符合$fid的分类
	static $reStr="";
	$mOb=M('category');
	$arr=$mOb->where("fid={$fid}")->select();
	//自己调用自己
	$num++;
	$spaceStr=str_repeat("&nbsp;", $num*2);
	foreach($arr as $v){
		$reStr.="<option value='{$v['id']}'>{$spaceStr}{$v['cname']}</option>";
		getCategory($v['id'],$num);
	}
	return $reStr;
}
function getCategoryByArray($fid=0,$num=0){
	static $reArr=array();
	$mOb=M("category");
	$arr=$mOb->where("fid={$fid}")->select();
	$num++;
	foreach($arr as $v){
		//当前的分类
		$v['num']=$num;
		$reArr[]=$v;
		//当前分类下的子
		getCategoryByArray($v['id'],$num);
	}
	return $reArr;
}
<?php
function getCategory($fid=0,$num=0){
	//找符合$fid的分类
	static $reStr="";
	$mOb=M('category');
	$arr=$mOb->where("fid={$fid}")->select();
	//自己调用自己
	$num++;
	$spaceStr=str_repeat("&nbsp;", $num*2);
	foreach($arr as $v){
		$reStr.="<option value='{$v['id']}'>{$spaceStr}{$v['cname']}</option>";
		getCategory($v['id'],$num);
	}
	return $reStr;
}
function getCategoryByArray($fid=0,$num=0){
	static $reArr=array();
	$mOb=M("category");
	$arr=$mOb->where("fid={$fid}")->select();
	$num++;
	foreach($arr as $v){
		//当前的分类
		$v['num']=$num;
		$reArr[]=$v;
		//当前分类下的子
		getCategoryByArray($v['id'],$num);
	}
	return $reArr;
}





<?php
function getCategory($fid=0,$num=0){
	//找符合$fid的分类
	static $reStr="";
	$mOb=M('category');
	$arr=$mOb->where("fid={$fid}")->select();
	//自己调用自己
	$num++;
	$spaceStr=str_repeat("&nbsp;", $num*2);
	foreach($arr as $v){
		$reStr.="<option value='{$v['id']}'>{$spaceStr}{$v['cname']}</option>";
		getCategory($v['id'],$num);
	}
	return $reStr;
}
function getCategoryByArray($fid=0,$num=0){
	static $reArr=array();
	$mOb=M("category");
	$arr=$mOb->where("fid={$fid}")->select();
	$num++;
	foreach($arr as $v){
		//当前的分类
		$v['num']=$num;
		$reArr[]=$v;
		//当前分类下的子
		getCategoryByArray($v['id'],$num);
	}
	return $reArr;
}










