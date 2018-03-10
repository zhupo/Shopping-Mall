<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/thinkphp/Public/public_admin/css/pintuer.css">
    <link rel="stylesheet" href="/thinkphp/Public/public_admin/css/admin.css">
    <script src="/thinkphp/Public/public_admin/js/jquery.js"></script> 
    <script src="/thinkphp/Public/public_admin/js/pintuer.js"></script> 
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/thinkphp/Public/public_admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="/thinkphp/index.php/Home" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="/thinkphp/index.php/Admin/Login/logout"><span class="icon-power-off"></span> 退出登录</a></div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul>
    <li><a href="/thinkphp/index.php/Admin/Jiben/info"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="/thinkphp/index.php/Admin/Jiben/pass"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="/thinkphp/index.php/Admin/Jiben/page"><span class="icon-caret-right"></span>单页管理</a></li>  
    <li><a href="/thinkphp/index.php/Admin/Jiben/adv"><span class="icon-caret-right"></span>首页轮播</a></li>       
    <li><a href="/thinkphp/index.php/Admin/Jiben/column"><span class="icon-caret-right"></span>栏目管理</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>管理员管理</h2>
  <ul>
    <li><a href="/thinkphp/index.php/Admin/Admin/admin_list" ><span class="icon-caret-right"></span>管理员列表</a></li>
    <li><a href="/thinkphp/index.php/Admin/Admin/admin_add" ><span class="icon-caret-right"></span>添加管理员</a></li>     
  </ul>
  <h2><span class="icon-pencil-square-o"></span>商品类别管理</h2>
  <ul>
    <li><a href="/thinkphp/index.php/Admin/Class/class_list" ><span class="icon-caret-right"></span>商品类别列表</a></li>
    <li><a href="/thinkphp/index.php/Admin/Class/class_add" ><span class="icon-caret-right"></span>添加商品类别</a></li>     
  </ul>
  <h2><span class="icon-pencil-square-o"></span>商品管理</h2>
  <ul>
    <li><a href="/thinkphp/index.php/Admin/product/product_list" ><span class="icon-caret-right"></span>商品列表</a></li>
    <li><a href="/thinkphp/index.php/Admin/product/product_add" ><span class="icon-caret-right"></span>上传商品</a></li>     
  </ul>
  <h2><span class="icon-pencil-square-o"></span>订单管理</h2>
  <ul>
    <li><a href="/thinkphp/index.php/Admin/Order/order_list" ><span class="icon-caret-right"></span>订单列表</a></li> 
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改管理员</strong></div>
  <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main" href="/thinkphp/index.php/Admin/Admin/admin_list">返回列表</a></li>
      </ul>
  </div>
  <div class="body-content">
    <form method="post" class="form-x" action="">  
      <div class="form-group">
        <div class="label">
          <label>管理员账号：</label>
        </div>
        <div class="field" style="margin-top:8px;">
          <?php echo ($data['adminname']); ?>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>真实姓名：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="realName" class="input w50" style="width:25%; float:left;"  value="<?php echo ($data['realname']); ?>"  data-toggle="hover" data-place="right" data-image="" />
        </div>
      </div>      
	  <div class="form-group">
        <div class="label">
          <label>性别：</label>
        </div>
        <div class="field" style="margin-top:10px;">
           男<input type="radio" name="sex" style="cursor:pointer;" value="男" <?php if(($data["sex"]) == "男"): ?>checked<?php endif; ?> />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           女<input type="radio" name="sex" value="女" style="cursor:pointer;" <?php if(($data["sex"]) == "女"): ?>checked<?php endif; ?> />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>联系方式：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="phone" class="input w50" style="width:25%; float:left;"  value="<?php echo ($data['phone']); ?>"  data-toggle="hover" data-place="right" data-image="" />
        </div>
      </div>  
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit">提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</body>
</html>
<script src="/thinkphp/Public/public_admin/js/list.js"></script>