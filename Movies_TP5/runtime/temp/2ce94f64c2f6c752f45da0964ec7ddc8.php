<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\WWW\MTP5\public/../application/movies\view\admin\admin_top.html";i:1603979448;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="css/style.css" /> -->
	<style type="text/css">
		* {
				margin: 0;
				padding: 0;
			}
			ul {
				list-style: none;
			}
			a {
				color: #050505;
				text-decoration: none;
			}
			input {
				border: 0;
				box-sizing: border-box;
			}
			header{
				width: 1200px;
			}
			/* css初始化结束 */
			nav {
				margin-top: 10px;
			}
			.navbar {
				float: left;
				height: 42px;
				line-height: 42px;
				margin-left: 100px;

			}
			.navbar li {
				float: left;
			}
			.navbar li a {  
				padding: 0 20px;
				display: block;
				height: 42px;
				font-size: 18px;
			}
			.navbar li a:hover {
				border-bottom: 2px solid #00a4ff;
			}	
			/* 个人中心开始 */
			.personal {
				float: right;
				height: 42px;
				line-height: 42px;
				margin: 0 15px 0 35px;
				font-size: 18px;
			}
			.personal img {
				margin: 0 8px;
			}
			/* 个人中心结束 */
	</style>
</head>

<body>
        <header>
        <!-- nav部分 -->
            <nav>
                <!-- 导航栏部分 -->
                <div class="navbar">
                    <ul>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">导航</a></li>
                        <li><a href="#">In Theater</a></li>
                        <li><a href="#">Top 99</a></li>
                    </ul>
                </div>
                <!-- 个人中心部分 -->
                <div class="personal">      
                    <a href="#">个人中心 <img src="/Movies_TP5/public/static/image/ling_06.png"  alt=""></a>
                    <a href="#"><img src="/Movies_TP5/public/static/image/tou_03.png" >管理员</a>
                </div>
            </nav>
        </header>
</body>
</html>