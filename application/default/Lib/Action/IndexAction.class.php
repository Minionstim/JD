<?php
	class IndexAction extends Action
	{
		public function index()
		{
			$ob= M ('goodstype');
			$arr=$ob->where("parentId=0")->select();
			$typearr=array();
			
			foreach ($arr as $v) {
				$typearr[$v['typeName']]['其他']=$v['typeId'];
				$re=$ob->where("parentId=$v[typeId]")->select();
				foreach ($re as $a) {
					$typearr[$v['typeName']][$a['typeName']]['其他']=$a['typeId'];
					$ar=$ob->where("parentId=$a[typeId]")->select();
					foreach ($ar as $k) {
						$typearr[$v['typeName']][$a['typeName']][$k['typeName']]['其他']=$k['typeId'];
					}
				}
				
			}
			//var_dump($typearr[$v['typeName']][0]);
				$bob= M ('brandinfo')->where("typeId=".$typearr[0])->select();

			//var_dump($typearr);
			$arr= M ('goodsinfo')->select();
			$this->assign('arr',$arr);
			$this->assign('typeinfo',$typearr);	
			$this->assign("pageName","index");
			$this->display();
		}
	}
?>