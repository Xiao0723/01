<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpStudy\WWW\MTP5\public/../application/movies\view\admin\admin_left.html";i:1608201113;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/css/admin_left.css">
</head>
<body>
	<script type="text/javascript">
        var itemHeight = 40;
        var dividerHeight = 1;

        function openMenu(obj) {
            menuTitleId = obj.id;
            menuId = "menu" + menuTitleId.substring(10);
            indicatorId = "indicator" + menuTitleId.substring(10);

            menu = document.getElementById(menuId);
            indicator = document.getElementById(indicatorId);
            height = menu.style.height;

        if (height == "0px" || height == "") {
            childAmount = menu.getElementsByTagName('div').length;
            dividerAmount = menu.getElementsByTagName('li').length;
            height = childAmount * itemHeight + dividerAmount * dividerHeight;
            menu.style.height = height + "px";
            indicator.style.transform = "rotate(180deg)";
        } else {
            menu.style.height = "0px";
            indicator.style.transform = "rotate(0deg)";
        }
    }
</script>
<!-- 下拉列表 --> 
<div class="logo">  
    <img src="/Movies_TP5/public/static/image/logo.png" alt="">
</div> 

<div class="menus">
    <div id="menu_title1" class="menu_title" onclick="openMenu(this)">
        电影基本信息
    <div class="indicator" id="indicator1">^</div>
    </div>
    <div class="menu" id="menu1">
        <div class="item">
            <a href="admin_add" target="admin_middle">添加信息</a>
        </div>
        <li class="item_divider"></li>
        <div class="item">
            <a href="admin_delete" target="admin_middle">修改信息</a>
        </div>
        <li class="item_divider"></li>
        <div class="item">
            <a href="admin_select" target="admin_middle">查找信息</a>
        </div>
        <li class="item_divider"></li>
        <div class="item">
            <a href="admin_delete" target="admin_middle">删除信息</a>
        </div>
    </div>

    <li class="menu_divider"></li>

    <div id="menu_title2" class="menu_title" onclick="openMenu(this)">
        用户管理
        <div class="indicator" id="indicator2">^</div>
    </div>
    <div class="menu" id="menu2">
        <div class="item">
            <a href="#">普通用户</a>
        </div>
        <li class="item_divider"></li>
        <div class="item">
            <a href="user_vip.html" target="admin_middle">VIP用户</a>
        </div>
    </div>

    <li class="menu_divider"></li>

    <div id="menu_title3" class="menu_title" onclick="openMenu(this)">
        系统设置
        <div class="indicator" id="indicator3">^</div>
    </div>
    <div class="menu" id="menu3">
        <div class="item">
            <a href="logout" target="_top">退出</a>
        </div>
        <li class="item_divider"></li>
        <div class="item">
            <a href="#">消息</a>
        </div>
        <li class="item_divider"></li>
        <div class="item">
            <a href="login.php">切换用户</a>
        </div>
    </div>
    <li class="menu_divider"></li>

    <div id="menu_title4" class="menu_title" onclick="openMenu(this)">
        More
        <div class="indicator" id="indicator4">^</div>
    </div>
    <div class="menu" id="menu4">
        <div class="item">
            <a href="logout" target="_top">退出</a>
        </div>
        <li class="item_divider"></li>
        <div class="item">
            <a href="#">消息</a>
        </div>
        <li class="item_divider"></li>
        <div class="item">
            <a href="login.php">切换用户</a>
        </div>
    </div>
</div>
</body>
</html>