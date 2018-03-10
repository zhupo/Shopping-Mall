<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <title>用户登录</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="/Public/public_home/css/login.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="/Public/public_home/js/jquery-1.7.2.min.js"></script>
</head>
<body>
<!---------------头部----------------->
<div class="wt1080 top">
    <div class="logo"><a href="#"><img src="/Public/public_home/image/logo.png"></a></div>
    <div class="rr">
        <ul>
            <li>
                <img src="/Public/public_home/image/bg3.png">
                <p>全球正品货源</p>
            </li>
            <li>
                <img src="/Public/public_home/image/bg5.png">
                <p>一件代发</p>
            </li>
            <li>
                <img src="/Public/public_home/image/bg4.png">
                <p>全球直邮</p>
            </li>
            <li>
                <img src="/Public/public_home/image/bg6.png">
                <p>售后无忧</p>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!----------------------中间------------------------->
<div class="red">
    <div class="wt1080 login">
        <div class="login_pic"><img src="/Public/public_home/image/login.jpg"></div>
        <div class="l_k">
        	<form action="" method="post">
                <div class="l_k_t">
                    <span class="one">登陆洋店</span>
                    <span class='two'>还没有洋店帐号？<a href="/index.php/Home/Login/register">立即注册</a></span>
                </div>
                <!-----------登录框----------->
                <div class="l_k_d">
                    <input type="text" class="admin" name="username" placeholder="请输入用户名">
                    <input type="password" class="pass" name="password" placeholder="请输入密码">
                </div>
                <div class="mem">
                    <span><input type="checkbox" >记住密码</span>
                    <a href="#">忘记密码？</a>
                </div>
                <input type="submit" class="s_login" value="马上登陆">
                <span class="xie"></span>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-------------------底部------------------------>
<div class="foot wt1080">
    <ul>
        <li><a href="#">网站简介</a></li>
        <li><a href="#">联系我们</a></li>
        <li><a href="#">招商合作</a></li>
        <li><a href="#">销售联盟</a></li>
    </ul>
    <p>Copyright © 2016 洋店网.版权所有.备案号：京ICP证35124521号.技术支持：西部网络</p>
</div>

</body>
</html>