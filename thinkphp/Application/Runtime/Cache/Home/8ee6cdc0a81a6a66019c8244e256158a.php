<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="/Public/public_home/css/public.css" type="text/css" rel="stylesheet"/>
    <link href="/Public/public_home/css/index.css" type="text/css" rel="stylesheet"/>
    
    <script type="text/javascript" src="/Public/public_home/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/public_home/js/slide.js"></script>
</head>
<body>
<script>
    $(function(){
        $('.nav ul li').hover(function(){
            $(this).children(".details").show();
        },function(){
            $(this).children(".details").hide();
        });
        $('#my').hover(function(){
            $(this).find("div").show();
        },function(){
            $(this).find("div").hide();
        });
    });
</script>
<!------------顶部---------------->
<div class="top">
    <div class="wt1080">
        <div class="fl">
            <?php
 if(isset($_SESSION['username'])) { echo "亲爱的<span style='color:#FC3;'>".$_SESSION['username']."</span>
                    欢迎光临洋店街&emsp;&emsp;<a href='/index.php/Home/Login/logout'>注销登录</a>"; }else{ echo "&emsp;|&emsp;请&emsp;<a href='/index.php/Home/Login/login' style='color: #ff9900'>登陆</a>&emsp;或&emsp;<a href='/index.php/Home/Login/register' style='color: #ff9900'>立即注册</a>"; } ?>
        </div>
        <div class="fr">
            <ul>
                <li style="position: relative;" id="my">
                    <a href="my_order.html">个人中心 <img src="/Public/public_home/image/sanjiao.png"></a>
                    <div class="personal">
                        <dl>
                            <dt><a href="my_order.html">我的订单</a></dt>
                            <dd><a href="youhuijuan.html">我的优惠卷</a></dd>
                            <dd><a href="jifen.html">我的积分</a></dd>
                        </dl>
                    </div>
                </li>
                <li><span><a href="article.html">关于我们</a></span></li>
                <li><span><a href="article.html">帮助中心</a></span></li>
                <li><span class="phone2">18874120997</span></li>
            </ul>
        </div>
    </div>
</div>
<!--------------logo搜索------------->
<div class="wt1080 header">
    <div class="logo fl"><a href="index.html"><img src="/Public/public_home/image/logo.png"></a></div>
    <div class="search fl">
        <div>
            <input name="search" type="text" class="a_search fl" placeholder="请输入关键字">
            <span class="b_search fl"></span>
            <div class="clear"></div>
        </div>
        <p>
            <a href="#" class="current">母婴</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="#">美妆护肤</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="#">Montagne jeunesse</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="#">食品</a>
        </p>
    </div>
    <a class="my_shop fr" href="/index.php/Home/Cart/sp_list/">我的购物车<span>3</span></a>
    <div class="clear"></div>
</div>
<!--------------导航------------------>
<div class="nav">
    <div class="wt1080">
        <ul>
            <li>
                <a href="/index.php/Home/Index/index" class="current"><span>首页</span></a>
            </li>
            <li><a href="/index.php/Home/Product/lanmu"><span>母婴专区</span></a></li>
            <li><a href="lanmu.html"><span>美妆护肤</span></a></li>
            <li><a href="lanmu.html"><span>家具生活</span></a></li>
            <li><a href="lanmu.html"><span>食品营养</span></a></li>
            <li><a href="default.html"><span>全球直邮</span></a></li>
            <li><a href="lanmu.html"><span>合作申请</span></a></li>
        </ul>
        <div style="clear:both"></div>
    </div>
</div>

<link href="/Public/public_home/css/lanmu.css" type="text/css" rel="stylesheet"/>

<div class="clear"></div>
<!--------------中间部分------------->


<div class="content">
    <!-------------新品推荐------------->
    <div class="wt1080 tuijian">
        <div class="wenzi">
            <div class="a_wenzi">新品推荐</div>
            <div class="heng"></div>
        </div>
        <div class="shangping">
            <ul>
                <li>
                    <div class="fl pic"><a href="details.html"><img src="/Public/public_home/image/product2.png"></a></div>
                    <div class="fl dd">
                        <h1><a href="details.html">三洋一次性防溢乳垫</a></h1>
                        <p class="one">柔软高吸收<br/>立体弧形贴合乳房</p>
                        <p class="two"><span>￥<span style="font-size: 22px;">89.00</span></span><font>￥128.00</font></p>
                        <p class="three">新品上线</p>
                    </div>
                </li>
                <li>
                    <div class="fl"><a href="details.html"><img src="/Public/public_home/image/product2.png"></a></div>
                    <div class="fl dd">
                        <h1><a href="details.html">三洋一次性防溢乳垫</a></h1>
                        <p class="one">柔软高吸收<br/>立体弧形贴合乳房</p>
                        <p class="two"><span>￥<span style="font-size: 22px;">89.00</span></span><font>￥128.00</font></p>
                        <p class="three">新品上线</p>
                    </div>
                </li>
                <li>
                    <div class="fl"><a href="details.html"><img src="/Public/public_home/image/product2.png"></a></div>
                    <div class="fl dd">
                        <h1><a href="details.html">三洋一次性防溢乳垫</a></h1>
                        <p class="one">柔软高吸收<br/>立体弧形贴合乳房</p>
                        <p class="two"><span>￥<span style="font-size: 22px;">89.00</span></span><font>￥128.00</font></p>
                        <p class="three">新品上线</p>
                    </div>
                </li>
                <li>
                    <div class="fl"><a href="details.html"><img src="/Public/public_home/image/product2.png"></a></div>
                    <div class="fl dd">
                        <h1><a href="details.html">三洋一次性防溢乳垫</a></h1>
                        <p class="one">柔软高吸收<br/>立体弧形贴合乳房</p>
                        <p class="two"><span>￥<span style="font-size: 22px;">89.00</span></span><font>￥128.00</font></p>
                        <p class="three">新品上线</p>
                    </div>
                </li>
                <li>
                    <div class="fl"><a href="details.html"><img src="/Public/public_home/image/product2.png"></a></div>
                    <div class="fl dd">
                        <h1><a href="details.html">三洋一次性防溢乳垫</a></h1>
                        <p class="one">柔软高吸收<br/>立体弧形贴合乳房</p>
                        <p class="two"><span>￥<span style="font-size: 22px;">89.00</span></span><font>￥128.00</font></p>
                        <p class="three">新品上线</p>
                    </div>
                </li>
                <li>
                    <div class="fl"><a href="details.html"><img src="/Public/public_home/image/product2.png"></a></div>
                    <div class="fl dd">
                        <h1><a href="details.html">三洋一次性防溢乳垫</a></h1>
                        <p class="one">柔软高吸收<br/>立体弧形贴合乳房</p>
                        <p class="two"><span>￥<span style="font-size: 22px;">89.00</span></span><font>￥128.00</font></p>
                        <p class="three">新品上线</p>
                    </div>
                </li>
            </ul>
            <span class="heng1"></span>
            <span class="shu1"></span>
            <span class="shu2"></span>
        </div>
        <!---------------商品列表---------------->
        <div class="ware wt1080">
            <div class="ware_top">
                <span>面霜乳液</span>
                <a href="product_list.html">更多&gt;&gt;</a>
            </div>
            <div class="ware_bottom">
                <ul>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product3.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <!---------------商品列表---------------->
        <div class="ware wt1080">
            <div class="ware_top">
                <span>面霜乳液</span>
                <a href="product_list.html">更多&gt;&gt;</a>
            </div>
            <div class="ware_bottom">
                <ul>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product3.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <!---------------商品列表---------------->
        <div class="ware wt1080">
            <div class="ware_top">
                <span>面霜乳液</span>
                <a href="product_list.html">更多&gt;&gt;</a>
            </div>
            <div class="ware_bottom">
                <ul>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product3.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/product6.png"></a></div>
                        <p style="margin-bottom: 10px;"><a href="details.html">原装【贝贝自营】惠氏S-26金装爱儿乐婴儿配方奶粉 1段 900克*2</a></p>
                        <p><span class="one">￥<span style="font-size: 22px;">336.00</span></span><span class="two">￥336.00</span></p>
                        <div class="qianggou"><a href="details.html">立即抢购</a></div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!---------------------保障------------------->
<div class="baozhang">
    <div class="wt1080">
        <ul>
            <li>
                <img src="/Public/public_home/image/c1.png">
                <p>全球正品货源</p>
            </li>
            <li>
                <img src="/Public/public_home/image/c2.png">
                <p>一件代发</p>
            </li>
            <li>
                <img src="/Public/public_home/image/c3.png">
                <p>全球直邮</p>
            </li>
            <li>
                <img src="/Public/public_home/image/c5.png">
                <p>售后无忧</p>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<!---------------底部--------------->
<div class="footer">
    <div class="wt1080" style="position: relative">
        <div class="a_footer">
            <div class="left">
                <a href="index.html"><img src="/Public/public_home/image/logo.png"></a>
                <p class="lianxi">
                    <a href="#"><img src="/Public/public_home/image/weixin.png"></a>
                    <a href="#"><img src="/Public/public_home/image/weibo.png"></a>
                    <a href="#"><img src="/Public/public_home/image/QQ.png"></a>
                    <span>028-6133 8882</span>
                </p>
            </div>
            <div class="right">
                <ul>
                    <li>
                        <dl>
                            <dt><a href="article.html">新手指南</a></dt>
                            <dd><a href="article.html">购物流程</a></dd>
                            <dd><a href="article.html">支付方式</a></dd>
                            <dd><a href="article.html">通关关税</a></dd>
                            <dd><a href="article.html">常见问题</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="article.html">新手指南</a></dt>
                            <dd><a href="article.html">购物流程</a></dd>
                            <dd><a href="article.html">支付方式</a></dd>
                            <dd><a href="article.html">通关关税</a></dd>
                            <dd><a href="article.html">常见问题</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="article.html">新手指南</a></dt>
                            <dd><a href="article.html">购物流程</a></dd>
                            <dd><a href="article.html">支付方式</a></dd>
                            <dd><a href="article.html">通关关税</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="article.html">新手指南</a></dt>
                            <dd><a href="article.html">购物流程</a></dd>
                            <dd><a href="article.html">支付方式</a></dd>
                            <dd><a href="article.html">通关关税</a></dd>
                            <dd><a href="article.html">常见问题</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="weixin"><img src="/Public/public_home/image/weixin1.png"><p>扫描二维码下载APP</p></div>
        <!------------------------>
        <p class="beian">Copyright © 2016 洋店网.版权所有.备案号：京ICP证35124521号.技术支持：西部网络</p>
    </div>
</div>
</body>
</html>