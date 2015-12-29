<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="服饰鞋帽" />
  <meta name="Description" content="服饰鞋帽" />
  
<link href="__ROOT__/Public/themes/jindong/stye.css" rel="stylesheet" type="text/css" /> <link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
 
  <title>服饰鞋帽_京东网上商城-综合网购首选，正品行货，机打发票，售后上门取件，省钱又放心 - Powered by ECShop</title>
  <script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/global.js"></script><script type="text/javascript" src="js/compare.js"></script></head>
<body>
  <div id="container">
    
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div id="globalHeader">
<ul id="top_nav_ul">
			  <div id=navigation1_03 style=" float:right;">
<DL>
  <DT style="POSITION: relative; z-index:999999999">
  
  <A style="float:right; background:url(__ROOT__/Public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
  onmouseover="show_menu('float_menu2','c_fship_c')" 
  onmouseout="hide_menu('float_menu2','c_fship_c')" 
  href="#"  target=_self>客服中心</A>
  
  
  
  <DIV id=float_menu2 onMouseOver="show_menu('float_menu2','c_fship_c')" 
  style="border: #ccc 1px solid; border-top:none;DISPLAY: none; Z-INDEX: 20; LEFT: 0px; top:0; WIDTH:70px; padding:0 0 5px 8px;POSITION: absolute;" 
  onmouseout="hide_menu('float_menu2','c_fship_c')">
  <UL class=cship_list>
    <LI style="padding-bottom:7px; padding-top:5px;"><A target="_blank" href="user.php">客服中心</A> </LI>
    <LI><A target="_blank" href="user.php">会员后台</A> </LI>
    <LI><A target="_blank" href="user.php?act=order_list">我的订单</A> </LI>
    <LI><A target="_blank" href="user.php?act=message_list">我的留言</A> </LI>
   </UL></DIV></DT>
  <DD>
</DD></DL></div> 
<div style="float:right; _padding-top:9px; background: url(__ROOT__/Public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
				<a href="search.php?intro=promotion"  >今日特价</a> <img style="vertical-align:middle" src="__ROOT__/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="http://vip.souho.cc/"  >极品源码</a> <img style="vertical-align:middle" src="__ROOT__/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="flow.php"  >查看购物车</a> <img style="vertical-align:middle" src="__ROOT__/Public/themes/jindong/images/nav_li.gif">
			
			  		<a href="quotation.php"  >报价单</a> <img style="vertical-align:middle" src="__ROOT__/Public/themes/jindong/images/nav_li.gif">
			
			  			</div> 
            
<div  style="float:right; color:#acacac; padding-right:15px;">         
   <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>   <font id="ECS_MEMBERZONE">
  您好，欢迎您光临万联商城！<a href="user.php?act=login">[请登录]</a><span>，新用户？</span><a style="color:#ff6600" href="user.php?act=register">[免费注册]</a>
  
  
 
<script type="text/javascript">
//<![CDATA[

// 会员登录
function signIn()
{
  var frm = document.forms['ECS_LOGINFORM'];

  if (frm)
  {
    var username = frm.elements['username'].value;
    var password = frm.elements['password'].value;
    var captcha = '';
    if (frm.elements['captcha'])
    {
      captcha = frm.elements['captcha'].value;
    }
    if (username.length == 0 || password.length == 0)
    {
       alert("对不起，您必须完整填写用户名和密码。");
        return;
    }
    else
    {
       Ajax.call('user.php?act=signin', 'username=' + username + '&password=' + encodeURIComponent(password) + '&captcha=' + captcha, signinResponse, "POST", "TEXT");
    }
  }
  else
  {
    alert('Template error!');
  }
}

function signinResponse(result)
{
  var userName = document.forms['ECS_LOGINFORM'].elements['username'].value;
  var mzone = document.getElementById("ECS_MEMBERZONE");
  var res   = result.parseJSON();

  if (res.error > 0)
  {
    // 登录失败
    alert(res.content);
    if(res.html)
	{
      mzone.innerHTML = res.html;
	  document.forms['ECS_LOGINFORM'].elements['username'].value = userName;
	}
  }
  else
  {
    if (mzone)
    {
      mzone.innerHTML = res.content;
			evalscript(res.ucdata);
    }
    else
    {
      alert("Template Error!");
    }
  }
}

