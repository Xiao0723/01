<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\index\index.html";i:1609253594;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/css/Cooldog.css">
    <link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/css/iconfont.css">
    <link rel="stylesheet" href="/Movies_TP5/public/static/css/style.css"/>
    <link rel="stylesheet" href="/Movies_TP5/public/static/css/lunbo.css"/>
    <link rel="stylesheet" href="/Movies_TP5/public/static/css/recom-bd.css"/>

    <link rel="shortcut icon" href="/Movies_TP5/public/favicon.ico" type="img/x-icon"/>
    
    <title>Movies主页-在线看电影网站</title>
</head>
<body>
<header>
    <!-- nav部分 -->
    <nav class="container" id="nav">
    <!-- logo部分 -->
    <div class="logo">  
    	<img src="/Movies_TP5/public/static/image/logo.png" alt="">
    </div>
   
	 	
	</div>
	 <!-- 导航栏部分 -->
    <div class="navbar">
        <ul>
       	<li><a href="#">VIP</a></li>
       	<li><a href="#">游戏</a></li>
       	<li><a href="#">上传</a></li>
       	<li><a href="#">客户端</a></li>
       	</ul>
    </div>
	<!-- 搜索框部分 -->
	<div class="search">
		<form action="search" method="get" accept-charset="utf-8">
			<input name="keywords" type="text" placeholder="请输入关键词">
			<input type="submit"  value="">
		</form>
	</div>
	<!-- 个人中心部分 -->
	<div class="personal">		
		<a href="#">消息<img src="/Movies_TP5/public/static/image/ling_06.png"  alt=""></a>
		<a href="login"><img src="/Movies_TP5/public/static/image/tou_03.png" >登录</a>
	</div>
	</nav>
</header>

<!-- banner部分 -->
<div class="banner">
<div class="banner-in container clearfix">

<!-- 轮播图 -->

<div class="banner-middle">
	<div id="banner">
	<div id="pic">
		<ul id="picUl">
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_1.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_2.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_3.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_4.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_5.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_6.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_7.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_8.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_9.jpg"></a></li>
			<li><a href="#"><img src="/Movies_TP5/public/static/image/v_10.jpg"></a></li>
		</ul>
	</div>
	<div id="tab">
		<ul id="tabUl">
			<li class="active"><a href="#">功夫熊猫2，小阿宝是肿么来的 </a><span class="on"></span></li>
			<li><a href="#">始于钢铁侠，终于钢铁侠 </a><span></span></li>
			<li><a href="#">你的名字</a><span></span></li>
			<li><a href="#">复仇者联盟4：终局之战</a><span></span></li>
			<li><a href="#">海王（普通话）</a><span></span></li>
			<li><a href="#">奔跑吧黄河篇</a><span></span></li>
			<li><a href="#">跨次元新星</a><span></span></li>
			<li><a href="#">倾世锦鳞谷雨来</a><span></span></li>
			<li><a href="#">姐妹们的茶话会</a><span></span></li>
			<li><a href="#">变形金刚4：绝迹重生</a><span></span></li>
		</ul>
	</div>
	<!-- 左侧导航栏 侧边栏 -->
	<div class="slidebar-left">
		<ul>
			<li><a href="#">首页 <span>></span> </a></li>
			<li><a href="#">热搜榜 <span>></span> </a></li>
			<li><a href="#">好评榜 <span>></span> </a></li>
			<li><a href="#">预告片 <span>></span> </a></li>
			<li><a href="#">电影节目 <span>></span> </a></li>
			<li><a href="#">独播专区 <span>></span> </a></li>
			<li><a href="#">系列电影 <span>></span> </a></li>
			<li><a href="#">专题策划 <span>></span> </a></li>
			<li><a href="#">全网影视 <span>></span> </a></li>
			<li><a href="#">评论中心 <span>></span> </a></li>
			<li><a href="#">应用商店 <span>></span> </a></li>
			<li><a href="#">实时资讯 <span>></span> </a></li>
   		</ul>
	</div>
