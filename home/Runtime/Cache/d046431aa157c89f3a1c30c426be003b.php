<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE6" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="京东网上商城" />
  <meta name="Description" content="京东网上商城" />
<link href="__ROOT__/Public/themes/jindong/stye.css" rel="stylesheet" type="text/css" /> 
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<title>京东网上商城-综合网购首选，正品行货，机打发票，售后上门取件，省钱又放心 - Powered by ECShop</title>
  <script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script>  
  
  
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onmousemove=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script> 
  
  
  
  
  
  
</head>
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
<li><a href="index.html" class="cur">首页</a></li>
  <li><a href="productList.html"  >服饰鞋帽</a></li>
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
<a href="flow.php"><span>购物车中有<b>1</b>件商品</span>
  <ul class="car_ul">
  <li>
 <div class="f_l">
 <a class="img" href="goods.php?id=4761"><img src="images/201208/thumb_img/4761_thumb_G_1344186486336.jpg" style="width:50px; height:50px;" alt="产品1"></a>
 <a class="name" href="goods.php?id=4761">产品1</a>
 </div>
 <div class="f_r">
<b>￥1000元×1</b> <br />
<a class="del" href="javascript:" onClick="deleteCartGoods(41)">删除</a>
 </div>
</li>
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
    <div id="globalLeft">
<div id="o-search" style="bottom:50px;">
<div class="allsort">
    <div class="mt">
        <strong>
            <a href="catalog.php">
                全部商品分类
            </a>
        </strong>
        <div class="extra">
            &nbsp;
        </div>
    </div>
	  <div class="mc">
	  <!-- 显示分类 -->
	   <?php echo ($typeStr); ?>
	  <!-- end -->
		</div>
		<div class="extra">
            <a href="catalog.php">
                全部商品分类
            </a>
        </div>
	  </div>
	 </div>
    </div>	
<div class="blank"></div> 
 
   <style type="text/css">