//]]>
</script>
 </font> 
</div>     
            
            
              
  <script type="text/javascript">
function show_menu(obj_s,obj){
	var  s_id = document.getElementById(obj_s);
	var  sc_id = document.getElementById(obj);
	     s_id.style.display = "";
	     //sc_id.className = "ahv";
     	}
     	
  function hide_menu(obj_h,obj){
	var  h_id = document.getElementById(obj_h);
	var  hc_id = document.getElementById(obj);
	     h_id.style.display = "none";
	     //hc_id.className = "alk";
     	}
  </script>
	</ul>
  <p id="logo"><img style="float:left" src="__ROOT__/Public/themes/jindong/images/logo.gif"/></a></p>
  
</div>
<div id="globalNav">
   <ul>
<li><a href="__ROOT__/index.php">首页</a></li>
  <li><a href="productList.html"   class="cur">服饰鞋帽</a></li>
 <li><a href="productList.html" target="_blank"  >箱包礼品</a></li>
 <li><a href="productList.html"  >运动健康</a></li>
 <li><a href="productList.html"  >汽车用品</a></li>
 <li><a href="productList.html"  >家用电器</a></li>
 <li><a href="message.html"  >留言板</a></li>
 </ul>
</div>
<div id="globalSearch">
<img style="position:absolute; left:0;" src="__ROOT__/Public/themes/jindong/images/search_box_l.gif">
<img  style="position:absolute; right:0;" src="__ROOT__/Public/themes/jindong/images/search_box_r.gif">
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
  
  
<div class="search_left">  
<input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
<input type="image" src="__ROOT__/Public/themes/jindong/images/search.gif" style="float:left" />
<span class="key2">
   热门搜索 ：
      <a target="_blank" style=" color:#ffcccc" href="search.php?keywords=%E5%93%81%E7%89%8C%E6%97%A5%E7%94%A8%E5%93%81">品牌日用品</a>
      <a target="_blank" style=" color:#ffcccc" href="search.php?keywords=%E5%93%81%E7%89%8C%E6%9C%8D%E8%A3%85">品牌服装</a>
      </span>   
</div>  
<div class="search_right">  
 
<div class="buy_car_bg clearfix" id="ECS_CARTINFO" >
<a href="flow.php"><script type="text/javascript" src="js/transport.js"></script><span>购物车中有<b>0</b>件商品</span>
  <ul class="car_ul">

<a href="#" style="color:#999; padding-left:30px;">您的购物车暂无商品 赶快选择心爱的商品吧</a>

<ul>



<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
      document.getElementById('ECS_CARTINFO').innerHTML = res.content;
  }
}
</script>

</a>
</div> 
	 
<a href="flow.php?step=checkout"><img src="__ROOT__/Public/themes/jindong/images/qujiesuan.gif"></a>
</div>
  </form>
  
  
  
  
</div>
<script type="text/javascript">
//<![CDATA[
window.onload = function()
{
  fixpng();
}
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
        return true;
    }
    else
    {
		   alert("请输入搜索关键词！");
        return false;
    }
}
//]]>
</script>
<div class="p_w" style="clear:both; overflow:hidden"></div>
    <div id="urHere" class="globalModule">
  <h2><a href="__ROOT__/index.php">首页</a></h2>
</div>
<div class="blank"></div>    <div id="globalLeft">
     
 <div class="globalModule1">
<h3 class="h32"><b>商品分类</b> <a target="_blank" href="search.php">全部分类>></a></h3>
<div class="my_left_category">
<div class="blank" style="height:0; _display:none"></div>
<?php echo ($htmlContent); ?>

