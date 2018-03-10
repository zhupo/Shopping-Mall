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
	<form action="" method="post">
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 商品列表</strong></div>
  <!--<div class="padding border-bottom">
    <a href="product_add">
    <button type="button" class="button border-yellow"><span class="icon-plus-square-o"></span>添加商品</button></a>
  </div>-->
  <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="/thinkphp/index.php/Admin/Product/product_add"> 添加商品</a> </li>
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block"  value="<?php echo ($keywords); ?>"/>
          <input type="submit" class="button border-main icon-search" value="搜索" />
        </li>
      </ul>
  </div>
  <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th width="10%">商品名</th>
        <th>商品类别</th>
        <th>图片</th>
        <th>价格</th>
        <th>库存</th>
        <th>是否推荐</th>
        <th>是否首页</th>
        <th width="310">操作</th>
      </tr>
      <volist name="list" id="vo">
      <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?php echo ($v["id"]); ?>" />
           <?php echo ($v["id"]); ?></td>
          <td><?php echo ($v["title"]); ?></td>
          <td><?php echo ($v["classid"]); ?></td>
          <td><img style="width:100px;height:100px;" src="/thinkphp/Public/uploads/<?php echo ($v["thumb"]); ?>" /></td>
          <td><?php echo ($v["price"]); ?></td>
          <td><?php echo ($v["stocks"]); ?></td>
          <td><font color="#00CC99"><?php echo ($v["iscommend"]); ?></font></td>
          <td><font color="#00CC99"><?php echo ($v["ishome"]); ?></font></td>
          <td><div class="button-group"> <a class="button border-main" href="/thinkphp/index.php/Admin/Product/product_update/id/<?php echo ($v["id"]); ?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="/thinkphp/index.php/Admin/Product/product_del/id/<?php echo ($v["id"]); ?>" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr><?php endforeach; endif; ?>
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="9" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()">批量删除</a></td>
      </tr>
      <tr>
        <td colspan="9"><div class="pagelist"><?php echo ($page); ?></div></td>
      </tr>
    </table>
</div>
</form>

</div>
</body>
</html>
<script src="/thinkphp/Public/public_admin/js/list.js"></script>