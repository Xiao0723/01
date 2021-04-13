<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpStudy\WWW\tp5\public/../application/movies\view\admin\admin_select_top.html";i:1604405856;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/css/Cooldog.css">
<style type="text/css">
	body{
		background-color: #fff;
	}
	div h2{
		background-color: #eff7fd;
		border-bottom: 1px solid #cccccc;
		font-weight: normal;
		font-size: 22px;
		margin: 0px 26px;
	}
	div p{
		float: left;
		margin: 15px 26px;
		font-size: 16px;
		/*color: blue;*/

	}
	div select{
		width: 160px;
		height: 22px;
		font-size: 14px;

	}
	div button{
		margin: 15px 10px;
		background-color:#FFF;
    	border:1px solid #CDCDCD;
    	height:22px; 
    	width:70px;
    	border-radius: 10px;
		font-size: 16px;
    outline: none;

	}

</style>
</head>
<body>
<div>
<form action="#" method="post">
    <h2>电影信息查询</h2>
    <p>电影类型：
    <select name="lx">
       <option value="全部">全部</option>
       <option value="科幻">科幻</option>
       <option value="动画">动画</option>
       <option value="战争">战争</option>
       <option value="青春">青春</option>
       <option value="恐怖">恐怖</option>
       <option value="古装">古装</option>
    </select>
    <p>显示数量：
    <select name="sl">
       <option value="全部">全部</option>
       <option value="10">10</option>
       <option value="20">20</option>
       <option value="30">30</option>
       <option value="40">40</option>
       <option value="50">50</option>
    </select>
    <p>高级筛选：
    <select name="ss">
       <option value="no">无</option>
       <option value="up">按上架时间升序</option>
       <option value="drop">按上架时间降序</option>
    </select>            
<div>
    <button class="button" type="submit" name="js">
    <a href="admin_select_middle.html" target="admin_select_middle">检索</a>
    </button>
    <button class="button" type="submit" name="dy">
    <a href="#">打印</a>
	</button>
</div>
</form>	
</div>
</body>
</html>
