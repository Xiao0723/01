<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy\WWW\tp5\public/../application/movies\view\index\index.html";i:1605080443;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/css/Cooldog.css">
    <link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/css/iconfont.css">
    <link rel="stylesheet" href="/Movies_TP5/public/static/css/style.css"/>
    <title>Movies主页-在线看电影网站</title>
</head>
<body>
<header>
    <!-- nav部分 -->
    <nav class="container">
    <!-- logo部分 -->
    <div class="logo">  
    	<img src="/Movies_TP5/public/static/image/logo.png" alt="">
    </div>
   
	<!-- 个人中心部分 -->
	<div class="personal">		
		<a href="#">消息<img src="/Movies_TP5/public/static/image/ling_06.png"  alt=""></a>
		<a href="login"><img src="/Movies_TP5/public/static/image/tou_03.png" >登录</a>
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
		<form action="">
			<input type="text" placeholder="请输入关键词">
			<input type="submit"  value="">
		</form>
	</div>
	</nav>
</header>

<!-- banner部分 -->
<div class="banner">
<div class="banner-in container clearfix">

<!-- 轮播图 -->

<div class="banner-middle">
	<div id='scrollPlay'>
	<div id='buttons'>
  		<span index = 0 class='onactive'>1</span>
  		<span index = 1>2</span>
  		<span index = 2>3</span>
  		<span index = 3>4</span>
  		<span index = 4>5</span>
	</div>
	<div id='pre'></div>
	<div id='next'></div>
	<img class="img" src='/Movies_TP5/public/static/image/v_1.jpg' alt='pics' style='opacity:1'>
	<img class="img" src='/Movies_TP5/public/static/image/v_2.jpg' alt='pics'>
	<img class="img" src='/Movies_TP5/public/static/image/v_3.jpg' alt='pics'>
	<img class="img" src='/Movies_TP5/public/static/image/v_4.jpg' alt='pics'>
	<img class="img" src='/Movies_TP5/public/static/image/v_5.jpg' alt='pics'>
	</div>	
</div>
<script type="text/javascript" src="/Movies_TP5/public/static/js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
 var index = 0;
 var flag = false; //用于判断是否处于动画状态
 //切换函数
 function move(offset){ 
 flag=true;
 $('.img').eq(index).fadeOut('slow',function(){
  if(offset>0){
  if(index ==4){
   index=0; 
  }else{
   index=index+offset;
  }
  }
  if(offset<0){
  if(index==0){
  index=4;
  }else{
  index=index+offset
  }
  }
  $('.img').eq(index).fadeTo('slow',1) //使用fadeIn不成功:$('img').eq(index).fadeIn('slow')
  showButton();
  flag=false;
 }); 
 }

 //切换上一张
 $('#pre').click(function(){
 if(flag==false){
  move(-1)
 }
 
 })
 //切换下一张
 $('#next').click(function(){
 if(flag==false){
  move(1)
 }
 })

 //高亮显示按钮
 function showButton(){
 if($('span').hasClass('onactive')){
  $('span').removeClass();
 }
 $('span').eq(index).addClass('onactive')
 }

 //自动播放
 var timer;
 function go(){
 timer = setInterval(function(){
  $('#next').trigger('click');
 },5000)
 }
 //鼠标悬停，清除自动播放
 $('#scrollPlay').mouseover(function(){
  clearInterval(timer)
 })

 //鼠标移开，开始自动播放
 $('#scrollPlay').mouseout(function(){
  go();
 })

 go(); 
})

</script>
<!-- 左侧导航栏 侧边栏 -->
<div class="slidebar">
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
<div id="kon"></div>
</div>
</div>
</div>

<!-- 精品推荐 -->
<div class="recommend container">
<!-- 左侧部分  -->
<div class="rec-l">
	<div class="div-m">
		<div class="div-t"><h3>电影</h3></div>
		<div class="div-txt">
			<a href="#">热播大片</a>
			<a href="#">全部电影</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3>电视剧</h3></div>
		<div class="div-txt">
			<a href="#">迷雾剧场</a>
			<a href="#">爱青春</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3>综艺</h3></div>
		<div class="div-txt">
			<a href="#">王牌自制</a>
			<a href="#">最新热播</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3>动漫</h3></div>
		<div class="div-txt">
			<a href="#">最热国漫</a>
			<a href="#">新番上线</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3>儿童</h3></div>
		<div class="div-txt">
			<a href="#">热播动画</a>
			<a href="#">最新动画</a>
		</div>
	</div>
	<div class="div-m">
		<div class="div-t"><h3>纪录片</h3></div>
		<div class="div-txt">
			<a href="#">热播剧场</a>
			<a href="#">探索世界</a>
		</div>
	</div>
</div>

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
	<div>
		<img src='/Movies_TP5/public/static/image/rec-b/rec-b1.jpg'>
		<span>摸鱼升级教程——糊弄学</span>		
	</div>
	<div>
		<img src='/Movies_TP5/public/static/image/rec-b/rec-b2.webp'>
		<span>邓紫棋李玟对飙高音嗨翻</span>
	</div>
	<div>
		<img src='/Movies_TP5/public/static/image/rec-b/rec-b3.webp'>
		<span>刘聪艾热王以太为兄弟助唱</span>
	</div>
	<div>
		<img src='/Movies_TP5/public/static/image/rec-b/rec-b4.webp'>
		<span>"打工人"网络梗流行背后</span>
	</div>
	<div>
		<img src='/Movies_TP5/public/static/image/rec-b/rec-b5.webp'>
		<span>新疆喀什4乡镇升级为高风险</span>
	</div>
	<div>
		<img src='/Movies_TP5/public/static/image/rec-b/rec-b6.webp'>
		<span>哈尔滨16名学生感染诺如病毒</span>
	</div>
</div>

</div>

<!-- 精品推荐大模块 -->
<div class="recom-products container">
    <!--  精品推荐电视剧头部 -->
	<div class="recom-tv">
    <h4>电视剧</h4>
    <ul>
    	<li><a href="#">内地</a></li>
    	<li><a href="#">自制剧</a></li>
    	<li><a href="#">网络剧</a></li>
    	<li><a href="#">迷雾剧场</a></li>
    	<li><a href="#">爱青春剧场</a></li>
    	<li><a href="#">神剧亮了</a></li>
    	<li><a href="#">更多</a></li>
    </ul>
	</div>
    <!--  精品推荐主体部分 -->
    <div class="recom-bd ">
    <div class="recom-div-l">
    <ul>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_1.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音） 儿童哪吒（配音） 囧森瑟夫 饰 </p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_2.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_3.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_4.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_5.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_6.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_7.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_8.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_9.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_10.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
	    <li>
	    <a href="#"><img src='/Movies_TP5/public/static/image/display/v_11.webp' alt="图片很好看，信我！">    </a>
	    <h5>哪吒之魔童降世<em>9.0</em></h5>
	    <p><span>主演：</span>吕艳婷 饰 儿童哪吒（配音） 囧森瑟夫 饰 少年哪吒（配音）</p>
	    </li>
    </ul>	
    </div>
    <div class="recom-div-r">
    	<h2>风云榜 <em><a href="#">全部榜单></a></em></h2>
    	<ul>
    		<li>
    			<span>1</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>2</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>3</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>4</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>5</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>6</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>7</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>8</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>9</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    		<li>
    			<span>10</span>
    			<div>
    				<h4>半是蜜糖半是伤</h4>
    				<em><img src="/Movies_TP5/public/static/image/hot.png" alt="">7878</em>
    			</div>
    		</li>
    	</ul>
    </div>
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