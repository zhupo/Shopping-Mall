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

<link href="/Public/public_home/css/gouwuche.css" type="text/css" rel="stylesheet"/>
<!---------------------导航完--------------------->

<!--------------------内容----------------------->
<div class="wt1080">
    <!--------------标题----------->
    <div class="my_car">
        <h1>我的购物车</h1>
        <div class="place">
            <ul>
                <li class="current"><span>1</span><p>我的购物车</p></li>
                <li><span>2</span><p>提交订单</p></li>
                <li><span>3</span><p>选择支付方式</p></li>
            </ul>
            <span class="heng"></span>
        </div>
    </div>
    <!--------------选择----------->
    <div class="details">
        <div class="title">
            <div style="text-align: left;width: 84px;"><input type="checkbox" style="float: left;margin-top: 1px;margin-right: 5px;cursor: pointer" />全选</div>
            <div style="width: 432px;">商品</div>
            <div style="width: 141px;">单价</div>
            <div style="width: 141px;">数量</div>
            <div style="width: 141px;">合计</div>
            <div style="width: 141px;">操作</div>
        </div>
        <!-----------------------商品展示---------------------------->
        <div class="goods">
        	<?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="goods_details">
                  <div class="g_one"><input type="checkbox" name="ID[]" value="<?php echo ($v["id"]); ?>" /></div>
                    <div class="g_two">
                        <div class="h">
                            <div class="pic"><a href="#"><img src="/Public/uploads/<?php echo ($v["thumb"]); ?>"></a></div>
                            <div class="miaoshu">
                                <p style="margin-top: 5px;"><a href="#"><?php echo ($v["title"]); ?></a></p>
                                <p style="color: #888888;margin-top: 5px;">杭州保税区仓</p>
                            </div>
                        </div>
                    </div>
                    <div class="g_three"><p class="y"></p><p class="k">￥<?php echo ($v["price"]); ?></p></div>
                    <div class="g_four">
                        <div>
                            <span style="border-right: 1px solid #eeeeee">-</span>
                            <input name="" type="text" value="<?php echo ($v["productnum"]); ?>">
                            <span style="border-left: 1px solid #eeeeee">+</span>
                        </div>
                    </div>
                    <div class="g_five"><p>￥<?php echo ($v["price"]); ?></p></div>
                    <div class="g_six"><a href="/index.php/Home/Cart/shoppdel/id/<?php echo ($v["id"]); ?>"><span></span></a></div>
                </div><?php endforeach; endif; ?>
        </div>
        <!------------------下部分------------------>
        <div class="d_d">
            <div class="d_d_l">
                <a href="#" style="margin-left: 10px;">删除选中商品</a>
            </div>

            <div class="d_d_r">
                <p class="o">已选商品<span>1</span>件<font>总价（不含运费）：<span>118.00</span></font></p>
                <p class="t">商品应付总计：￥198.00<font>订单关税：￥0</font></p>
            </div>
            <a href="order.html" class="jiesuan">去结算</a>
        </div>
    </div>
    <!---------------------热销------------------>
    <div class="hot">
        <div class="title">热销推荐</div>
        <div class="content">
            <ul>
                <li>
                    <div class="pic"><a href="#"><img src="/Public/public_home/image/p11.png"></a></div>
                    <p class="c_t"><a href="#">Regen/丽珍 纯棉超细纤维美白皮肤面膜贴 10片</a></p>
                    <p class="price">￥89.00</p>
                    <a href="#" class="goumai">立即购买</a>
                </li>
                <li>
                    <div class="pic"><a href="#"><img src="/Public/public_home/image/p11.png"></a></div>
                    <p class="c_t"><a href="#">Regen/丽珍 纯棉超细纤维美白皮肤面膜贴 10片</a></p>
                    <p class="price">￥89.00</p>
                    <a href="#" class="goumai">立即购买</a>
                </li>
                <li>
                    <div class="pic"><a href="#"><img src="/Public/public_home/image/p11.png"></a></div>
                    <p class="c_t"><a href="#">Regen/丽珍 纯棉超细纤维美白皮肤面膜贴 10片</a></p>
                    <p class="price">￥89.00</p>
                    <a href="#" class="goumai">立即购买</a>
                </li>
                <li>
                    <div class="pic"><a href="#"><img src="/Public/public_home/image/p11.png"></a></div>
                    <p class="c_t"><a href="#">Regen/丽珍 纯棉超细纤维美白皮肤面膜贴 10片</a></p>
                    <p class="price">￥89.00</p>
                    <a href="#" class="goumai">立即购买</a>
                </li>
                <li>
                    <div class="pic"><a href="#"><img src="/Public/public_home/image/p11.png"></a></div>
                    <p class="c_t"><a href="#">Regen/丽珍 纯棉超细纤维美白皮肤面膜贴 10片</a></p>
                    <p class="price">￥89.00</p>
                    <a href="#" class="goumai">立即购买</a>
                </li>
            </ul>
            <div class="clear"></div>
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