</div>
<script type="text/javascript" src="/Movies_TP5/public/static/js/jquery.min.js"></script>
<script src="/Movies_TP5/public/static/js/lunbo.js"></script>



<!-- 右侧侧导航栏 侧边栏 -->
<div class="slidebar-right">
<ul>
	<li><a href="#_tv">电视剧</a></li>		
	<li><a href="#_mv">电影</a></li>		
	<li><a href="#_vy">综艺</a></li>		
	<li><a href="#_yl">娱乐</a></li>		
	<li><a href="#_cc">动漫</a></li>		
	<li><a href="#">猜你 喜欢</a></li>		
	<li><a href="#">顶部</a></li>		
</ul>

</div>

<!-- 精品推荐 -->
<div class="recommend container">
	<div id="wxImg" >
    	<p>全部电影></p>
    	<img src="/Movies_TP5/public/static/image/v_2.jpg">
    	<img src="/Movies_TP5/public/static/image/v_3.jpg">
    	<img src="/Movies_TP5/public/static/image/v_4.jpg">
    	<img src="/Movies_TP5/public/static/image/v_5.jpg">
	</div>
<!-- 左侧部分  -->
<div class="rec-l">
	<div class="div-m">
		<div class="div-t"><h3><a href="javascript:void(0)" class="mylink" onMouseOut="hideImg()" onmouseover="show0()"">电影</a></h3></div>
		<div class="div-txt">
			<a href="#">热播大片</a>
			<a href="#">全部电影</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3><a href="javascript:void(0)" class="mylink" onMouseOut="hideImg()" onmouseover="show1()"">电视剧</a></h3></div>
		<div class="div-txt">
			<a href="#">迷雾剧场</a>
			<a href="#">爱青春</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3><a href="javascript:void(0)" class="mylink" onMouseOut="hideImg()" onmouseover="show2()"">综艺</a></h3></div>	
		<div class="div-txt">
			<a href="#">王牌自制</a>
			<a href="#">最新热播</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3><a href="javascript:void(0)" class="mylink" onMouseOut="hideImg()" onmouseover="show3()"">动漫</a></h3></div>			
		<div class="div-txt">
			<a href="#">最热国漫</a>
			<a href="#">新番上线</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3><a href="javascript:void(0)" class="mylink" onMouseOut="hideImg()" onmouseover="show4()"">儿童</a></h3></div>			
		<div class="div-txt">
			<a href="#">热播动画</a>
			<a href="#">最新动画</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3><a href="javascript:void(0)" class="mylink" onMouseOut="hideImg()" onmouseover="show5()"">纪录片</a></h3></div>			
		<div class="div-txt">
			<a href="#">热播剧场</a>
			<a href="#">探索世界</a>
		</div>
	</div>
</div>

<script type="text/javascript"> 
	function show0(){ 
	var mystyle=document.getElementById("wxImg"); 
	mystyle.style.display='block'; 
	mystyle.style.left = '0px'; 	
	}
	function show1(){ 
	var mystyle=document.getElementById("wxImg"); 
	mystyle.style.display='block'; 	
	mystyle.style.left = '100px'; 
	} 
	function show2(){ 
	var mystyle=document.getElementById("wxImg"); 
	mystyle.style.display='block'; 	
	mystyle.style.left = '200px'; 
	} 
	function show3(){ 
	var mystyle=document.getElementById("wxImg"); 
	mystyle.style.display='block'; 	
	mystyle.style.left = '300px'; 
	} 
	function show4(){ 
	var mystyle=document.getElementById("wxImg"); 
	mystyle.style.display='block'; 	
	mystyle.style.left = '400px'; 
	} 
	function show5(){ 
	var mystyle=document.getElementById("wxImg"); 
	mystyle.style.display='block'; 	
	mystyle.style.left = '500px'; 
	} 
	function hideImg(){ 
	document.getElementById("wxImg").style.display='none';
} 
</script>