<!--
.age_box a{float: left; height:22px; line-height:22px; width:70px; background:url(__ROOT__/Public/themes/jindong/images/biao6.gif) 0 center no-repeat; padding-left:10px;font-family:Arial, Helvetica, sans-serif;color:#333333}
-->
</style>
<div id="brandList" class="globalModule" style="margin-top:355px;">
<h3><div id="list_t_l"><div id="list_t_r"><b>按年龄查询</b></div></div></h3>
<div id="global_box"> 
<div style="clear:both"></div>
   <div class="age_box">
   <a target="_blank" href="search.php?encode=YTo0OntzOjg6ImtleXdvcmRzIjtzOjE1OiLlh7rnlJ8tMTLkuKrmnIgiO3M6MToieCI7czoyOiI0MCI7czoxOiJ5IjtzOjI6IjEzIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTI2Mjg2OTcwMzt9">
    出生-12个月
    </a>
    <a target="_blank" href="search.php?encode=YTo0OntzOjg6ImtleXdvcmRzIjtzOjExOiIxMi0yNOS4quaciCI7czoxOiJ4IjtzOjI6IjI0IjtzOjE6InkiO3M6MToiOSI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjEyNjI4Njk3NDU7fQ==">
    12-24个月</a>
    <a target="_blank" href="search.php?encode=YTo0OntzOjg6ImtleXdvcmRzIjtzOjQ6IjLlsoEiO3M6MToieCI7czoxOiIwIjtzOjE6InkiO3M6MToiNCI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjEyNjI4Njk3Nzk7fQ==">2岁</a>
    <a target="_blank" href="search.php?encode=YTo0OntzOjg6ImtleXdvcmRzIjtzOjY6IjMtNOWygSI7czoxOiJ4IjtzOjI6IjEzIjtzOjE6InkiO3M6MjoiMTYiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxMjYyODY5ODA1O30=">3-4岁</a>
    <a target="_blank" href="search.php?encode=YTo0OntzOjg6ImtleXdvcmRzIjtzOjY6IjUtN%2bWygSI7czoxOiJ4IjtzOjI6IjE1IjtzOjE6InkiO3M6MToiOSI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjEyNjI4Njk4Mjk7fQ==">5-7岁</a>
    <a target="_blank" href="search.php?encode=YTo0OntzOjg6ImtleXdvcmRzIjtzOjc6IjgtMTHlsoEiO3M6MToieCI7czoyOiIxMSI7czoxOiJ5IjtzOjI6IjExIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTI2Mjg2OTg1Njt9">8-11岁</a>
    <a target="_blank" href="search.php?encode=YTo0OntzOjg6ImtleXdvcmRzIjtzOjg6IjEyLTE05bKBIjtzOjE6IngiO3M6MjoiMjUiO3M6MToieSI7czoyOiIxNSI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjEyNjI4Njk4ODQ7fQ==">12-14岁</a>
    <a target="_blank" href="search.php?encode=YTo0OntzOjg6ImtleXdvcmRzIjtzOjExOiIxNeWygeS7peS4iiI7czoxOiJ4IjtzOjI6IjEwIjtzOjE6InkiO3M6MjoiMTciO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxMjYyODY5OTIxO30=">15岁以上</a>
   
    </div>
</div>
</div>
<div class="blank"></div>      
<div id="brandList" class="globalModule">
<h3><div id="list_t_l"><div id="list_t_r"><b>品牌专卖店</b></div></div></h3>
<div id="global_box"> 
<div style="clear:both"></div>
    		        <a href="brand.php?id=247"><img class="brand_img" src="data/brandlogo/1261024702576255018.jpg" alt="苹果 (1)" /></a>
    		    		        <a href="brand.php?id=283"><img class="brand_img" src="data/brandlogo/1262820205742092518.gif" alt="索尼 (1)" /></a>
    		    		        <a href="brand.php?id=239"><img class="brand_img" src="data/brandlogo/1260914508364908978.gif" alt="爱普生 (1)" /></a>
    		    		        <a href="brand.php?id=237"><img class="brand_img" src="data/brandlogo/1260914353189816050.gif" alt="logitech(罗技） (1)" /></a>
    		    		        <a href="brand.php?id=249"><img class="brand_img" src="data/brandlogo/1261250829409520561.gif" alt="酷冷至尊 (1)" /></a>
    		    		        <a href="brand.php?id=235"><img class="brand_img" src="data/brandlogo/1260914178815344734.gif" alt="Intel(英特尔） (9)" /></a>
    		    		        <a href="brand.php?id=236"><img class="brand_img" src="data/brandlogo/1260914269842562380.jpg" alt="Lenovo（联想) (2)" /></a>
    		    		        <a href="brand.php?id=261"><img class="brand_img" src="data/brandlogo/1261252244916201653.gif" alt="飞利浦 (2)" /></a>
    		    		        <a href="brand.php?id=232"><img class="brand_img" src="data/brandlogo/1260913793454998434.gif" alt="AMD (8)" /></a>
    		    		        <a href="brand.php?id=234"><img class="brand_img" src="data/brandlogo/1260914013017645518.gif" alt="HP（惠普) (2)" /></a>
    		    		        <a href="brand.php?id=231"><img class="brand_img" src="data/brandlogo/1260913528298939716.gif" alt="金士顿 (1)" /></a>
    		    		        <a href="brand.php?id=233"><img class="brand_img" src="data/brandlogo/1260913891819377677.jpg" alt="dell(戴尔) (3)" /></a>
    		    		        <a href="brand.php?id=227"><img class="brand_img" src="data/brandlogo/1260862422749295337.jpg" alt="NOKIA（诺基亚） (5)" /></a>
    		    		        <a href="brand.php?id=243"><img class="brand_img" src="data/brandlogo/1260949347845979162.gif" alt="冠捷 (1)" /></a>
    		    		        <a href="brand.php?id=245"><img class="brand_img" src="data/brandlogo/1261000688374476403.gif" alt="华硕 (1)" /></a>
    		    		        <a href="brand.php?id=248"><img class="brand_img" src="data/brandlogo/1261036802871248654.jpg" alt="多彩 (1)" /></a>
    		        
    
    <div style="clear:both"></div> 
    <p class="more"><a href="brand.php"> 更多>></a></p>
  </div>
	
   
</div>
<div class="blank"></div>
<table cellpadding="0" cellspacing="0" width="100%" style="margin:6px 0 0 0;">
<tr><td style="padding-bottom:5px;"><a href='affiche.php?ad_id=8&amp;uri=http%3A%2F%2Fwww.17558.net'
                target='_blank'><img src='data/afficheimg/1284142905922427409.jpg' width='211' height='90'
                border='0' /></a></td></tr>
</table><div class="blank"></div>   
  
   
<style type="text/css">
<!--
-->
</style>
<div class="globalModule">
<h3><div id="list_t_l"><div id="list_t_r"><b>用户评论</b></div></div></h3>
<div id="global_box"> 
<div style="clear:both"></div>
<div style="border-bottom:1px solid #efefef; line-height:21px; padding-bottom:5px; margin:0 4px;">
<b style="color:#fe9900">[评论]</b>
<a style=" color:#005ba0;" href="goods.php?id=4738" title="AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">
AMD AthlonII×2（速龙II双核）250盒装CPU（S...</a>
<div style="clear:both"></div>
<a href="goods.php?id=4738" title="AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">
<img alt="AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）" src="images/201001/thumb_img/4738_thumb_G_1262821000118.jpg" style="width:50px; height:50px; float:left; padding-right:7px; " >
</a>
<a href="goods.php?id=4738" title="AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）" target="_blank">
我现在的电脑就用这个，这里比我买的便宜。</a>
<div style="clear:both"></div>
<span style=" color:#12a000">2010-01-29 07:02:59</span>
</div>
<div style="border-bottom:1px solid #efefef; line-height:21px; padding-bottom:5px; margin:0 4px;">
<b style="color:#fe9900">[评论]</b>
<a style=" color:#005ba0;" href="goods.php?id=4712" title="亚都(YADU)净化器大力神系列 KJG1202" target="_blank">
亚都(YADU)净化器大力神系列 KJG1202</a>
<div style="clear:both"></div>
<a href="goods.php?id=4712" title="亚都(YADU)净化器大力神系列 KJG1202" target="_blank">
<img alt="亚都(YADU)净化器大力神系列 KJG1202" src="images/201001/thumb_img/4712_thumb_G_1262436131526.jpg" style="width:50px; height:50px; float:left; padding-right:7px; " >
</a>
<a href="goods.php?id=4712" title="亚都(YADU)净化器大力神系列 KJG1202" target="_blank">
看上去不错哦。。但是没用过。</a>
<div style="clear:both"></div>
<span style=" color:#12a000">2010-01-29 07:02:04</span>
</div>
<div style="border-bottom:1px solid #efefef; line-height:21px; padding-bottom:5px; margin:0 4px;">
<b style="color:#fe9900">[评论]</b>
<a style=" color:#005ba0;" href="goods.php?id=4729" title="三星（SAMSUNG）N128-DA08 10.1英寸笔记本电脑" target="_blank">
三星（SAMSUNG）N128-DA08 10.1英寸笔记本电脑</a>
<div style="clear:both"></div>
<a href="goods.php?id=4729" title="三星（SAMSUNG）N128-DA08 10.1英寸笔记本电脑" target="_blank">
<img alt="三星（SAMSUNG）N128-DA08 10.1英寸笔记本电脑" src="images/201001/thumb_img/4729_thumb_G_1262451877090.jpg" style="width:50px; height:50px; float:left; padding-right:7px; " >
</a>
<a href="goods.php?id=4729" title="三星（SAMSUNG）N128-DA08 10.1英寸笔记本电脑" target="_blank">
站长服务态度挺好。</a>
<div style="clear:both"></div>
<span style=" color:#12a000">2010-01-07 17:09:08</span>
</div>
    <div style="clear:both"></div> 
    <p class="more"><a target="_blank" href="message.php"> 更多>></a></p>
  </div>
	
   
</div>
<div class="blank"></div>
<table cellpadding="0" cellspacing="0" width="100%" style="margin:6px 0 0 0;">
<tr><td style="padding-bottom:5px;"><a href='affiche.php?ad_id=9&amp;uri=http%3A%2F%2Fwww.17558.net'
                target='_blank'><img src='data/afficheimg/1284142944453704804.gif' width='211' height='90'
                border='0' /></a></td></tr>
</table><div class="blank"></div><table cellpadding="0" cellspacing="0">
<tr><td><a href='affiche.php?ad_id=10&amp;uri=http%3A%2F%2Fwww.17558.net'
                target='_blank'><img src='data/afficheimg/1284142966967642808.jpg' width='211' height='90'
                border='0' /></a></td></tr>
</table><div class="blank"></div><div id="ECS_VOTE">
  <div class="globalModule">
<h3><div id="list_t_l"><div id="list_t_r"><b>站内调查</b></div></div></h3>
<div id="global_box"> 
    <form name="ECS_VOTEFORM" method="post" action="javascript:submit_vote()" style="_margin:0px -50px 0px 0px;">
        <table border="0" >
                    <tr>
            <th style="width:150px;">您更希望我们从哪些方面改进并提高服务质量：</th>
          </tr>
          <tr>
            <td class="textDesc">(参与人次:4)</td>
          </tr>
                    <tr>
                        <td class="optionList">
                                          <input type="checkbox" name="option_id" value="21" id="option_21" /> <label for="option_21">提供优惠的价格及丰富促销活动</label> <span class="textDesc">(75%)</span><br />
                                                        <input type="checkbox" name="option_id" value="20" id="option_20" /> <label for="option_20">增加更多产品种类及商品类别</label> <span class="textDesc">(0%)</span><br />
                                                        <input type="checkbox" name="option_id" value="19" id="option_19" /> <label for="option_19">改善售后、投诉及返修等服务</label> <span class="textDesc">(0%)</span><br />
                                                        <input type="checkbox" name="option_id" value="18" id="option_18" /> <label for="option_18">增加货到付款、配送覆盖区域</label> <span class="textDesc">(0%)</span><br />
                                                        <input type="checkbox" name="option_id" value="17" id="option_17" /> <label for="option_17">改善并提高物流配送的时效性</label> <span class="textDesc">(25%)</span><br />
                                          <input type="hidden" name="type" value="0" />
            </td>
                      </tr>
          <tr>
            <td class="btnList">
              <input type="hidden" name="id" value="4" />
              <input type="image" name="submit" src="__ROOT__/Public/themes/jindong/images/btn_submit.gif" />
              <input type="image" src="__ROOT__/Public/themes/jindong/images/btn_reset.gif" onclick="ECS_VOTEFORM.reset();" />
            </td>
          </tr>
        </table>
    </form>
</div>    
  </div>
</div>
<div class="blank"></div>
<script type="text/javascript">
//<![CDATA[

/**
 * 处理用户的投票
 */
function submit_vote()
{
  var frm     = document.forms['ECS_VOTEFORM'];
  var type    = frm.elements['type'].value;
  var vote_id = frm.elements['id'].value;
  var option_id = 0;

  if (frm.elements['option_id'].checked)
  {
    option_id = frm.elements['option_id'].value;
  }
  else
  {
    for (i=0; i<frm.elements['option_id'].length; i++ )
    {
      if (frm.elements['option_id'][i].checked)
      {
        option_id = (type == 0) ? option_id + "," + frm.elements['option_id'][i].value : frm.elements['option_id'][i].value;
      }
    }
  }

  if (option_id == 0)
  {
    return;
  }
  else
  {
    Ajax.call('vote.php', 'vote=' + vote_id + '&options=' + option_id + "&type=" + type, voteResponse, 'POST', 'JSON');
  }
}

/**
 * 处理投票的反馈信息
 */
function voteResponse(result)
{
  if (result.message.length > 0)
  {
    alert(result.message);
  }
  if (result.error == 0)
  {
    var layer = document.getElementById('ECS_VOTE');

    if (layer)
    {
      layer.innerHTML = result.content;
    }
  }
}

//]]>
</script>
<div id="emailList"  class="globalModule">
  <h3><div id="list_t_l"><div id="list_t_r"><b>邮件订阅</b></div></div></h3>
 <div id="global_box"> 
 <ul>
  <input type="text" id="user_email" class="textInput" />
  <input type="image" src="__ROOT__/Public/themes/jindong/images/btn_subscription.gif" onclick="add_email_list();" /> 
  <input type="image" src="__ROOT__/Public/themes/jindong/images/btn_unsubscription.gif" onclick="cancel_email_list();" />
  </ul>
</div>
</div>
<div class="blank"></div>
<script type="text/javascript">
//<![CDATA[
var email = document.getElementById('user_email');
function add_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
  }
}
function rep_add_email_list(text)
{
  alert(text);
}
function cancel_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=del&email=' + email.value, '', rep_cancel_email_list, 'GET', 'TEXT');
  }
}
function rep_cancel_email_list(text)
{
  alert(text);
}
function check_email()
{
  if (Utils.isEmail(email.value))
  {
    return true;
  }
  else
  {
    alert('邮件地址非法！');
    return false;
  }
}
//]]>
</script>
   
 </div>
 
      <div id="globalBigRight3">
 
 
 
    <div id="globalMiddle">
      <div id="promotionVideo" class="globalModule">
          <script type="text/javascript">
  var swf_width=766;
  var swf_height=120;
  </script>
  <script type="text/javascript" src="data/flashdata/dynfocus/cycle_image.js"></script>
      </div>
      
      
      