<div class="blank"></div>
</div>
</div>
<div class="blank"></div>
<style type="text/css">
<!--
.age_box a{float: left; height:22px; line-height:22px; width:92px; background:url(__ROOT__/Public/themes/jindong/images/biao6.gif) 0 center no-repeat; padding-left:10px;font-family:Arial, Helvetica, sans-serif;color:#333333}
-->
</style>
<div class="blank"></div>      
<div class="box" id='history_div'>
<div id="globalHistory" class="globalModule" >
<h3 class="h3_3" style="border-bottom:1px dotted #efefef"><div id="list_t_l"><div id="list_t_r"><b style="color:#333">最近浏览过的商品</b></div></div></h3>
<div id="global_box" > 
  <ul id="history_list" class="boxCenterList">
      </ul>
</div>
</div>
</div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>
<div class="blank"></div><div id="brandList" class="globalModule">
<h3><div id="list_t_l"><div id="list_t_r"><b>品牌专卖店</b></div></div></h3>
<div id="global_box"> 
<div style="clear:both"></div>
    		        <a href="category.php?id=296&amp;brand=241"><img class="brand_img" src="data/brandlogo/1260949239463142231.gif" alt="贝尔金 (13)" /></a>
    		    		        <a href="category.php?id=296&amp;brand=240"><img class="brand_img" src="data/brandlogo/1260929427660619297.jpg" alt="新蓝 (3)" /></a>
    		    		        <a href="category.php?id=296&amp;brand=275"><img class="brand_img" src="data/brandlogo/1262819801281464875.jpg" alt="三星 (2)" /></a>
    		        
    
    <div style="clear:both"></div> 
    <p class="more"><a href="brand.php"> 更多>></a></p>
  </div>
	
   
</div>
<div class="blank"></div>
    </div>
    <div id="globalBigRight">
	
     
<div class="cate_hot">
<div class="nei">
<div class="nei2">
<div style="padding:40px 0 0 20px;">
<div class="item hot_item2">
      <p  class="pic"><a href="goods.php?id=4765"><img style="width:100px; height:100px;margin:0 auto; float:left; text-align:center" src="images/no_picture.gif" alt="产品5"/></a></p>
      
      <div class="hot_item2_2">
      
      <p  class="name"><a href="productDetail.html" title="产品5">产品5<span></span></a>
      
      
      
      </p> 
      
      <p align="center" class="price">
     今日特价：<font class="shop_s">￥11111111元                </font>
      </p>
      <div style="padding-top:5px;">
     <a href="javascript:addToCart(4765)"> <img src="__ROOT__/Public/themes/jindong/images/bnt1.gif"> </a>
      </div>
      
      </div>
      
      
     </div>
 <div class="item hot_item2">
      <p  class="pic"><a href="productDetail.html"><img style="width:100px; height:100px;margin:0 auto; float:left; text-align:center" src="images/no_picture.gif" alt="产品4"/></a></p>
      
      <div class="hot_item2_2">
      
      <p  class="name"><a href="productDetail.html" title="产品4">产品4<span></span></a>
      
      
      
      </p> 
      
      <p align="center" class="price">
     今日特价：<font class="shop_s">￥11111111元                </font>
      </p>
      <div style="padding-top:5px;">
     <a href="javascript:addToCart(4764)"> <img src="__ROOT__/Public/themes/jindong/images/bnt1.gif"> </a>
      </div>
      
      </div>
      
      
     </div>
 <div class="item hot_item2">
      <p  class="pic"><a href="productDetail.html"><img style="width:100px; height:100px;margin:0 auto; float:left; text-align:center" src="images/no_picture.gif" alt="产品2"/></a></p>
      
      <div class="hot_item2_2">
      
      <p  class="name"><a href="productDetail.html" title="产品2">产品2<span></span></a>
      
      
      
      </p> 
      
      <p align="center" class="price">
     今日特价：<font class="shop_s">￥11111111元                </font>
      </p>
      <div style="padding-top:5px;">
     <a href="javascript:addToCart(4762)"> <img src="__ROOT__/Public/themes/jindong/images/bnt1.gif"> </a>
      </div>
      
      </div>
      
      
     </div>
 </div>  
</div>
</div>
</div>
<div class="blank"></div>
    
    
      
<div class="box">
 <div class="box_1">
 
<style type="text/css">
<!--
.Select {
background:url(__ROOT__/Public/themes/jindong/images/tag_title2.gif) repeat-x 0 top;
margin-bottom:10px; float:left; width:100%
}
.Select dl {
border-top:1px dashed #e7cdae;
overflow:hidden; padding:5px 0; float:left; width:100%;
}
.Select dt {
float:left;
font-weight:bold;
text-align:right;
width:100px; 
}
.Select dt, .Select dd { 
}
.Select dd {
float:left;
overflow:hidden;
}
.Select dt, .Select dd {
}
.Select dd div {
float:left;
margin-right:15px;
}
.Select dd a:hover,.Select dd a:hover span, {
background:#4598D2 none repeat scroll 0 0;
color:#FFFFFF;
}
.Select dd a { color:#005aa0;
display:block;
text-decoration:none;
white-space:nowrap;
}
a:link, a:visited {
color:#222222;
}
a {
text-decoration:none;
}
.select_all{background:#4598d2; padding:0 2px;color:#FFF}
.Select dd .select_all {}
-->
</style>
  <div class="Select">
 <div style="color:#cc3300; font-size:14px; font-weight:bold; padding:9px;" >商品筛选</div>
  	        <dl>
            <dt>品牌：</dt>
            <dd>
                                                <div class="select_all">全部</div>
                                                                <div> <a href="category.php?id=296&amp;brand=240&amp;price_min=0&amp;price_max=0">新蓝</a> </div>
                                                                <div> <a href="category.php?id=296&amp;brand=241&amp;price_min=0&amp;price_max=0">贝尔金</a> </div>
                                                                <div> <a href="category.php?id=296&amp;brand=275&amp;price_min=0&amp;price_max=0">三星</a> </div>
                                            </dd>
        </dl>
        <div style=" clear:both"></div>
        
    	  
          
          
          
 
	</div>
</div></div>
<div class="blank5"></div>
	  
    
    
          
<div id="globalGoodsList" class="globalModule">
  <div class="globalGoodsListMenu2">
    <form method="get" action="#" class="sort" name="listform">
      <span style="position:relative; top:-5px;">排序：</span>
        <a href="category.php?category=296&display=list&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list"><img src="__ROOT__/Public/themes/jindong/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
  <a href="category.php?category=296&display=list&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list"><img src="__ROOT__/Public/themes/jindong/images/shop_price_default.gif" alt="按价格排序"></a>
  <a href="category.php?category=296&display=list&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list"><img src="__ROOT__/Public/themes/jindong/images/last_update_default.gif" alt="按更新时间排序"></a>
	   
  <form method="GET" class="sort" name="listform" style="float:right;">
  <span style="margin-bottom:2px;" class="globalGoodsListMenuDisplay">显示方式：
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="__ROOT__/Public/themes/jindong/images/btn_display_mode_list_act.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="__ROOT__/Public/themes/jindong/images/btn_display_mode_grid.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="__ROOT__/Public/themes/jindong/images/btn_display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
      
      
      
      
      
      
  <input type="hidden" name="category" value="296" />
  <input type="hidden" name="display" value="list" id="display" />
  <input type="hidden" name="brand" value="0" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="goods_id" />
  <input type="hidden" name="order" value="DESC" />
      
      
      
     </span>
    </form>
  </div>
  
 <div class="list_b">
<span>
总计 <b>18</b>  个记录</span>
</div>
    <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
      <div class="itemList">
        <div class="item">
      <p class="pic">
        <a href="goods.php?id=4779"><img src="images/no_picture.gif" alt="产品20" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品20">
                        产品20                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4779)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4779)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4779,'产品20')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品19" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="goods.php?id=4778" title="产品19">
                        产品19                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4778)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4778)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4778,'产品19')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品18" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="goods.php?id=4777" title="产品18">
                        产品18                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4777)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4777)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4777,'产品18')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品17" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="goods.php?id=4776" title="产品17">
                        产品17                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4776)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4776)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4776,'产品17')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品16" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品16">
                        产品16                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4775)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4775)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4775,'产品16')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品15" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品15">
                        产品15                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4774)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4774)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4774,'产品15')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品14" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品14">
                        产品14                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4773)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4773)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4773,'产品14')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品13" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品13">
                        产品13                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4772)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4772)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4772,'产品13')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品12" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品12">
                        产品12                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4771)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4771)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4771,'产品12')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品11" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品11">
                        产品11                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4770)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4770)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4770,'产品11')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品10" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品10">
                        产品10                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4769)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4769)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4769,'产品10')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品8" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品8">
                        产品8                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1200元</span><br />
                              美智价：<span class="goodsPrice">￥1000元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4768)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4768)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4768,'产品8')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品7" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品7">
                        产品7                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1198元</span><br />
                              美智价：<span class="goodsPrice">￥999元</span>
                  </p>
				        <p class="brief" title="1080P全高清，内置锂电，新年发礼品首选！赠：原装摄包！">商品描述：1080P全高清，内置锂电，新年发礼品首选！赠：原装摄包！</p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4767)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4767)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4767,'产品7')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品6" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品6">
                        产品6                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥1198元</span><br />
                              美智价：<span class="goodsPrice">￥999元</span>
                  </p>
				        <p class="brief" title="1080P全高清，内置锂电，新年发礼品首选！赠：原装摄包！">商品描述：1080P全高清，内置锂电，新年发礼品首选！赠：原装摄包！</p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4766)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4766)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4766,'产品6')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品5" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品5">
                        产品5                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥13333333元</span><br />
                              美智价：<span class="goodsPrice">￥11111111元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4765)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4765)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4765,'产品5')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
        <div class="item">
      <p class="pic">
        <a href="productDetail.html"><img src="images/no_picture.gif" alt="产品4" /></a>
      </p>
      <div class="itemListInfo">
      <div style="float:left;">
        <p class="name">
          <a href="productDetail.html" title="产品4">
                        产品4                      </a>
          
         
        </p>
        <p class="price">
                    市场价：<span class="marketPrice">￥13333333元</span><br />
                              美智价：<span class="goodsPrice">￥11111111元</span>
                  </p>
				 
       
         </div>                    
        <div style="float:right; width:57px;">        
        <p class="btnList">
          <a href="javascript:collect(4764)"><img src="__ROOT__/Public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4764)"><img src="__ROOT__/Public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4764,'产品4')"><img src="__ROOT__/Public/themes/jindong/images/buttons_comp.gif"></a>
        </p>
        </div>
      </div>
    </div>
      </div>
      </form>
  </div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
				<div class="blank"></div>
