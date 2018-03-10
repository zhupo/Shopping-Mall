<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
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
<div class="nav">
    <div class="wt1080">
        <ul>
            <li>
                <a href="/index.php/Home/Index/index" class="current"><span>首页</span></a>
            </li>
            <?php if(is_array($arr)): $i = 0; $__LIST__ = array_slice($arr,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><div class="cate">
            <li>
                <a href="/index.php/Home/Product/lanmu/id/<?php echo ($v1["id"]); ?>"><span><?php echo ($v1["classname"]); ?></span></a>
                <div class="details">
                    <div class="item">
                    	<?php if(isset($v1["child"])): if(is_array($v1["child"])): $i = 0; $__LIST__ = array_slice($v1["child"],0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><p class="title"><a href="/index.php/Home/Product/lanmu/id/
<?php echo ($v2["id"]); ?>"><?php echo ($v2["classname"]); ?></a></p>
                            <div class="ctgnamebox">
                            <?php if(isset($v2["child"])): if(is_array($v2["child"])): $i = 0; $__LIST__ = array_slice($v2["child"],0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?><a href="/index.php/Home/Product/product_list/id/<?php echo ($v3["id"]); ?>"><?php echo ($v3["classname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                            </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </div>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
            <li><a href="lanmu.html"><span>合作申请</span></a></li>
        </ul>
        <div style="clear:both"></div>
    </div>
</div>
<!----------------轮播图-------------------->
<div class="index_banner minWidth" id="focus">
    <ul>
        <li style="background:url(/Public/public_home/image/bg2.png) no-repeat center;height: 452px;"><a href="#" title="" target="_blank"></a></li>
        <li style="background:url(/Public/public_home/image/bg2.png) no-repeat center;height: 452px;"><a href="#" title="" target="_blank"></a></li>
    </ul>
</div>
<div class="clear"></div>
<!--------------中间部分------------->
<div class="wt1080 middle">
    <div class="fl">
        <ul>
            <li>
                <img src="/Public/public_home/image/bg3.png">
                <p>全球正品货源</p>
            </li>
            <li>
                <img src="/Public/public_home/image/bg4.png">
                <p>全球直邮</p>
            </li>
            <li>
                <img src="/Public/public_home/image/bg5.png">
                <p>一件代发</p>
            </li>
            <li>
                <img src="/Public/public_home/image/bg6.png">
                <p>售后无忧</p>
            </li>
        </ul>
    </div>
    <div class="fr">
        <p class="one">在线客服：
            <a href="#"><img src="/Public/public_home/image/tubiao2.png"></a>&nbsp;&nbsp;
            <a href="#"><img src="/Public/public_home/image/tubiao2.png"></a>&nbsp;&nbsp;
            <a href="#"><img src="/Public/public_home/image/tubiao2.png"></a>&nbsp;&nbsp;
            <span>（时间：9：00-24：00）</span>
        </p>
        <p class="two">联系电话：<i>18874120997</i></p>
    </div>
    <div class="clear"></div>
</div>

<!---------------商品介绍一大块----------------->
<div class="product">
    <div class="wt1080">
        <!------------上部分----------->
        <div class="up">
            <div class="crazy fl">今日疯抢</div>
            <a href="#"><img src="/Public/public_home/image/guanggao.png" class="fr"></a>
            <div class="clear"></div>
        </div>
        <!------------下部分----------->
        <div class="down">
            <div class="fl">
                <ul>
                    <li>
                        <div class="pic"><a href="details.html" title="美国/Kirkland"><img src="/Public/public_home/image/chanping.png"></a></div>
                        <p><a href="details.html">美国/Kirkland柯克蓝整粒蓝莓干567g挥洒绝对好看撒好的撒卡机当空洒家和电话凯撒奖</a></p>
                        <div>
                            <span class="one">￥88.00</span>
                            <span class="two">网购￥96.00</span>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                        <div class="pic"><a href="details.html" title="美国/Kirkland"><img src="/Public/public_home/image/chanping.png"></a></div>
                        <p><a href="details.html">美国/Kirkland柯克蓝整粒蓝莓干567g挥洒绝对好看撒好的撒卡机当空洒家和电话凯撒奖</a></p>
                        <div>
                            <span class="one">￥88.00</span>
                            <span class="two">网购￥96.00</span>
                            <div class="clear"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="fr">
                <div class="f_one">
                    <span>全球快讯</span>
                    <a href="">更多&gt;&gt;</a>
                </div>
                <div class="f_two">
                    <ul>
                        <li><a href="#"><span style="color: #ff5e21">【特惠公告】</span>商会玩法大解手机的后视镜看到手机号</a></li>
                        <li><a href="#"><span style="color: #ff5e21">【特惠公告】</span>商会玩法大解</a></li>
                        <li><a href="#"><span style="color: #ff5e21">【特惠公告】</span>商会玩法大解</a></li>
                        <li><a href="#">【特惠公告】商会玩法大解</a></li>
                        <li><a href="#">【特惠公告】商会玩法大解</a></li>
                        <li><a href="#">【特惠公告】商会玩法大解</a></li>
                        <li><a href="#">【特惠公告】商会玩法大解</a></li>
                        <li><a href="#">【特惠公告】商会玩法大解</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--------------商品开始---------------->
    <!------------------1楼-------------->
    <?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="floor wt1080" style="border-top:2px solid <?php echo ($v["topcolor"]); ?>;">
            <div class="<?php echo ($v["class"]); ?>"></div>
            <!---------------左边---------------->
            <div class="left">
                <div class="start" style="background: <?php echo ($v["topcolor"]); ?>;background-image: url(/Public/public_home/<?php echo ($v["images"]); ?>);background-position: 50% 40%;background-repeat: no-repeat;"><?php echo ($v["classname"]); ?></div>
                <div class="second" style="background: <?php echo ($v["footcolor"]); ?>;">
                    <ul>
                        <li><a href="product_list.html">奶粉</a></li>
                        <li><a href="product_list.html">宝宝洗护</a></li>
                        <li><a href="product_list.html">辅食</a></li>
                        <li><a href="product_list.html">驱蚊防蚊</a></li>
                        <li><a href="product_list.html">基础营养</a></li>
                        <li><a href="product_list.html">孕产妇用户</a></li>
                        <li><a href="product_list.html">用品</a></li>
                        <li><a href="product_list.html">尿裤湿巾</a></li>
                        <li><a href="product_list.html">服饰</a></li>
                        <li><a href="product_list.html">童装童鞋</a></li>
                        <li><a href="product_list.html">玩具</a></li>
                        <li><a href="product_list.html">童车童床</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <!--------------中间---------------->
            <div class="zhongbu">
                <ul>
                    <li>
                        <h1>为每一个诞生做好准备</h1>
                        <p>纸尿裤中心</p>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/chanping3.jpg"></a></div>
                    </li>
                    <li>
                        <h1>为每一个诞生做好准备</h1>
                        <p>纸尿裤中心</p>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/chanping3.jpg"></a></div>
                    </li>
                    <li>
                        <h1>为每一个诞生做好准备</h1>
                        <p>纸尿裤中心</p>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/chanping3.jpg"></a></div>
                    </li>
                    <li>
                        <h1>为每一个诞生做好准备</h1>
                        <p>纸尿裤中心</p>
                        <div class="pic"><a href="details.html"><img src="/Public/public_home/image/chanping3.jpg"></a></div>
                    </li>
                </ul>
                <span class="heng"></span>
                <span class="shu"></span>
            </div>
            <!--------------------右边部分-------------------------->
            <div class="right">
                <h1>最新热卖</h1>
                <ul>
                    <li>
                        <dl>
                            <dt><a href="details.html"><img src="/Public/public_home/image/chanping5.jpg"></a></dt>
                            <dd class="xiangxi"><a href="">sudocrem 屁屁霜/屁屁乐125g</a></dd>
                            <dd><span class="fl">￥48.00</span><span class="fr">￥68.00</span></dd>
                        </dl>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="details.html"><img src="/Public/public_home/image/chanping5.jpg"></a></dt>
                            <dd class="xiangxi"><a href="">sudocrem 屁屁霜/屁屁乐125g</a></dd>
                            <dd><span class="fl">￥48.00</span><span class="fr">￥68.00</span></dd>
                        </dl>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="details.html"><img src="/Public/public_home/image/chanping5.jpg"></a></dt>
                            <dd class="xiangxi"><a href="">sudocrem 屁屁霜/屁屁乐125g</a></dd>
                            <dd><span class="fl">￥48.00</span><span class="fr">￥68.00</span></dd>
                        </dl>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="details.html"><img src="/Public/public_home/image/chanping5.jpg"></a></dt>
                            <dd class="xiangxi"><a href="">sudocrem 屁屁霜/屁屁乐125g</a></dd>
                            <dd><span class="fl">￥48.00</span><span class="fr">￥68.00</span></dd>
                        </dl>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
        </div><?php endforeach; endif; ?>
</div>