<div id="globalBest" class="globalModule">
<h3>
<div id="recom_title_r">
<div id="recom_title_l">
<span>热卖商品</span>
<a  target="_blank" href="search.php?intro=hot">更多热卖>></a>	 
</div>       
</div>      
</h3>
  <div id="show_hot_area" class="itemGrid">
  
  
  <div class="clearfix">
          <div class="item hot_item1">
      <p align="center" class="pic"><a target="_blank" href="goods.php?id=4765"><img style="width:130px; height:130px;margin:0 auto; text-align:center" src="images/no_picture.gif" alt="产品5"/></a></p>
      <p align="center" class="name"><a target="_blank" href="goods.php?id=4765" title="产品5">产品5</a></p> 
      
      <p align="center" class="price">
     
               ￥11111111元              </p>
     </div>
    	
           <div class="item hot_item1">
      <p align="center" class="pic"><a target="_blank" href="goods.php?id=4764"><img style="width:130px; height:130px;margin:0 auto; text-align:center" src="images/no_picture.gif" alt="产品4"/></a></p>
      <p align="center" class="name"><a target="_blank" href="goods.php?id=4764" title="产品4">产品4</a></p> 
      
      <p align="center" class="price">
     
               ￥11111111元              </p>
     </div>
    	
           <div class="item hot_item1">
      <p align="center" class="pic"><a target="_blank" href="goods.php?id=4763"><img style="width:130px; height:130px;margin:0 auto; text-align:center" src="images/no_picture.gif" alt="产品3"/></a></p>
      <p align="center" class="name"><a target="_blank" href="goods.php?id=4763" title="产品3">产品3</a></p> 
      
      <p align="center" class="price">
     
               ￥11111111元              </p>
     </div>
    	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
        </div>  
     
     
<div class="clearfix">
          	
          	
          	
           <div class="item hot_item2">
      <p align="center" class="pic"><a target="_blank" href="goods.php?id=4762"><img  src="images/no_picture.gif" alt="产品2" /></a></p>
      <p align="center" class="name"><a target="_blank" href="goods.php?id=4762" title="产品2">产品2</a></p> 
     </div>
    	
           <div class="item hot_item2">
      <p align="center" class="pic"><a target="_blank" href="goods.php?id=4692"><img  src="images/201001/thumb_img/4692_thumb_G_1262412867503.jpg" alt="星辉遥控车模1：14超轻跑车兰博基尼橘色" /></a></p>
      <p align="center" class="name"><a target="_blank" href="goods.php?id=4692" title="星辉遥控车模1：14超轻跑车兰博基尼橘色">星辉遥控车模1：14超轻跑车兰博基尼橘色</a></p> 
     </div>
    	
           <div class="item hot_item2">
      <p align="center" class="pic"><a target="_blank" href="goods.php?id=4760"><img  src="images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUAWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
      <p align="center" class="name"><a target="_blank" href="goods.php?id=4760" title="华为（HUAWEI）C8600 经典机器 直降70元！超值特价！">华为（HUAWEI）C8600 经典机器...</a></p> 
     </div>
    	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
        </div>
  <div class="hot_item3box clearfix">
            	
          	
          	
          	
          	
          	
               <div class="item hot_item2">
     <a target="_blank" href="goods.php?id=4759" title="完美搭配之夏秋装韩版磨破火辣牛仔小短裤">完美搭配之夏秋装韩版磨破火辣牛仔小短裤</a>
     </div>
    	
               <div class="item hot_item2">
     <a target="_blank" href="goods.php?id=4690" title="飞利浦（Philips）无尘袋吸尘器 FC8264">飞利浦（Philips）无尘袋吸尘器 F...</a>
     </div>
    	
               <div class="item hot_item2">
     <a target="_blank" href="goods.php?id=4693" title="海尔(haier)吸尘器ZW1200—201">海尔(haier)吸尘器ZW1200—2...</a>
     </div>
    	
               <div class="item hot_item2">
     <a target="_blank" href="goods.php?id=4695" title="松下（Panasonic）NI-S100TS 蒸汽电熨斗 1200w">松下（Panasonic）NI-S100...</a>
     </div>
    	
               <div class="item hot_item2">
     <a target="_blank" href="goods.php?id=4699" title="美的(midea) MYR720T 台式温热型饮水机">美的(midea) MYR720T 台式...</a>
     </div>
    	
               <div class="item hot_item2">
     <a target="_blank" href="goods.php?id=4698" title="上海红心（Hongxin）蒸汽喷雾电熨斗RH208">上海红心（Hongxin）蒸汽喷雾电熨斗...</a>
     </div>
    	
          	
          	
          	
          	
          	
          	
          	
          	
          	
        
  </div>
  
  
     <div class="clearfix">
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
           <div class="item hot_item2">
      <p align="center" class="pic"><a href="goods.php?id=4755"><img  src="images/201001/thumb_img/4755_thumb_G_1264531392924.jpg" alt="熊猫（PANDA） CD-500手提式复读DVD播放机" /></a></p>
      <p align="center" class="name"><a href="goods.php?id=4755" title="熊猫（PANDA） CD-500手提式复读DVD播放机">熊猫（PANDA） CD-500手提式复...</a></p> 
     </div>
    	
           <div class="item hot_item2">
      <p align="center" class="pic"><a href="goods.php?id=4700"><img  src="images/201001/thumb_img/4700_thumb_G_1262417160902.jpg" alt="美的（midea）单热型饮水机 MYR718S-X" /></a></p>
      <p align="center" class="name"><a href="goods.php?id=4700" title="美的（midea）单热型饮水机 MYR718S-X">美的（midea）单热型饮水机 MYR7...</a></p> 
     </div>
    	
           <div class="item hot_item2">
      <p align="center" class="pic"><a href="goods.php?id=4705"><img  src="images/201001/thumb_img/4705_thumb_G_1262418043719.jpg" alt="梦园牌H1035全线路安全保护调温型印花标准单人电热毯蓝格" /></a></p>
      <p align="center" class="name"><a href="goods.php?id=4705" title="梦园牌H1035全线路安全保护调温型印花标准单人电热毯蓝格">梦园牌H1035全线路安全保护调温型印花...</a></p> 
     </div>
    	
          	
          	
          	
          	
          	
          	
            </div>
      <div class="hot_item3box clearfix">
            	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
          	
               <div class="item hot_item2">
     <a href="goods.php?id=4703" title="美的（Midea）MT-3（868CB）净水桶京东净水桶销量冠军！">美的（Midea）MT-3（868CB）...</a>
     </div>
    	
               <div class="item hot_item2">
     <a href="goods.php?id=4701" title="美的(midea) MYD718S-X 电子制冷饮水机">美的(midea) MYD718S-X ...</a>
     </div>
    	
               <div class="item hot_item2">
     <a href="goods.php?id=4711" title="飞利浦（philips）空气净化器AC4072">飞利浦（philips）空气净化器AC4...</a>
     </div>
    	
               <div class="item hot_item2">
     <a href="goods.php?id=4713" title="美的（midea）净化器KJ10F-NM">美的（midea）净化器KJ10F-NM</a>
     </div>
    	
               <div class="item hot_item2">
     <a href="goods.php?id=4758" title="长虹（CHANGHONG）50英寸 高清 等离子电视PT50718(A)">长虹（CHANGHONG）50英寸 高清...</a>
     </div>
    	
               <div class="item hot_item2">
     <a href="goods.php?id=4752" title="佳能（Canon）FS200闪存数码摄像机（银色）">佳能（Canon）FS200闪存数码摄像...</a>
     </div>
    	
        
  </div>
     
  </div>