<form name="selectPageForm" action="/category.php" method="get">
 <div id="pager">
 
                      <span class="page_now">1</span>
                      <a href="category.php?id=296&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=goods_id&amp;order=DESC">2</a>
            
  <a class="next" href="category.php?id=296&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=goods_id&amp;order=DESC">下一页</a>    </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
    
      
    </div>
    <div class="blank"></div>
<div id="globalHelp" class="globalModule">
<div class="clearfix">
<dl>
<dt>
<img src="__ROOT__/Public/themes/jindong/images/help_1.gif" />
<a href='article_cat.php?id=5' title="购物指南">购物指南</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
    <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
    <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
  </dl>
<dl>
<dt>
<img src="__ROOT__/Public/themes/jindong/images/help_2.gif" />
<a href='article_cat.php?id=7' title="配送方式">配送方式</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
    <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
    <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
  </dl>
<dl>
<dt>
<img src="__ROOT__/Public/themes/jindong/images/help_3.gif" />
<a href='article_cat.php?id=10' title="支付方式">支付方式</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=18" title="货到付款">货到付款</a></dd>
    <dd><a href="article.php?id=19" title="在线支付">在线支付</a></dd>
    <dd><a href="article.php?id=20" title="银行转账">银行转账</a></dd>
    <dd><a href="article.php?id=37" title="分期付款">分期付款</a></dd>
  </dl>
