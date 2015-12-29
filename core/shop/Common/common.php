<?php
	function getTypeContent()
	{
		//获取分类
		$typeOb = M("Type");
		//获取第一级分类
		$typeArr1 = $typeOb -> where("fid=0") -> select();
		$htmlContent = "";
		foreach($typeArr1 as $v1)
		{
			$htmlContent.="<h2> <a target=\"_blank\" href=\"__APP__/ProductList/productList/id/".$v1['id']."\"> {$v1['tname']}</a></h2>";
			//获取当前分类的下一级
			$typeArr2 = $typeOb -> where("fid={$v1['id']}") -> select();
			foreach($typeArr2 as $v2)
			{
				$htmlContent.='<!-- 第二 3级 -->
				<div class="h2_cat" onmouseover="this.className=\'h2_cat active_cat\'" onmouseout="this.className=\'h2_cat\'">
				<h3>
				<div class="xianzhi">
				<a target="_blank" href="__APP__/ProductList/productList/id/'.$v2['id'].'">'.$v2['tname'].'</a> <span class="des"></span>
				</div>
				</h3>
				<!-- 3 -->
				<div class="h3_cat">
				<div class="shadow">
				<div class="shadow_border">
				<ul>
				';
				//获取第三级
				$typeArr3 = $typeOb -> where("fid={$v2['id']}") -> select();
				foreach($typeArr3 as $v3)
				{
					$htmlContent.='<li><a target="_blank" href="__APP__/ProductList/productList/id/'.$v3['id'].'">'.$v3['tname'].'</a></li>';
				}
				$htmlContent.='
				</ul></div></div>
				</div>
				<!-- 3 end -->
				</div>
				<!-- 2 3 end -->';
			}
		}
		//分类结束
		return $htmlContent;
	}