</div>
<div class="blank"></div>
<div id="globalBest" class="globalModule">
<h3>
<div id="recom_title_r">
<div id="recom_title_l">
<span>新品上市</span>
<a target="_blank" href="search.php?intro=new">更多新品>></a>	 
</div>       
</div>   
   
</h3>
  <div id="show_new_area" class="itemGrid">
  
  
  <DIV class=container>
<SCRIPT>
function Marquee()
{
	this.ID = document.getElementById(arguments[0]);
	this.Direction = arguments[1];
	this.Step = arguments[2];
	this.Width = arguments[3];
	this.Height = arguments[4];
	this.Timer = arguments[5];
	this.WaitTime = arguments[6];
	this.StopTime = arguments[7];
	if(arguments[8])
		this.ScrollStep = arguments[8]
	else
		this.ScrollStep = this.Direction>1 ? this.Width : this.Height;
	this.CTL = this.StartID = this.Stop = this.MouseOver = 0;
	this.ID.style.overflowX = this.ID.style.overflowY = "hidden";
	this.ID.noWrap = true;
	this.ID.style.width = this.Width;
	this.ID.style.height = this.Height;
	this.ClientScroll = this.Direction>1 ? this.ID.scrollWidth : this.ID.scrollHeight;
	this.ID.innerHTML += this.ID.innerHTML;
	this.Start(this,this.Timer,this.WaitTime,this.StopTime);
}
Marquee.prototype.Start = function(msobj,timer,waittime,stoptime)
{
	msobj.StartID = function(){msobj.Scroll()}
	msobj.Continue = function()
				{
					if(msobj.MouseOver == 1)
					{
						setTimeout(msobj.Continue,waittime);
					}
					else
					{	clearInterval(msobj.TimerID);
						msobj.CTL = msobj.Stop = 0;
						msobj.TimerID = setInterval(msobj.StartID,timer);
					}
				}
	msobj.Pause = function()
			{
				msobj.Stop = 1;
				clearInterval(msobj.TimerID);
				setTimeout(msobj.Continue,waittime);
			}
	msobj.Begin = function()
	{
		msobj.TimerID = setInterval(msobj.StartID,timer);
		msobj.ID.onmouseover = function()
					{
						msobj.MouseOver = 1;
						clearInterval(msobj.TimerID);
					}
		msobj.ID.onmouseout = function()
					{
						msobj.MouseOver = 0;
						if(msobj.Stop == 0)
						{
							clearInterval(msobj.TimerID);
							msobj.TimerID = setInterval(msobj.StartID,timer);
						}
					}
	}
	setTimeout(msobj.Begin,stoptime);
}
Marquee.prototype.Scroll = function()
{
	switch(this.Direction)
	{
		case 0:
			this.CTL += this.Step;
			if(this.CTL >= this.ScrollStep && this.WaitTime > 0)
			{
				this.ID.scrollTop += this.ScrollStep + this.Step - this.CTL;
				this.Pause();
				return;
			}
			else
			{   
				if(this.ID.scrollTop >= this.ClientScroll)
				{
					this.ID.scrollTop -= this.ClientScroll;
				}
				this.ID.scrollTop += this.Step;
			}
		break;
		case 1:
			this.CTL += this.Step;
			if(this.CTL >= this.ScrollStep && this.WaitTime > 0)
			{
				this.ID.scrollTop -= this.ScrollStep + this.Step - this.CTL;
				this.Pause();
				return;
			}
			else
			{
				if(this.ID.scrollTop <= 0)
				{
					this.ID.scrollTop += this.ClientScroll;
				}
				this.ID.scrollTop -= this.Step;
			}
		break;
		case 2:
			this.CTL += this.Step;
			if(this.CTL >= this.ScrollStep && this.WaitTime > 0)
			{
				this.ID.scrollLeft += this.ScrollStep + this.Step - this.CTL;
				this.Pause();
				return;
			}
			else
			{
				if(this.ID.scrollLeft >= this.ClientScroll)
				{
					this.ID.scrollLeft -= this.ClientScroll;
				}
				this.ID.scrollLeft += this.Step;
			}
		break;
		case 3:
			this.CTL += this.Step;
			if(this.CTL >= this.ScrollStep && this.WaitTime > 0)
			{
				this.ID.scrollLeft -= this.ScrollStep + this.Step - this.CTL;
				this.Pause();
				return;
			}
			else
			{
				if(this.ID.scrollLeft <= 0)
				{
					this.ID.scrollLeft += this.ClientScroll;
				}
				this.ID.scrollLeft -= this.Step;
			}
		break;
	}
}
-->
</SCRIPT>
<DIV id=textdiv style="height:164px; overflow:hidden">
<DIV id=lr>
<div>
	<DIV class="cxtj2" >
    
             <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
   
      <p class="pic"><a target="_blank" href="goods.php?id=4765"><img src="images/no_picture.gif" alt="产品5" /></a></p>
      <p class="name" ><a target="_blank" href="goods.php?id=4765" title="产品5">产品5<span></span></a></p>
     
      <p class="price">
                美智价：<span class="goodsPrice">￥11111111元</span>
              </p>
     </div>
        <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
   
      <p class="pic"><a target="_blank" href="goods.php?id=4764"><img src="images/no_picture.gif" alt="产品4" /></a></p>
      <p class="name" ><a target="_blank" href="goods.php?id=4764" title="产品4">产品4<span></span></a></p>
     
      <p class="price">
                美智价：<span class="goodsPrice">￥11111111元</span>
              </p>
     </div>
        <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
   
      <p class="pic"><a target="_blank" href="goods.php?id=4763"><img src="images/no_picture.gif" alt="产品3" /></a></p>
      <p class="name" ><a target="_blank" href="goods.php?id=4763" title="产品3">产品3<span></span></a></p>
     
      <p class="price">
                美智价：<span class="goodsPrice">￥11111111元</span>
              </p>
     </div>
        <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
   
      <p class="pic"><a target="_blank" href="goods.php?id=4762"><img src="images/no_picture.gif" alt="产品2" /></a></p>
      <p class="name" ><a target="_blank" href="goods.php?id=4762" title="产品2">产品2<span></span></a></p>
     
      <p class="price">
                美智价：<span class="goodsPrice">￥11111111元</span>
              </p>
     </div>
        <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
   
      <p class="pic"><a target="_blank" href="goods.php?id=4760"><img src="images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUAWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
      <p class="name" ><a target="_blank" href="goods.php?id=4760" title="华为（HUAWEI）C8600 经典机器 直降70元！超值特价！">华为（HUAWEI）C8600 经典机器...<span></span></a></p>
     
      <p class="price">
                美智价：<span class="goodsPrice">￥11111111元</span>
              </p>
     </div>
        <div class="item" style=" border-bottom:none; height:163px; padding:0; padding-top:1px;">
   
      <p class="pic"><a target="_blank" href="goods.php?id=4759"><img src="images/201003/thumb_img/4759_thumb_G_1268730511818.jpg" alt="完美搭配之夏秋装韩版磨破火辣牛仔小短裤" /></a></p>
      <p class="name" ><a target="_blank" href="goods.php?id=4759" title="完美搭配之夏秋装韩版磨破火辣牛仔小短裤">完美搭配之夏秋装韩版磨破火辣牛仔小短裤<span></span></a></p>
     
      <p class="price">
                美智价：<span class="goodsPrice">￥30元</span>
              </p>
     </div>
          	
      </DIV>
</div>
</DIV></DIV>
<SCRIPT defer>
  if   (screen.width   <   1025)   
      new Marquee("textdiv",0,4,546,164,7,3000,7)
  else   
      new Marquee("textdiv",0,4,766,164,7,3000,7)
</SCRIPT>
</DIV>
  </div>
</div>
    
</div>
    <div id="globalRight">
      
