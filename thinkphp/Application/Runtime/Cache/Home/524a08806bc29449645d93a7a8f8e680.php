<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <title>用户注册</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="/thinkphp/Public/public_home/css/zhuce.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="/thinkphp/Public/public_home/js/jquery-1.7.2.min.js"></script>
</head>
<body>
<!---------------头部----------------->
<div class="wt1080 top">
    <div class="logo"><a href="#"><img src="/thinkphp/Public/public_home/image/logo.png"></a></div>
    <div class="rr">
        <ul>
            <li>
                <img src="/thinkphp/Public/public_home/image/bg3.png">
                <p>全球正品货源</p>
            </li>
            <li>
                <img src="/thinkphp/Public/public_home/image/bg5.png">
                <p>一件代发</p>
            </li>
            <li>
                <img src="/thinkphp/Public/public_home/image/bg4.png">
                <p>全球直邮</p>
            </li>
            <li>
                <img src="/thinkphp/Public/public_home/image/bg6.png">
                <p>售后无忧</p>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!----------------------中间------------------------->
<div class="red">
    <div class="wt1080 login">
        <div class="login_pic"><img src="/thinkphp/Public/public_home/image/login.jpg"></div>
        <div class="l_k">
        	<form action="" method="post">
                <h1>新用户注册</h1>
                <div class="l_k_d">用户名：<input type="text" name="username" placeholder="请输入您的手机号"></div>
                <div class="l_k_d">设置密码：<input type="password" name="password" placeholder="密码必须以字母或下划线开头长度为6-20"></div>
                <div class="l_k_d">确认密码：<input type="password" name="repassword" placeholder="请再次输入密码"></div>
                <div class="l_k_s">验证码：<input type="text" name="code" placeholder="请输入验证码"></div>
                <div class="verify"><img src="/thinkphp/index.php/Home/Yzm/captcha" onclick="this.src='/thinkphp/index.php/Home/Yzm/captcha?run='+Math.round(Math.random()*100)" width="100" height="32" class="passcode" /></div>
                <p>点击注册，表示您同意本网站<a href="#">《服务协议》</a></p>
                <input name="" type="submit" class="res" value="注册">
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