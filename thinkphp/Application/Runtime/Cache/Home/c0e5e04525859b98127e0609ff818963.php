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

<link href="/Public/public_home/css/show.css" type="text/css" rel="stylesheet"/>
<!---------------------导航完--------------------->

<script type="/Public/public_home/text/javascript" src="js/owl.carousel.min.js"></script>
<div class="wt1080">
    <!----------------位置--------------------->
    <div class="place">
        当前位置：<span class="check"><?php if(is_array($arr)): foreach($arr as $key=>$v): ?>&nbsp;<a 
		href="/index.php/Home/Product/product_list/id/<?php echo ($v["Id"]); ?>"><?php echo ($v["className"]); ?></a>&nbsp;&gt;<?php endforeach; endif; ?></span>
    </div>
    <!-------------商品详细----------------->
    <div class="property">
        <div class="left">
            <div class="left_top">
                <img src="/Public/uploads/<?php echo ($data['thumb']); ?>" class="jqzoom" >
                <a href="#" class="search"></a>
            </div>
        </div>
        <div class="right">
            <a href="#" class="title"><?php echo ($data['title']); ?>   <?php echo ($data['specification']); ?></a>
            <div class="aa">
                <span class="a">价格</span>
                <span class="b">￥<?php echo ($data['price']); ?></span>
                <span class="c">包邮</span>
                <span class="d">国内参考价 ￥988.00</span>
            </div>
            <table>
                <tr>
                    <td class="one">库存</td>
                    <td><?php echo ($data['stocks']); ?></td>
                </tr>
                <tr>
                    <td class="one">关税</td>
                    <td>本商品实用税率为10%，若订单关税<50元则免征</td>
                </tr>
                <tr>
                    <td class="one">数量</td>
                    <td>
                        <div class="change">
                            <span class="zuo">-</span>
                            <input name="" type="text" value="1">
                            <span class="you">+</span>
                        </div>
                    </td>
                </tr>
            </table>
            <!-----------------购买按钮--------------->
            <div class="shopping">
                <a href="order.html" class="buy">立即购买</a>
                <a href="/index.php/Home/Cart/shoppcar/id/<?php echo ($data['id']); ?>" class="shop_car">加入购物车</a>
                <div class="clear"></div>
            </div>
            <!-----------保障---------------->
            <div class="b_baozhang">
                <ul>
                    <li>
                        <img src="/Public/public_home/image/u1.png">
                        <p>全球正品货源</p>
                    </li>
                    <li>
                        <img src="/Public/public_home/image/u2.png">
                        <p>一件代发</p>
                    </li>
                    <li>
                        <img src="/Public/public_home/image/u3.png">
                        <p>全球直邮</p>
                    </li>
                    <li>
                        <img src="/Public/public_home/image/u4.png">
                        <p>售后无忧</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <!-----------------下半部分------------------->
    <div class="details">
        <div class="details_left">
            <div class="d_l_t">
                <div class="d_l_t_t">
                    <a href="" class="current">商品详情</a>
                    <a href="">买家口碑(1600)</a>
                </div>
                <!-----------详细内容---------->
                <div class="d_l_t_d">
                    <img src="/Public/public_home/image/xiangxi.png">
                </div>
                <!----------评价---------->
            </div>
            <div class="pingjia">
                <div class="pingjia_t">
                    <span>买家口碑</span>本商品由Aptamil/爱他美发货并提供售后服务
                </div>
                <!----------评价----------->
                <div class="pingjia_d">
                    <div class="pingjia_d_t">
                        <span class="current"><img src="/Public/public_home/image/d1.png">全部评价（5884）</span>
                        <span><img src="/Public/public_home/image/d2.png">好评（5750）</span>
                        <span><img src="/Public/public_home/image/d2.png">好评（48）</span>
                        <span><img src="/Public/public_home/image/d2.png">差评（86）</span>
                        <span><img src="/Public/public_home/image/d2.png">晒单（227）</span>
                    </div>
                    <!----------留言----------->
                    <div class="pingjia_d_l">
                        <ul>
                            <li>
                                <p class="title"><span>月夜花香</span>（2015-10-03 21:47:13）</p>
                                <p class="pic"><img src="/Public/public_home/image/p10.jpeg"></p>
                                <p class="mess">已经开始喝第二阶段的奶粉了，会继续支持德贝。</p>
                                <p class="admin">管理员：亲爱的用户，已返现到您的会员账户，感谢你对德贝的支持，我们会继续坚持给您带来最极致的服务。</p>
                            </li>

                            <li>
                                <p class="title"><span>月夜花香</span>（2015-10-03 21:47:13）</p>
                                <p class="pic"><img src="/Public/public_home/image/p10.jpeg"></p>
                                <p class="mess">已经开始喝第二阶段的奶粉了，会继续支持德贝。</p>
                                <p class="admin">管理员：亲爱的用户，已返现到您的会员账户，感谢你对德贝的支持，我们会继续坚持给您带来最极致的服务。</p>
                            </li>

                            <li>
                                <p class="title"><span>月夜花香</span>（2015-10-03 21:47:13）</p>
                                <p class="pic"><img src="/Public/public_home/image/p10.jpeg"></p>
                                <p class="mess">已经开始喝第二阶段的奶粉了，会继续支持德贝。</p>
                                <p class="admin">管理员：亲爱的用户，已返现到您的会员账户，感谢你对德贝的支持，我们会继续坚持给您带来最极致的服务。</p>
                            </li>
                        </ul>
                    </div>
                    <!---------------分页--------------->
                    <div class="page"><a href="#">上一页</a><a href="#">1</a><a href="#">2</a><a href="#">下一页</a></div>
                </div>
            </div>
            <!---------------------常见问题------------------->
            <div class="problem">
                <h1>常见问题</h1>
                <div class="problem_c">
                    <div class="problem_c_t">
                        <div class="title">
                            <span>Q</span>
                            <font>商品来自哪里？</font>
                            <div class="clear"></div>
                        </div>
                        <div class="answer">
                            <span>A</span>
                            <font>我们的专业招商团队，确保所有的品牌均为海外优质品牌，主要是由海外品牌入住商或品牌代理经销商等品牌入驻商提供，让你轻松享受到国外优质原装进口商品。</font>
                            <div class="clear"></div>
                        </div>

                        <div class="title">
                            <span>Q</span>
                            <font>我还要额外缴纳关税么？</font>
                            <div class="clear"></div>
                        </div>
                        <div class="answer">
                            <span>A</span>
                            <font>依据《中华人民共和国进境物品归类表》，以商品实际销售价格作为完税价格（征税基数），参照行邮税税率征收进境物品进口税，应征税在50元以下（含50元），海关予以免征。</font>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!------------------->
                    <p>联系在线客服，或拨打客户电话：028-6133 8882。<p>
                    <p>客户工作时间：周一到周日9：00-22：00，法定假日除外。<p>
                </div>
            </div>
        </div>



        <div class="details_right">
            <div class="d_r_t">相似推荐</div>
            <div class="d_r_d">
                <ul>
                    <li>
                        <a href="#"><img src="/Public/public_home/image/p9.png"></a>
                        <p><a href="#">德国爱他美Aptamil奶粉...</a></p>
                        <p><span>￥<font>359.00</font></span> 5.2折包邮</p>
                    </li>
                    <li>
                        <a href="#"><img src="/Public/public_home/image/p9.png"></a>
                        <p><a href="#">德国爱他美Aptamil奶粉...</a></p>
                        <p><span>￥<font>359.00</font></span> 5.2折包邮</p>
                    </li>
                    <li>
                        <a href="#"><img src="/Public/public_home/image/p9.png"></a>
                        <p><a href="#">德国爱他美Aptamil奶粉...</a></p>
                        <p><span>￥<font>359.00</font></span> 5.2折包邮</p>
                    </li>
                    <li>
                        <a href="#"><img src="/Public/public_home/image/p9.png"></a>
                        <p><a href="#">德国爱他美Aptamil奶粉...</a></p>
                        <p><span>￥<font>359.00</font></span> 5.2折包邮</p>
                    </li>
                    <li>
                        <a href="#"><img src="/Public/public_home/image/p9.png"></a>
                        <p><a href="#">德国爱他美Aptamil奶粉...</a></p>
                        <p><span>￥<font>359.00</font></span> 5.2折包邮</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
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