<div id="newArticle" class="globalModule">
  <h3><div id="list_t_l"><div id="list_t_r"><b>京东快报</b>   &nbsp;&nbsp;&nbsp;<a target="_blank" href="article_cat.php?id=12 "> 更多>></a></div></div></h3>
<div id="global_box"> 
  <ul class="linkSkyblue">
      
     <div class="txt_list">
     <a target="_blank"  href="article.php?id=35" title="“沃”的世界我做主">“沃”的世界我做主</a>
     
     </div>
      
     <div class="txt_list">
     <a target="_blank"  href="article.php?id=34" title="3G知识普及">3G知识普及</a>
     
     </div>
      
     <div class="txt_list">
     <a target="_blank"  href="article.php?id=31" title="诺基亚6681手机广告欣赏">诺基亚6681手机广告欣...</a>
     
     </div>
      
     <div class="txt_list">
     <a target="_blank"  href="article.php?id=28" title="飞利浦9@9促销">飞利浦9@9促销</a>
     
     </div>
      
     <div class="txt_list">
     <a target="_blank"  href="article.php?id=27" title="800万像素超强拍照机 LG Viewty Smart再曝光">800万像素超强拍照机 ...</a>
     
     </div>
      
     <div class="txt_list">
     <a target="_blank"  href="article.php?id=7" title="三星电子宣布将在中国发布15款3G手机">三星电子宣布将在中国发布...</a>
     
     </div>
          </ul>
</div>  
</div>
<div class="blank"></div><div id="globalAuction" class="globalModule">
<h3><div id="list_t_l"><div id="list_t_r"><b>拍卖商品</b></div></div></h3>
<div id="global_box"> 
  <div class="itemGrid itemGrid2">
             <div class="item" style="padding:8px 5px;">
      <p class="pic"><a href="auction.php?act=view&amp;id=22"><img src="images/201001/thumb_img/4693_thumb_G_1262412960593.jpg" alt="海尔(haier)吸尘器ZW1200—201" /></a></p>
      <p class="name"><a class="a1 f10" href="auction.php?act=view&amp;id=22" title="海尔(haier)吸尘器ZW1200—201">海尔(haier)吸尘器ZW1200—2...</a></p>
      <p class="price">
        起拍价<span class="goodsPrice">￥150元</span>
      </p>
    </div>
                 <div class="txt_list">
    <a class="a1    f10 " href="auction.php?act=view&amp;id=23" title="技嘉（GIGABYTE）GA-MA785GPMT-UD2H主板REV 1.0（AMD 785G/Socket AM3）">技嘉（GIGABYTE）GA-MA785...</a>
    </div>
                 <div class="txt_list">
    <a class="a1    f10 " href="auction.php?act=view&amp;id=24" title="AMD Phenom II ×4（羿龙II四核）925盒装CPU（Socket AM3/2.8GHz/2M二级缓存/45纳米）">AMD Phenom II ×4（羿龙I...</a>
    </div>
          </div>
</div>
</div>
<div class="blank"></div>
<table cellpadding="0" cellspacing="0">
<tr><td><a href='affiche.php?ad_id=11&amp;uri=http%3A%2F%2Fwww.17558.net'
                target='_blank'><img src='data/afficheimg/1306041417806904366.jpg' width='211' height='90'
                border='0' /></a></td></tr>
</table><div class="blank"></div><table cellpadding="0" cellspacing="0">
<tr><td><a href='affiche.php?ad_id=11&amp;uri=http%3A%2F%2Fwww.17558.net'
                target='_blank'><img src='data/afficheimg/1306041417806904366.jpg' width='211' height='90'
                border='0' /></a></td></tr>
</table><div class="blank"></div><table cellpadding="0" cellspacing="0">
<tr><td><a href='affiche.php?ad_id=11&amp;uri=http%3A%2F%2Fwww.17558.net'
                target='_blank'><img src='data/afficheimg/1306041417806904366.jpg' width='211' height='90'
                border='0' /></a></td></tr>
</table><div class="blank"></div>    </div>
<div class="blank5"></div>
<div id="globalBest" class="globalModule">
<h3>
<div id="recom_title_r">
<div id="recom_title_l">
<span>特价专区</span>
<a  href="search.php?intro=promotion">更多特价>></a>	 
</div>       
</div>       
</h3>
</div>
<div class="blank"></div>
<div id="globalMiddle">
<div  id="globalcat" >
<h3>
<div class="cat_r">
<span class="title_goods" style="color:#005aa0;" ><a target="_blank" href="category.php?id=21">家用电器</a></span>
</div>
</h3>
  <div class="itemGrid">
  <div class="in">
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4763"><img src="images/no_picture.gif" alt="产品3" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4763" title="产品3">产品3<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥11111111元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4760"><img src="images/201105/thumb_img/4760_thumb_G_1306040436494.jpg" alt="华为（HUAWEI）C8600 经典机器 直降70元！超值特价！" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4760" title="华为（HUAWEI）C8600 经典机器 直降70元！超值特价！">华为（HUAWEI）C8600 经典机器...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥11111111元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4759"><img src="images/201003/thumb_img/4759_thumb_G_1268730511818.jpg" alt="完美搭配之夏秋装韩版磨破火辣牛仔小短裤" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4759" title="完美搭配之夏秋装韩版磨破火辣牛仔小短裤">完美搭配之夏秋装韩版磨破火辣牛仔小短裤<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥30元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4758"><img src="images/201003/thumb_img/4758_thumb_G_1268100949609.jpg" alt="长虹（CHANGHONG）50英寸 高清 等离子电视PT50718(A)" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4758" title="长虹（CHANGHONG）50英寸 高清 等离子电视PT50718(A)">长虹（CHANGHONG）50英寸 高清...<span>大尺寸，大视野，超强震撼，节能环保(内置底座)</span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥5799元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4755"><img src="images/201001/thumb_img/4755_thumb_G_1264531392924.jpg" alt="熊猫（PANDA） CD-500手提式复读DVD播放机" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4755" title="熊猫（PANDA） CD-500手提式复读DVD播放机">熊猫（PANDA） CD-500手提式复...<span>全功能复读（可视频同步复读）熊猫独创！</span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥499元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4754"><img src="images/201001/thumb_img/4754_thumb_G_1264530971101.jpg" alt="长虹（CHANGHONG）50英寸 高清 等离子电视PT50618A" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4754" title="长虹（CHANGHONG）50英寸 高清 等离子电视PT50618A">长虹（CHANGHONG）50英寸 高清...<span>疯抢截止时间为：28日16时！USB支持RM/RMVB!HDMI!再送原厂挂架！</span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥5299元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4753"><img src="images/201001/thumb_img/4753_thumb_G_1264530751217.jpg" alt="贝尔莱德 蒸汽挂烫机GS18-DJ/H （浅蓝色）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4753" title="贝尔莱德 蒸汽挂烫机GS18-DJ/H （浅蓝色）">贝尔莱德 蒸汽挂烫机GS18-DJ/H ...<span>疯抢截止时间为：28日16时！大品牌，低价格，高性能，最具性价比挂烫机，限量供应！</span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥199元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4713"><img src="images/201001/thumb_img/4713_thumb_G_1262436272956.jpg" alt="美的（midea）净化器KJ10F-NM" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4713" title="美的（midea）净化器KJ10F-NM">美的（midea）净化器KJ10F-NM<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥379元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4712"><img src="images/201001/thumb_img/4712_thumb_G_1262436131526.jpg" alt="亚都(YADU)净化器大力神系列 KJG1202" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4712" title="亚都(YADU)净化器大力神系列 KJG1202">亚都(YADU)净化器大力神系列 KJG...<span>给您温暖、干净的小家</span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥365元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4711"><img src="images/201001/thumb_img/4711_thumb_G_1262436015259.jpg" alt="飞利浦（philips）空气净化器AC4072" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4711" title="飞利浦（philips）空气净化器AC4072">飞利浦（philips）空气净化器AC4...<span>享受健康空气，持久保护，长久健康</span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥2988元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4709"><img src="images/201001/thumb_img/4709_thumb_G_1262418582851.jpg" alt="美的（Midea）空气加湿器 S20U-M（米宝宝）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4709" title="美的（Midea）空气加湿器 S20U-M（米宝宝）">美的（Midea）空气加湿器 S20U-...<span>美的（Midea）空气加湿器</span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥89元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4708"><img src="images/201001/thumb_img/4708_thumb_G_1262418395551.jpg" alt="美的（Midea）B40A净水杯" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4708" title="美的（Midea）B40A净水杯">美的（Midea）B40A净水杯<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥36元</span>
              </p>
    </div>
      </div>