<!-- 中间部分 -->
<div class="rec-m">
	<div class="div-a">
		<a href="#">热点</a>
		<a href="#">教育</a>
		<a href="#">资讯</a>
	</div>
	<div class="div-a">
		<a href="#">娱乐</a>
		<a href="#">体育</a>
		<a href="#">财经</a>
	</div>
	<div class="div-a">
		<a href="#">风云榜</a>
		<a href="#">泡泡</a>
		<a href="#">搞笑</a>
	</div>
	<div class="div-a">
		<a href="#">游戏</a>
		<a href="#">公益</a>
		<a href="#">军事</a>
	</div>
</div>
<!-- 右侧部分 -->
<div class="rec-r">
	<a href="#"><span>会员精选</span></a>
	<a href="#">直播中心</a>
	<a href="#">更多</a>
</div>
<!-- 底部部分 -->
<div class="rec-b">
	<?php if(is_array($x1) || $x1 instanceof \think\Collection || $x1 instanceof \think\Paginator): $i = 0; $__LIST__ = $x1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?>
	<div>
		<img src='<?php echo $info->getData("rec_image"); ?>'>
		<span><?php echo $info->getData("rec_bt"); ?></span>		
	</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>	
</div>
</div>

<!-- 精品推荐大模块 -->
<div class="recom-products container">
<!-- 电视剧 -->
<div class="recom-tv">
    <h4>电视剧</h4>
    <ul>
    	<li><a href="#" name="_tv">内地</a></li>
    	<li><a href="#">自制剧</a></li>
    	<li><a href="#">网络剧</a></li>
    	<li><a href="#">迷雾剧场</a></li>
    	<li><a href="#">爱青春剧场</a></li>
    	<li><a href="#">神剧亮了</a></li>
    	<li><a href="#">更多</a></li>
    </ul>
	</div>
    <!--  主体部分 -->
    <div class="recom-bd ">
    <div class="recom-div-l">
    <ul class="container">

    <?php if(is_array($cx1) || $cx1 instanceof \think\Collection || $cx1 instanceof \think\Paginator): $i = 0; $__LIST__ = $cx1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xw): $mod = ($i % 2 );++$i;?>
    <li class="card">
    	<figure class="card__thumb">
	    <a href="#"><img src='<?php echo $xw->getData("m_image"); ?>' alt="图片很好看，信我！" class="card__image">    </a>
	    <figcaption class="card__caption">
	    <h5 class="card__title"><?php echo $xw->getData("m_name"); ?><em>9.0</em></h5>
	    <p class="card__title"><span>主演：</span><?php echo $xw->getData("m_content"); ?></p>
	    </figcaption>
	    </figure>
	</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	    
    </ul>	
    </div>
    <div class="recom-div-r">
    	<h2>风云榜 <em><a href="#">全部榜单></a></em></h2>
    	<ul>
    	<?php if(is_array($x2) || $x2 instanceof \think\Collection || $x2 instanceof \think\Paginator): $i = 0; $__LIST__ = $x2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top): $mod = ($i % 2 );++$i;?>
    		<li>
    			<span><?php echo $top->getData("Id"); ?></span>
    			<div>
    				<a href="#">
    				<h4><?php echo $top->getData("hot_bt"); ?></h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt=""><?php echo $top->getData("hot_num"); ?></em>
    				</a>
    			</div>
    		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
    	</ul>
    </div>
