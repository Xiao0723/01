<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\MTP5\public/../application/movies\view\index\login.html";i:1605686832;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>Movies登录界面</title>
<link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/css/Login.css">
<!-- 轮播图 -->
<style type="text/css">
.right-middle div{
			perspective: 1000px;
		}
		section{
			width: 220px;
			height: 300px;
			margin: 180px auto;
			/*background: url(image/v_01.webp) no-repeat;*/
			position: relative;
			transform-style: preserve-3d;
			transition: all 5s linear;
        }
		section div{
			width: 100%;
			height: 100%;
			background: url(/Movies_TP5/public/static/image/v_10.webp) no-repeat;
			background-size: cover;
			position: absolute;
			top: 20px;
			left: 50px;
			
		}

        section:hover{
        	transform: rotateY(360deg);
        }


		section div:nth-child(1) {
			transform: rotateY(0deg) translateZ(380px);
			background: url(/Movies_TP5/public/static/image/v_2.webp) no-repeat;
		}
		section div:nth-child(2) {
			transform: rotateY(60deg) translateZ(380px);
			background: url(/Movies_TP5/public/static/image/v_3.webp) no-repeat;
		}
		section div:nth-child(3) {
			transform: rotateY(120deg) translateZ(380px);
			background: url(/Movies_TP5/public/static/image/v_4.webp) no-repeat;
		}
		section div:nth-child(4) {
			transform: rotateY(180deg) translateZ(380px);
			background: url(/Movies_TP5/public/static/image/v_5.webp) no-repeat;
		}
		section div:nth-child(5) {
			transform: rotateY(240deg) translateZ(380px);
			background: url(/Movies_TP5/public/static/image/v_6.webp) no-repeat;
		}
        section div:nth-child(6) {
			transform: rotateY(300deg) translateZ(380px);
			background: url(/Movies_TP5/public/static/image/v_7.webp) no-repeat;
		}
</style>
		
</head>

<body>
<div id="wrap" class="container" >
	    	  <!-- banner轮播图 -->
<div class="right-middle">
	<div>
	        <section>
	        <div></div>
	        <div></div>
	        <div></div>
	        <div></div>
	        <div></div>
	        <div></div>
            </section>
    </div>
<form action="user_check" method="post">	
	<div class="logGet">			
    	<!-- 头部提示信息 -->			
    	<div class="logD logDtip">
        	<p class="p1">登录</p>	
        	<p class="p1 p2"><a href="member_add.html">注册</a></p>		
        </div>			
        <!-- 输入框 -->			
        <div class="lgD">				
        	<img src="" width="20" height="20" alt=""/>				
            	<input type="text"  name="user" id="textfield" 	placeholder="输入用户名" />			
         </div>			
         <div class="lgD">
         	<img src="" width="20" height="20" alt=""/>				
            	<input type="password"  name="password" id="textfield2" placeholder="输入用户密码" />	
          </div>			
          <div class="logC">	
          	<a href="user_check.php" target="_self"><input type="submit" name="button" id="button" value="提交" /></a>			
        </div></br>
        <div class="logC">	
          	<a href="login.php" target="_self"><input type="reset" name="button2" id="button2" value="重置" /></a>			
        </div> 
    </form>			
    </div>  
</div>

  </div>
  
<div id="footer-b">
					<img src="/Movies_TP5/public/static/image/logo.png" height="60" width="197" alt="">
					<p>努力付出、坚持做到、成为全国最好的影视产业<br />
© 2019年XTCG Inc.保留所有权利。-网络Movies工作组18-40-39-38</p>
					<a href="#">下载APP</a>

</div>

 </div>
</body>
</html>