</div>
</div>
  
<div class="blank"></div>
<script type="text/javascript">
if (screen.width < 1280) 
{ 
document.write("<a href='#'><img style='float: left' src='__ROOT__/Public/themes/jindong/images/ad_small.jpg'></a>"); 
} 
else { 
document.write("<a href='#'><img style='float: left' src='__ROOT__/Public/themes/jindong/images/ad_big.jpg'></a>"); 
} 
</script> 
  
<div class="blank"></div>
<div  id="globalcat" >
<h3>
<div class="cat_r">
<span class="title_goods" style="color:#005aa0;" ><a target="_blank" href="category.php?id=16">电脑产品</a></span>
</div>
</h3>
  <div class="itemGrid">
  <div class="in">
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4749"><img src="images/201001/thumb_img/4749_thumb_G_1262822060634.jpg" alt="技嘉（GIGABYTE）GA-MA785GPMT-UD2H主板REV 1.0（AMD 785G/Socket AM3）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4749" title="技嘉（GIGABYTE）GA-MA785GPMT-UD2H主板REV 1.0（AMD 785G/Socket AM3）">技嘉（GIGABYTE）GA-MA785...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥650元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4748"><img src="images/201001/thumb_img/4748_thumb_G_1262822000294.jpg" alt="技嘉（GIGABYTE）GA-G41M-ES2L主板 REV1.0（Intel G41/LGA 775）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4748" title="技嘉（GIGABYTE）GA-G41M-ES2L主板 REV1.0（Intel G41/LGA 775）">技嘉（GIGABYTE）GA-G41M-...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥420元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4747"><img src="images/201001/thumb_img/4747_thumb_G_1262821939621.jpg" alt="技嘉（GIGABYTE）GA-M68M-S2主板 REV 1.0（NVIDIA GeForce 7025/Socket AM3/AM2+/AM2）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4747" title="技嘉（GIGABYTE）GA-M68M-S2主板 REV 1.0（NVIDIA GeForce 7025/Socket AM3/AM2+/AM2）">技嘉（GIGABYTE）GA-M68M-...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥380元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4746"><img src="images/201001/thumb_img/4746_thumb_G_1262821854338.jpg" alt="七彩虹（Colorful）C.G41 Twin V20主板（Intel G41/LGA 775）双内存智能主板!" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4746" title="七彩虹（Colorful）C.G41 Twin V20主板（Intel G41/LGA 775）双内存智能主板!">七彩虹（Colorful）C.G41 T...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥400元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4745"><img src="images/201001/thumb_img/4745_thumb_G_1262821599819.jpg" alt="英特尔 45纳米 酷睿i7 四核处理器" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4745" title="英特尔 45纳米 酷睿i7 四核处理器">英特尔 45纳米 酷睿i7 四核处理器<span>i7-975盒装CPU（LGA1366/3.33GHz/8M缓存）</span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥8000元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4744"><img src="images/201001/thumb_img/4744_thumb_G_1262821447162.jpg" alt="英特尔 45纳米 奔腾双核处理器 E6500K盒装CPU（LGA775/2.93GHz/2M二级缓存/1066MHz）不锁倍频、支持VT、不带风扇" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4744" title="英特尔 45纳米 奔腾双核处理器 E6500K盒装CPU（LGA775/2.93GHz/2M二级缓存/1066MHz）不锁倍频、支持VT、不带风扇">英特尔 45纳米 奔腾双核处理器 E65...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥600元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4743"><img src="images/201001/thumb_img/4743_thumb_G_1262821390763.jpg" alt="英特尔 45纳米 酷睿2双核处理器 E7500盒装CPU（LGA775/2.93GHz/3M二级缓存/1066MHz）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4743" title="英特尔 45纳米 酷睿2双核处理器 E7500盒装CPU（LGA775/2.93GHz/3M二级缓存/1066MHz）">英特尔 45纳米 酷睿2双核处理器 E7...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥800元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4742"><img src="images/201001/thumb_img/4742_thumb_G_1262821315474.jpg" alt="英特尔 45纳米 酷睿2四核处理器 Q8300盒装CPU（LGA775/2.5GHz/4M二级缓存/1333MHz）新品首卖！" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4742" title="英特尔 45纳米 酷睿2四核处理器 Q8300盒装CPU（LGA775/2.5GHz/4M二级缓存/1333MHz）新品首卖！">英特尔 45纳米 酷睿2四核处理器 Q8...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥1000元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4741"><img src="images/201001/thumb_img/4741_thumb_G_1262821177258.jpg" alt="AMD Athlon II ×2（速龙II双核）245盒装CPU（Socket AM3/2.9GHz/2M二级缓存/45纳米）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4741" title="AMD Athlon II ×2（速龙II双核）245盒装CPU（Socket AM3/2.9GHz/2M二级缓存/45纳米）">AMD Athlon II ×2（速龙I...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥450元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4740"><img src="images/201001/thumb_img/4740_thumb_G_1262821118650.jpg" alt="AMD Athlon64×2（双核速龙）5200盒装CPU（Socket AM2/2.7GHz/1M二级缓存/65纳米/65W）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4740" title="AMD Athlon64×2（双核速龙）5200盒装CPU（Socket AM2/2.7GHz/1M二级缓存/65纳米/65W）">AMD Athlon64×2（双核速龙）...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥400元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4739"><img src="images/201001/thumb_img/4739_thumb_G_1262821061445.jpg" alt="AMD Phenom II ×4（羿龙II四核）925盒装CPU（Socket AM3/2.8GHz/2M二级缓存/45纳米）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4739" title="AMD Phenom II ×4（羿龙II四核）925盒装CPU（Socket AM3/2.8GHz/2M二级缓存/45纳米）">AMD Phenom II ×4（羿龙I...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥1000元</span>
              </p>
    </div>
        <div class="item">
      <p class="pic"><a target="_blank" href="goods.php?id=4738"><img src="images/201001/thumb_img/4738_thumb_G_1262821000118.jpg" alt="AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）" /></a></p>
      <p class="name"><a target="_blank" href="goods.php?id=4738" title="AMD AthlonII×2（速龙II双核）250盒装CPU（Socket AM3/3.0GHz/2M二级缓存/45纳米）">AMD AthlonII×2（速龙II双...<span></span></a>
      
      
      </p>
      <p class="price">
                美智价：<span class="goodsPrice">￥489元</span>
              </p>
    </div>
      </div>
</div>
</div>
</div>
<div id="globalRight">
<div id="globalAuction" class="globalModule top10">
<h3 class="h3_3"><div id="list_t_l">
  <div id="list_t_r"><b>益智风暴畅销排行榜</b></div></div></h3>
<div id="global_box"> 
  <div class="itemGrid itemGrid2">
       <div id="com1_b" class="tab_title clearfix" >
        <h2>航模竞技</h2>
        <h2 class="h2bg"> 机 器 人</h2>
        <h2 class="h2bg">天文地理</h2>
        </div>
      <div id="com1_v"></div>
      <div id="com1_h">
<blockquote>
<div class="line">
<div class="item">
<span class="no">1</span>
    <p class="pic"><a target="_blank" href="goods.php?id=4710"><img  src="images/201001/thumb_img/4710_thumb_G_1262426233316.jpg" alt="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_blue" /></a></p>
    <p class="name">  <a target="_blank" href="goods.php?id=4710" title="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）">联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）</a></p>
    <p class="price">
    <span class="goodsPrice"> 
        ￥5099元        </span>
    </p>
