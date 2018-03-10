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
	<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="css/pintuer.css">
<link rel="stylesheet" href="css/admin.css">
<script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">图片</th>
      <th width="15%">名称</th>
      <th width="20%">描述</th>
      <th width="10%">排序</th>
      <th width="15%">操作</th>
    </tr>
   
    <tr>
      <td>1</td>     
      <td><img src="images/11.jpg" alt="" width="120" height="50" /></td>     
      <td>首页焦点图</td>
      <td>描述文字....</td>
      <td>1</td>
      <td><div class="button-group">
      <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
    <tr>
      <td>2</td>     
      <td><img src="images/11.jpg" alt="" width="120" height="50" /></td>     
      <td>首页焦点图</td>
      <td>描述文字....</td>
      <td>1</td>
      <td><div class="button-group">
      <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
    <tr>
      <td>3</td>     
      <td><img src="images/11.jpg" alt="" width="120" height="50" /></td>     
      <td>首页焦点图</td>
      <td>描述文字....</td>
      <td>1</td>
      <td><div class="button-group">
      <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
    
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){
	
	}
}
</script>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">    
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>URL：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="url" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：1920*500</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="note" style="height:120px;" value=""></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value="0"  data-validate="required:,number:排序必须为数字" />
          <div class="tips"></div>
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
</body></html>
</div>
</body>
</html>
<script src="/Public/public_admin/js/list.js"></script>