</div>
<!-- 电影 -->
<div class="recom-mv">
    <h4>电影</h4>
    <ul>
    	<li><a href="#" name="_mv">Movies爱电影</a></li>
    	<li><a href="#">Movies文艺院线</a></li>
    	<li><a href="#">Movies独播专区</a></li>
    	<li><a href="#">Movies网络电影</a></li>
    	<li><a href="#">系列电影</a></li>
    	<li><a href="#">更多</a></li>
    </ul>
	</div>
    <!--  精品推荐主体部分 -->
    <div class="recom-bd ">
    <div class="recom-div-l">
    <ul>

    <?php if(is_array($cx2) || $cx2 instanceof \think\Collection || $cx2 instanceof \think\Paginator): $i = 0; $__LIST__ = $cx2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xw): $mod = ($i % 2 );++$i;?>
    <li class="card">
    	<figure class="card__thumb">
	    <a href="#"><img src='<?php echo $xw->getData("m_image"); ?>' alt="图片很好看，信我！" class="card__image">    </a>
	    <figcaption class="card__caption">
	    <h5 class="card__title"><?php echo $xw->getData("m_name"); ?><em>9.0</em></h5>
	    <p class="card__title"><span>主演：</span><?php echo $xw->getData("m_content"); ?></p>
	    </figcaption>
	    </figure>
	</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	    
    </ul>	
    </div>
    <div class="recom-div-r">
    	<h2>风云榜 <em><a href="#">全部榜单></a></em></h2>
    	<ul>
    	<?php if(is_array($x2) || $x2 instanceof \think\Collection || $x2 instanceof \think\Paginator): $i = 0; $__LIST__ = $x2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top): $mod = ($i % 2 );++$i;?>
    		<li>
    			<span><?php echo $top->getData("Id"); ?></span>
    			<div>
    				<a href="#">
    				<h4><?php echo $top->getData("hot_bt"); ?></h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt=""><?php echo $top->getData("hot_num"); ?></em>
    				</a>
    			</div>
    		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
    	</ul>
    </div>
</div>
<!-- 综艺 -->
<div class="recom-vy">
    <h4>综艺</h4>
    <ul>
    	<li><a href="#" name="_vy">哈哈哈哈哈</a></li>
    	<li><a href="#">跨次元新星</a></li>
    	<li><a href="#">上新了故宫第3季</a></li>
    	<li><a href="#">非日常派对</a></li>
    	<li><a href="#">我们的歌第2季</a></li>
    	<li><a href="#">更多</a></li>
    </ul>
	</div>
    <!--  精品推荐主体部分 -->
    <div class="recom-bd ">
    <div class="recom-div-l2">
    <ul>
    <?php if(is_array($cx3) || $cx3 instanceof \think\Collection || $cx3 instanceof \think\Paginator): $i = 0; $__LIST__ = $cx3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xw): $mod = ($i % 2 );++$i;?>
    <li>
	    <a href="#"><img src='<?php echo $xw->getData("m_image"); ?>' alt="图片很好看，信我！"></a>
	    <h5><?php echo $xw->getData("m_name"); ?><em>独播</em></h5>
	    <p><span>主演：</span><?php echo $xw->getData("m_content"); ?></p>
	</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	    
    </ul>	
    </div>
    <div class="recom-div-r2 recom-div-r">
    	<h2>风云榜 <em><a href="#">全部榜单></a></em></h2>
    	<ul>
    	<?php if(is_array($x2) || $x2 instanceof \think\Collection || $x2 instanceof \think\Paginator): $i = 0; $__LIST__ = $x2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top): $mod = ($i % 2 );++$i;?>
    		<li>
    			<span><?php echo $top->getData("Id"); ?></span>
    			<div>
    				<a href="#">
    				<h4><?php echo $top->getData("hot_bt"); ?></h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt=""><?php echo $top->getData("hot_num"); ?></em>
    				</a>
    			</div>
    		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
    	</ul>
    </div>