</div>
</div>
<div style="clear:both"></div>
	                 
	
<div class="txt_list">
<span class="no">2</span>
<a target="_blank" href="goods.php?id=4714" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">3</span>
<a target="_blank" href="goods.php?id=4715" title="联想（Lenovo）G系列 G450A-TFO 14.0英寸笔记本电脑 （T4300 2G 250G 512M独显 D刻 预装win7）">联想（Lenovo）G系列 G450A-TFO 14.0英寸笔记本电脑 （T4300 2G 250G 512M独显 D刻 预装win7）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">4</span>
<a target="_blank" href="goods.php?id=4716" title="宏碁（ACER）AG1731台式电脑 （E5300 1G内存 320G硬盘 多功能读卡器 DVD光驱 键鼠 预装LINUX）">宏碁（ACER）AG1731台式电脑 （E5300 1G内存 320G硬盘 多功能读卡器 DVD光驱 键鼠 预装LINUX）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">5</span>
<a target="_blank" href="goods.php?id=4717" title="戴尔（Dell）V220S商用台式电脑 （双核E5300 2G内存 320G硬盘 DVD WIN7）">戴尔（Dell）V220S商用台式电脑 （双核E5300 2G内存 320G硬盘 DVD WIN7）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">6</span>
<a target="_blank" href="goods.php?id=4726" title="戴尔（DELL）T300 塔式服务器（至强四核3323，2*2G内存，500G硬盘，DVD光驱，键鼠)">戴尔（DELL）T300 塔式服务器（至强四核3323，2*2G内存，500G硬盘，DVD光驱，键鼠)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">7</span>
<a target="_blank" href="goods.php?id=4727" title="戴尔（DELL）R200 1U机架式服务器（至强双核3220，4G内存,500G硬盘,DVD光驱,键盘 鼠标)">戴尔（DELL）R200 1U机架式服务器（至强双核3220，4G内存,500G硬盘,DVD光驱,键盘 鼠标)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">8</span>
<a target="_blank" href="goods.php?id=4728" title="华硕（ASUS） EeePC 1005HA 10.1英寸上网本 （Atom N280 1G 160G XP 蓝色）">华硕（ASUS） EeePC 1005HA 10.1英寸上网本 （Atom N280 1G 160G XP 蓝色）</a>
</div>
	                 
</blockquote>
<blockquote>
<div class="line">
<div class="item">
<span class="no">1</span>
    <p class="pic"><a target="_blank" href="goods.php?id=4718"><img  src="images/201001/thumb_img/4718_thumb_G_1262450231383.jpg" alt="诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头" class="B_blue" /></a></p>
    <p class="name">  <a target="_blank" href="goods.php?id=4718" title="诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头">诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头</a></p>
    <p class="price">
    <span class="goodsPrice"> 
        ￥3099元        </span>
    </p>
</div>
</div>
<div style="clear:both"></div>
	                 
	
<div class="txt_list">
<span class="no">2</span>
<a target="_blank" href="goods.php?id=4719" title="诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （白色） 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">3</span>
<a target="_blank" href="goods.php?id=4720" title="诺基亚（NOKIA）5230 3G手机(白色) GSM/WCDMA/EDGE 非移动定制机">诺基亚（NOKIA）5230 3G手机(白色) GSM/WCDMA/EDGE 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">4</span>
<a target="_blank" href="goods.php?id=4721" title="诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （黑色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （黑色） 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">5</span>
<a target="_blank" href="goods.php?id=4722" title="天语（K-Touch）V958c CDMA手机（黑色）电信定制">天语（K-Touch）V958c CDMA手机（黑色）电信定制</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">6</span>
<a target="_blank" href="goods.php?id=4723" title="诺基亚（Nokia）2505 CDMA手机（黑色）不享受家电下乡优惠">诺基亚（Nokia）2505 CDMA手机（黑色）不享受家电下乡优惠</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">7</span>
<a target="_blank" href="goods.php?id=4724" title="多普达(Dopod) S505 CDMA智能手机 (黑)">多普达(Dopod) S505 CDMA智能手机 (黑)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">8</span>
<a target="_blank" href="goods.php?id=4725" title="多普达(DOPOD) E806C CDMA智能手机 (黑)">多普达(DOPOD) E806C CDMA智能手机 (黑)</a>
</div>
	                 
</blockquote>
<blockquote>
<div class="line">
<div class="item">
<span class="no">1</span>
    <p class="pic"><a target="_blank" href="goods.php?id=4710"><a target="_blank" href="goods.php?id=4710"><img  src="images/201001/thumb_img/4710_thumb_G_1262426233316.jpg" alt="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_blue" /></a></a></p>
    <p class="name">  <a target="_blank" href="goods.php?id=4710" title="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）">联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）</a></p>
    <p class="price">
    <span class="goodsPrice"> 
        ￥5099元        </span>
    </p>
</div>
</div>
<div style="clear:both"></div>
	                 
	
<div class="txt_list">
<span class="no">2</span>
<a target="_blank" href="goods.php?id=4714" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">3</span>
<a target="_blank" href="goods.php?id=4715" title="联想（Lenovo）G系列 G450A-TFO 14.0英寸笔记本电脑 （T4300 2G 250G 512M独显 D刻 预装win7）">联想（Lenovo）G系列 G450A-TFO 14.0英寸笔记本电脑 （T4300 2G 250G 512M独显 D刻 预装win7）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">4</span>
<a target="_blank" href="goods.php?id=4716" title="宏碁（ACER）AG1731台式电脑 （E5300 1G内存 320G硬盘 多功能读卡器 DVD光驱 键鼠 预装LINUX）">宏碁（ACER）AG1731台式电脑 （E5300 1G内存 320G硬盘 多功能读卡器 DVD光驱 键鼠 预装LINUX）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">5</span>
<a target="_blank" href="goods.php?id=4717" title="戴尔（Dell）V220S商用台式电脑 （双核E5300 2G内存 320G硬盘 DVD WIN7）">戴尔（Dell）V220S商用台式电脑 （双核E5300 2G内存 320G硬盘 DVD WIN7）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">6</span>
<a target="_blank" href="goods.php?id=4726" title="戴尔（DELL）T300 塔式服务器（至强四核3323，2*2G内存，500G硬盘，DVD光驱，键鼠)">戴尔（DELL）T300 塔式服务器（至强四核3323，2*2G内存，500G硬盘，DVD光驱，键鼠)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">7</span>
<a target="_blank" href="goods.php?id=4727" title="戴尔（DELL）R200 1U机架式服务器（至强双核3220，4G内存,500G硬盘,DVD光驱,键盘 鼠标)">戴尔（DELL）R200 1U机架式服务器（至强双核3220，4G内存,500G硬盘,DVD光驱,键盘 鼠标)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">8</span>
<a target="_blank" href="goods.php?id=4728" title="华硕（ASUS） EeePC 1005HA 10.1英寸上网本 （Atom N280 1G 160G XP 蓝色）">华硕（ASUS） EeePC 1005HA 10.1英寸上网本 （Atom N280 1G 160G XP 蓝色）</a>
</div>
	                 
</blockquote>
       
      </div>
    <script type="text/javascript">
    <!--
    reg("com1");
    //-->
    </script>
  </div>
</div>
</div>
<div class="blank"></div>
<div class="blank"></div>
<table cellpadding="0" cellspacing="0">
<tr><td><a href='affiche.php?ad_id=12&amp;uri=http%3A%2F%2Fwww.17558.net'
                target='_blank'><img src='data/afficheimg/1306041433837845368.gif' width='211' height='90'
                border='0' /></a></td></tr>
</table><div class="blank"></div>
<div id="globalAuction" class="globalModule top10">
<h3 class="h3_3"><div id="list_t_l">
  <div id="list_t_r"><b>户外运动站畅销排行榜</b></div></div></h3>
<div id="global_box"> 
  <div class="itemGrid itemGrid2">
       <div id="com2_b" class="tab_title clearfix" >
        <h2>水上乐园</h2>
        <h2 class="h2bg">户外游戏</h2>
        <h2 class="h2bg">运动健身</h2>
        </div>
      <div id="com2_v"></div>
      <div id="com2_h">
<blockquote>
<div class="line">
<div class="item">
<span class="no">1</span>
    <p class="pic"><a target="_blank" href="goods.php?id=4718"><img  src="images/201001/thumb_img/4718_thumb_G_1262450231383.jpg" alt="诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头" class="B_blue" /></a></p>
    <p class="name">  <a target="_blank" href="goods.php?id=4718" title="诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头">诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头</a></p>
    <p class="price">
    <span class="goodsPrice"> 
        ￥3099元        </span>
    </p>
