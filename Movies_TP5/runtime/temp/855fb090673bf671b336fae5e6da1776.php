<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\index\member_add.html";i:1609224371;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>在线注册页面|登录</title>
</head>
<style>
*{
	padding:0px;
	margin: 0px;
}
.mom{

	width: 1350px;
	/*height: 920px; */
	margin: 0 auto;
}
.mom .tex{
	color: #fff;
}
.title{
	border-top: 1px solid #2ECCFA;
	width: 1350px;
	height: 30px; 
	margin: 0 auto;
	background-color: #2ECCFA;
}	
.text1{
	width:180px;
	height: 20px; 
	padding-left: 100px;
	padding-right: 100px;
	margin-left: 1px;
	margin-top: 5px;
}
.text2{
	border: 1px solid #2ECCFA;
    width: 100px;
    height: 20px;
    margin-top:-20px;
    margin-left: -10px; 
    float:right;
}
.text3{
	float:right;
	width: 100px;
    height: 20px;
    margin-top:-20px; 
}
.logo{
	background-color: white;
	width: 1350px;
	height: 100px;
}
.middle{
	width: 1350px;
	height: 480px;
	background-color:#FCFCFC;
	/*border: 1px solid red;*/

}
.pic1{
	width: 300px;
	height: 100px;
	margin-left: 100px;
}

.text11{
    float: left;
    margin-left:668px;
    margin-top: -50px;
}
.text4{
    float: left;
    margin-left:760px;
    margin-top: -50px;
}
.text5{
    float: left;
    margin-left:830px;
    margin-top: -50px;
}
.text6{
    float: left;
    margin-left:920px;
    margin-top: -50px;
}
.text7{
    float: left;
    margin-left:1010px;
    margin-top: -50px;
}
.text8{
    float: left;
    margin-left:1100px;
    margin-top: -50px;
}
.text9{
    float: left;
    margin-left:1185px;
    margin-top: -50px;
}
.main{
	width: 800px;
	height: 500px;
	margin: 0 auto;
	margin-top: 10px;
	background-color: white;
	
}
.text10{
    width: 90px;
    font-weight: bold;
    margin-left: 50px;
    margin-top: 10px;

}

.mom .a_cor{
    text-decoration: none;
    color: #fff;

}
.tex a:hover{
	text-decoration: underline;
	color: blue
}
a{
    text-decoration: none;

}
a:hover{
    color: red;
}
form .button{
   	width:120px;
   	height: 40px;
   	border: 0px;
   	box-shadow: 0 1px 2px rgba(0,0,0,0.5);
   	font-size:20px;
   	color: white;
}
form p{
    padding: 10px;
}
form{
    margin-top: 25px;
}
.bottom {
	height: 80px;

}
.bottom p{
	font-size: 14px;
	color: gray;
	margin: 0 auto;
	text-align: center;
	
}
button:hover{
	background: red;
	background-color:#2ECCFA;
}
.input_01{
	width: 260px;
	height: 25px;
}
</style>

<body>
<div class="mom">
	<div class="title">
	<div class="text1 tex" >客服热线：400820820</div>
	<div class="text2 tex" ><a class="a_cor" href="">登录</a></div>
	<div class="text3 tex" ><a class="a_cor" href="">注册有礼</a></div>
	</div>

	<div class="logo">
		<div class="pic1"><img src="/Movies_TP5/public/static/image/logo.png" alt="" /></div>
		<div class="text11"><a href="#">下载APP</a></div>
		<div class="text4"><a href="">首页</a></div>
		<div class="text5"><a href="">我要投资</a></div>
		<div class="text6"><a href="">帮助中心</a></div>
		<div class="text7"><a href="">安全保障</a></div>
		<div class="text8"><a href="">关于我们</a></div>
		<div class="text9"><a href="">我的账户</a></div>
	</div>
	<div class="middle">
	<div class="main">
		<div class="text10" style="color: #2ECCFA; font-size: 20px;">注册账号</div>
		<hr width="800" size="1" color="gray" align="center" />
		<form action="member_add_check" method="post" style="text-align: center;">
			<p>&#42您的昵称：<input name="nc" class="input_01" type="text" /></p>
			<p>&#42手机号码：<input name="sj" class="input_01" type="number" /></p>
			<p>&#42电子邮箱：<input name="yx" class="input_01" type="email" /></p>
			<p>&#42设置密码：<input name="pd1" class="input_01" type="password" /></p>
			<p>&#42确认密码：<input name="pd2" class="input_01" type="password" /></p>
			<p style="font-size: 14px"><input type="checkbox" />我已阅读并接受<a href="#">本站协议</a></p>
		    <button class="button" type="submit">完成注册</button>
		    <p>已经有账号 <a href="login.php">立即登录</a></p>
		</form>
</div>
</div>
<div class="bottom">
<p>努力付出、坚持做到、成为全国最好的影视产业</p>
<p>© 2019年XTCG Inc.保留所有权利</p>
<p>-网络Movies工作组18-40-39-38-</p>

</div>	
</body>
</html>