</div>
<!-- 娱乐 -->
<div class="recom-vy">
    <h4>娱乐</h4>
    <ul>
    	<li><a href="#" name="_yl">《明星玩家》玩独家游戏！</a></li>
    	<li><a href="#">《来自星星的TA》分享幕后故事</a></li>
    	<li><a href="#">好心情提味</a></li>
    	<li><a href="#">表演者实录</a></li>
    	<li><a href="#">优质内容精选</a></li>
    	<li><a href="#">每日热搜</a></li>
    	<li><a href="#">更多</a></li>
    </ul>
	</div>
    <!--  精品推荐主体部分 -->
    <div class="recom-bd " id="recom-et">
    <div class="recom-div-l2 recom-div-l3">
    <ul>
    <?php if(is_array($cx4) || $cx4 instanceof \think\Collection || $cx4 instanceof \think\Paginator): $i = 0; $__LIST__ = $cx4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xw): $mod = ($i % 2 );++$i;?>
    <li>
	    <a href="#"><img src='<?php echo $xw->getData("m_image"); ?>' alt="图片很好看，信我！"></a>
	    <h5><?php echo $xw->getData("m_name"); ?><em>9.0</em></h5>
	    <p><span>更新至：</span><?php echo $xw->getData("m_content"); ?></p>
	</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	    
    </ul>	
    </div>
</div>
<!-- 动漫 -->
<div class="recom-cc">
    <h4>动漫</h4>
    <ul>
    	<li><a href="#" name="_cc">哈哈哈哈哈</a></li>
    	<li><a href="#">跨次元新星</a></li>
    	<li><a href="#">上新了故宫第3季</a></li>
    	<li><a href="#">非日常派对</a></li>
    	<li><a href="#">我们的歌第2季</a></li>
    	<li><a href="#">更多</a></li>
    </ul>
	</div>
    <!--  主体部分 -->
	<div class="recom-bd " id="recom-ee">
    <div class="recom-div-l2 recom-div-l4 ">
    <ul>
    <?php if(is_array($cx5) || $cx5 instanceof \think\Collection || $cx5 instanceof \think\Paginator): $i = 0; $__LIST__ = $cx5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xw): $mod = ($i % 2 );++$i;?>
    <li>
	    <a href="#"><img src='<?php echo $xw->getData("m_image"); ?>' alt="图片很好看，信我！"></a>
	    <h5><?php echo $xw->getData("m_name"); ?><em><img src="/Movies_TP5/public/static/image/dm.png" alt=""></em></h5>
	    <p><span>更新至：</span><?php echo $xw->getData("m_content"); ?></p>
	</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	    
    </ul>	
    </div>
</div>

<!-- 页面底部分 -->
<footer>
<div class="container footer-in clearfix">
	<!-- footer-t -->
	<div class="footer-t">
	<dl>
		<dt>关于我们</dt>
		<dd><a href="#">成员</a></dd>
		<dd><a href="#">新闻动态</a></dd>
		<dd><a href="#">联系方式</a></dd>
		<dd><a href="#">用户协议</a></dd>
		<dd><a href="#">加入我们</a></dd>
	</dl>
	<dl>
		<dt>About US</dt>
		<dd><a href="#">关于</a></dd>
		<dd><a href="#">Investor Relations</a></dd>
		<dd><a href="#">Media Center</a></dd>
	</dl>
	<dl>
		<dt>内容合作</dt>
		<dd><a href="#">Movies号</a></dd>
		<dd><a href="#">Movies内容合作方式</a></dd>
		<dd><a href="#">互动视频标准</a></dd>
		<dd><a href="#">Movies会员合作</a></dd>
		<dd><a href="#">帮助</a></dd>
	</dl>
	<dl>
		<dt>招聘英才</dt>
		<dd><a href="#">社会招聘</a></dd>
		<dd><a href="#">校园招聘</a></dd>
	</dl>
	<dl>
		<dt>常见问题</dt>
		<dd><a href="#">帮助中心</a></dd>
		<dd><a href="#">侵权举报</a></dd>
	</dl>
	</div>
	<!-- footer-b -->
	<div class="footer-b">
		<img src="/Movies_TP5/public/static/image/logo.png" height="85" width="215" alt="">
		<p>努力付出、坚持做到、成为全国最好的影视产业© 2019年XTCG Inc.保留所有权利。-网络Movies工作组18-40-39-38</p>
		<a href="#">下载APP</a>
	</div>
</div>
</footer>

</body>
</html>