</div>
</div>
<div style="clear:both"></div>
	                 
	
<div class="txt_list">
<span class="no">2</span>
<a target="_blank" href="goods.php?id=4719" title="诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （白色） 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">3</span>
<a target="_blank" href="goods.php?id=4720" title="诺基亚（NOKIA）5230 3G手机(白色) GSM/WCDMA/EDGE 非移动定制机">诺基亚（NOKIA）5230 3G手机(白色) GSM/WCDMA/EDGE 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">4</span>
<a target="_blank" href="goods.php?id=4721" title="诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （黑色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （黑色） 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">5</span>
<a target="_blank" href="goods.php?id=4722" title="天语（K-Touch）V958c CDMA手机（黑色）电信定制">天语（K-Touch）V958c CDMA手机（黑色）电信定制</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">6</span>
<a target="_blank" href="goods.php?id=4723" title="诺基亚（Nokia）2505 CDMA手机（黑色）不享受家电下乡优惠">诺基亚（Nokia）2505 CDMA手机（黑色）不享受家电下乡优惠</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">7</span>
<a target="_blank" href="goods.php?id=4724" title="多普达(Dopod) S505 CDMA智能手机 (黑)">多普达(Dopod) S505 CDMA智能手机 (黑)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">8</span>
<a target="_blank" href="goods.php?id=4725" title="多普达(DOPOD) E806C CDMA智能手机 (黑)">多普达(DOPOD) E806C CDMA智能手机 (黑)</a>
</div>
	                 
</blockquote>
<blockquote>
<div class="line">
<div class="item">
<span class="no">1</span>
    <p class="pic"><a target="_blank" href="goods.php?id=4710"><img  src="images/201001/thumb_img/4710_thumb_G_1262426233316.jpg" alt="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）" class="B_blue" /></a></p>
    <p class="name">  <a target="_blank" href="goods.php?id=4710" title="联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）">联想（Lenovo）Y450A-TSI 14.0英寸笔记本电脑（T6600 2G 320G 512M独显 D刻 蓝牙 WIN7）</a></p>
    <p class="price">
    <span class="goodsPrice"> 
        ￥5099元        </span>
    </p>
</div>
</div>
<div style="clear:both"></div>
	                 
	
<div class="txt_list">
<span class="no">2</span>
<a target="_blank" href="goods.php?id=4714" title="惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）">惠普（hp）4411s 14.0英寸笔记本电脑（T6570 2G 250G DVD刻录 512独显 无线 摄像头）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">3</span>
<a target="_blank" href="goods.php?id=4715" title="联想（Lenovo）G系列 G450A-TFO 14.0英寸笔记本电脑 （T4300 2G 250G 512M独显 D刻 预装win7）">联想（Lenovo）G系列 G450A-TFO 14.0英寸笔记本电脑 （T4300 2G 250G 512M独显 D刻 预装win7）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">4</span>
<a target="_blank" href="goods.php?id=4716" title="宏碁（ACER）AG1731台式电脑 （E5300 1G内存 320G硬盘 多功能读卡器 DVD光驱 键鼠 预装LINUX）">宏碁（ACER）AG1731台式电脑 （E5300 1G内存 320G硬盘 多功能读卡器 DVD光驱 键鼠 预装LINUX）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">5</span>
<a target="_blank" href="goods.php?id=4717" title="戴尔（Dell）V220S商用台式电脑 （双核E5300 2G内存 320G硬盘 DVD WIN7）">戴尔（Dell）V220S商用台式电脑 （双核E5300 2G内存 320G硬盘 DVD WIN7）</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">6</span>
<a target="_blank" href="goods.php?id=4726" title="戴尔（DELL）T300 塔式服务器（至强四核3323，2*2G内存，500G硬盘，DVD光驱，键鼠)">戴尔（DELL）T300 塔式服务器（至强四核3323，2*2G内存，500G硬盘，DVD光驱，键鼠)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">7</span>
<a target="_blank" href="goods.php?id=4727" title="戴尔（DELL）R200 1U机架式服务器（至强双核3220，4G内存,500G硬盘,DVD光驱,键盘 鼠标)">戴尔（DELL）R200 1U机架式服务器（至强双核3220，4G内存,500G硬盘,DVD光驱,键盘 鼠标)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">8</span>
<a target="_blank" href="goods.php?id=4728" title="华硕（ASUS） EeePC 1005HA 10.1英寸上网本 （Atom N280 1G 160G XP 蓝色）">华硕（ASUS） EeePC 1005HA 10.1英寸上网本 （Atom N280 1G 160G XP 蓝色）</a>
</div>
	                 
</blockquote>
<blockquote>
<div class="line">
<div class="item">
<span class="no">1</span>
    <p class="pic"><a target="_blank" href="goods.php?id=4718"><img  src="images/201001/thumb_img/4718_thumb_G_1262450231383.jpg" alt="诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头" class="B_blue" /></a></p>
    <p class="name">  <a target="_blank" href="goods.php?id=4718" title="诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头">诺基亚（NOKIA）N86白色 3G手机 WCDMA/GSM800W卡尔蔡司镜头</a></p>
    <p class="price">
    <span class="goodsPrice"> 
        ￥3099元        </span>
    </p>
</div>
</div>
<div style="clear:both"></div>
	                 
	
<div class="txt_list">
<span class="no">2</span>
<a target="_blank" href="goods.php?id=4719" title="诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （白色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （白色） 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">3</span>
<a target="_blank" href="goods.php?id=4720" title="诺基亚（NOKIA）5230 3G手机(白色) GSM/WCDMA/EDGE 非移动定制机">诺基亚（NOKIA）5230 3G手机(白色) GSM/WCDMA/EDGE 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">4</span>
<a target="_blank" href="goods.php?id=4721" title="诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （黑色） 非移动定制机">诺基亚（Nokia）N97i 3G手机 WCDMA/GSM （黑色） 非移动定制机</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">5</span>
<a target="_blank" href="goods.php?id=4722" title="天语（K-Touch）V958c CDMA手机（黑色）电信定制">天语（K-Touch）V958c CDMA手机（黑色）电信定制</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">6</span>
<a target="_blank" href="goods.php?id=4723" title="诺基亚（Nokia）2505 CDMA手机（黑色）不享受家电下乡优惠">诺基亚（Nokia）2505 CDMA手机（黑色）不享受家电下乡优惠</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">7</span>
<a target="_blank" href="goods.php?id=4724" title="多普达(Dopod) S505 CDMA智能手机 (黑)">多普达(Dopod) S505 CDMA智能手机 (黑)</a>
</div>
	                 
	
<div class="txt_list">
<span class="no">8</span>
<a target="_blank" href="goods.php?id=4725" title="多普达(DOPOD) E806C CDMA智能手机 (黑)">多普达(DOPOD) E806C CDMA智能手机 (黑)</a>
</div>
	                 
</blockquote>
       
      </div>
    <script type="text/javascript">
    <!--
    reg("com2");
    //-->
    </script>
  </div>
</div>
</div>
<div class="blank"></div>
<div class="blank"></div></div>
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
        <div id="globalLink" class="globalModule">
                  <p>
                [<a target="_blank" href="http://www.17558.net" target="_blank" title="好东西分享">好东西分享</a>]
                [<a target="_blank" href="http://www.17558.net" target="_blank" title="免费精品源码">免费精品源码</a>]
              </p>
          </div>
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
  <p id="qureyInfo">共执行 721 个查询，用时 0.417233 秒，在线 3 人，Gzip 已禁用，占用内存 5.155 MB<img src="api/cron.php?t=1344196915" alt="" style="width:0px;height:0px;" /></p>
    
    <div align="center" ></div>
<div class="blank"></div>
<div style="text-align:center">
<a href="http://www.miibeian.gov.cn"><img src="__ROOT__/Public/themes/jindong/images/fot_1.gif"></a> <a href="#"><img src="__ROOT__/Public/themes/jindong/images/fot_2.gif"></a> <a href="http://police.cnool.net/infoCategoryListAction.do?act=init"><img src="__ROOT__/Public/themes/jindong/images/fot_3.gif"></a>
 </div>      
</div>  
  </div>
<script type="text/javascript" src="js/my_lefttime.js"></script></body>
</html>