<dl>
<dt>
<img src="__ROOT__/Public/themes/jindong/images/help_4.gif" />
<a href='article_cat.php?id=8' title="售后服务">售后服务</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
    <dd><a href="article.php?id=22" title="退换货流程">退换货流程</a></dd>
    <dd><a href="article.php?id=23" title="价格保护">价格保护</a></dd>
    <dd><a href="article.php?id=38" title="退款说明">退款说明</a></dd>
  </dl>
<dl>
<dt>
<img src="__ROOT__/Public/themes/jindong/images/help_5.gif" />
<a href='article_cat.php?id=9' title="特色服务">特色服务</a>
</dt>
<div class="blank5"></div>
    <dd><a href="article.php?id=24" title="商品拍卖">商品拍卖</a></dd>
    <dd><a href="article.php?id=25" title="DIY装机">DIY装机</a></dd>
    <dd><a href="article.php?id=26" title="上门服务">上门服务</a></dd>
    <dd><a href="article.php?id=39" title="上门装机">上门装机</a></dd>
    <dd><a href="article.php?id=40" title="香港代购">香港代购</a></dd>
  </dl>
</div>
<div class="blank"></div>
<div class="blank"></div>
<div class="serve clearfix">
<ul  class="line"><img src="__ROOT__/Public/themes/jindong/images/serve_1.gif"></ul>
<ul  class="line"><img src="__ROOT__/Public/themes/jindong/images/serve_2.gif"></ul>
<ul  class="line"><img src="__ROOT__/Public/themes/jindong/images/serve_3.gif"></ul>
<ul ><img src="__ROOT__/Public/themes/jindong/images/serve_4.gif"></ul>
</div>
</div>
<div class="blank"></div>
    <div id="globalFooter">
