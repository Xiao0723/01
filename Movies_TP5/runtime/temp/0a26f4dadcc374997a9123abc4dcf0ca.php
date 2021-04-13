<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy\WWW\MTP5\public/../application/movies\view\index\test.html";i:1608466175;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
	<?php endforeach; endif; else: echo "" ;endif; if(is_array($cx2) || $cx2 instanceof \think\Collection || $cx2 instanceof \think\Paginator): $i = 0; $__LIST__ = $cx2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xw): $mod = ($i % 2 );++$i;?>
    <li class="card">
    	<figure class="card__thumb">
	    <a href="#"><img src='<?php echo $xw->getData("m_image"); ?>' alt="图片很好看，信我！" class="card__image">    </a>
	    <figcaption class="card__caption">
	    <h5 class="card__title"><?php echo $xw->getData("m_name"); ?><em>9.0</em></h5>
	    <p class="card__title"><span>主演：</span><?php echo $xw->getData("m_content"); ?></p>
	    </figcaption>
	    </figure>
	</li>
	<?php endforeach; endif; else: echo "" ;endif; if(is_array($cx3) || $cx3 instanceof \think\Collection || $cx3 instanceof \think\Paginator): $i = 0; $__LIST__ = $cx3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xw): $mod = ($i % 2 );++$i;?>
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
</body>
</html>