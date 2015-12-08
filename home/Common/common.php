<?php
function getCategory(){
	//获取第一级数据
	$mOb=M("category");
	$arrOne=$mOb->where("fid=0 and mtype='产品'")->select();
	$typeStr="";
	foreach($arrOne as $v1){
		$typeStr.=" <div class=\"item  fore\" onMouseOver=\"this.className='item  fore  hover';\"  onMouseOut=\"this.className='item  fore';\">
         <span>
          <h3>
          <a href=\"".__ROOT__."/index.php/Proudct/index/cid/{$v1['id']}\">{$v1['cname']}</a>
	          </h3>
	          </span>
	          ";
	          //获取当前第一级下第二级
	          $arrTwo=$mOb->where("fid=".$v1['id'])->select();
	          //var_dump($arrTwo);
	          //遍历arrTwo
    		$typeStr.="<div class=\"i-mc\"><div class=\"subitem\">";
	    		foreach($arrTwo as $v2){
    			$typeStr.="
    
       
             	<!-- 呈现第二级 -->
				<dl  class=\"fore\" >
				<dt><a href=\"".__ROOT__."/index.php/Product/index/cid/{$v2['id']}\">{$v2['cname']}</a></dt>
					<dd>
					<!-- 显示第三级 -->
	          ";
	          //获取第三级
	          $arrThree=$mOb->where("fid={$v2['id']}")->select();
	          foreach($arrThree as $v3){
    					$typeStr.="<em><a href=\"".__ROOT__."/index.php/Product/index/cid/{$v3['id']}\">{$v3['cname']}</a></em>";
	          }
				$typeStr.="
						<em><a href=\"category.php?id=356\">更多&gt;&gt;</a></em>
    			</dd>
	    							</dl>
	    								
	    								
    			";
    		}
    	$typeStr.="</div>
			<div class=\"fr\"><dl class=\"brands\">
				<dt>推荐品牌</dt><dd> </dd></dl>
				</div></div></div>";
	    	}
	    return $typeStr;
}