<p id="footerNav">
        <a href="article.php?id=1" >关于我们</a> 
        |
          <a href="article.php?id=2" >联系我们</a> 
        |
          <a href="article.php?id=3" >广告服务</a> 
        |
          <a href="http://jetli.taobao.com/" >品牌加盟</a> 
        |
          <a href="wholesale.php" >批发方案</a> 
        |
          <a href="myship.php" >配送方式</a> 
       | <script type="text/javascript" src="js/dialog3.js"></script>
  </p>
  <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
   
    
  <p id="address">
        
  </p>
  <p id="phone">
  	</p>
	  <p id="imList">
            <img src="http://wpa.qq.com/pa?p=1:393769718:4" alt="QQ" /> <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=393769718&amp;Site=京东网上商城&amp;Menu=yes" target="_blank">393769718</a>
                    <img src="http://amos1.taobao.com/online.ww?v=2&amp;uid=tddt8&amp;s=2" alt="淘宝旺旺" /><a href="http://amos1.taobao.com/msg.ww?v=2&amp;uid=tddt8&amp;s=2" target="_blank"> tddt8</a>
                                              </p>
  <p id="qureyInfo">共执行 4 个查询，用时 0.010631 秒，在线 3 人，Gzip 已禁用，占用内存 3.356 MB<img src="api/cron.php?t=1344195212" alt="" style="width:0px;height:0px;" /></p>
    
    <div align="center" ></div>
<div class="blank"></div>
<div style="text-align:center">
<a href="http://www.miibeian.gov.cn"><img src="__ROOT__/Public/themes/jindong/images/fot_1.gif"></a> <a href="#"><img src="__ROOT__/Public/themes/jindong/images/fot_2.gif"></a> <a href="http://police.cnool.net/infoCategoryListAction.do?act=init"><img src="__ROOT__/Public/themes/jindong/images/fot_3.gif"></a>
 </div>      
</div> 
  </div>
</body>
</html>