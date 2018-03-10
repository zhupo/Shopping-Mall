<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/Public/public_admin/css/pintuer.css">
    <link rel="stylesheet" href="/Public/public_admin/css/admin.css">
    <script src="/Public/public_admin/js/jquery.js"></script> 
    <script src="/Public/public_admin/js/pintuer.js"></script> 
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/Public/public_admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="/index.php/Home" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="/index.php/Admin/Login/logout"><span class="icon-power-off"></span> 退出登录</a></div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul>
    <li><a href="/index.php/Admin/Jiben/info"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="/index.php/Admin/Jiben/pass"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="/index.php/Admin/Jiben/page"><span class="icon-caret-right"></span>单页管理</a></li>  
    <li><a href="/index.php/Admin/Jiben/adv"><span class="icon-caret-right"></span>首页轮播</a></li>       
    <li><a href="/index.php/Admin/Jiben/column"><span class="icon-caret-right"></span>栏目管理</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>管理员管理</h2>
  <ul>
    <li><a href="/index.php/Admin/Admin/admin_list" ><span class="icon-caret-right"></span>管理员列表</a></li>
    <li><a href="/index.php/Admin/Admin/admin_add" ><span class="icon-caret-right"></span>添加管理员</a></li>     
  </ul>
  <h2><span class="icon-pencil-square-o"></span>商品类别管理</h2>
  <ul>
    <li><a href="/index.php/Admin/Class/class_list" ><span class="icon-caret-right"></span>商品类别列表</a></li>
    <li><a href="/index.php/Admin/Class/class_add" ><span class="icon-caret-right"></span>添加商品类别</a></li>     
  </ul>
  <h2><span class="icon-pencil-square-o"></span>商品管理</h2>
  <ul>
    <li><a href="/index.php/Admin/product/product_list" ><span class="icon-caret-right"></span>商品列表</a></li>
    <li><a href="/index.php/Admin/product/product_add" ><span class="icon-caret-right"></span>上传商品</a></li>     
  </ul>
  <h2><span class="icon-pencil-square-o"></span>订单管理</h2>
  <ul>
    <li><a href="/index.php/Admin/Order/order_list" ><span class="icon-caret-right"></span>订单列表</a></li> 
  </ul> 
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo U('Index/info');?>" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
	<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>上传商品</strong></div>
  <div class="padding border-bottom">
    <a href="/index.php/Admin/Product/product_list"><button type="button" class="button border-yellow"><span></span>返回列表</button></a>
  </div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>商品名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入商品名" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>商品类别：</label>
        </div>
        <div class="field">
          <select name="classId" class="input w50">
            <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["classname"]); ?></option><?php endforeach; endif; ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="thumb" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover"  />
        </div>
      </div>     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>规格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="specification" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="price" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>库存：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="stocks" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>其他属性：</label>
      	</div>
      	<div class="field" style="padding-top:8px;"> 
        	推荐 <input id="isCommend" name="isCommend"  type="checkbox" value="推荐" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	首页 <input id="ishome" name="ishome"  type="checkbox" value="首页"/>
      	</div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</body>
</html>
<script src="/Public/public_admin/js/list.js"></script>