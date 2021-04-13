<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin\admin_middle.html";i:1608966475;s:71:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin.html";i:1608976009;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="/Movies_TP5/public/favicon.ico" type="img/x-icon"/>
    <link rel="stylesheet" href="/Movies_TP5/public/static/layui/css/layui.css">  
    <script type="text/javascript" src="/Movies_TP5/public/static/js/jquery-3.2.1.min.js"></script>    
    <script src="/Movies_TP5/public/static/layui/layui.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/css/admin_select.css">
    <title>继承admin页面</title>
<style type="text/css">
.pagination {
    position: fixed;
    top: 10px;
    right: 0px;
    /*background: red;*/
    /*height: 160px;*/
    width: 40px;

}
.pagination li{
    list-style: none;
    /*float: right;*/
    width: 40px;
    height: 40px;
    /*background: red;*/
    /*padding: 10px;*/
}
/*name：main-select CSS样式start*/
.layui-table td{
    white-space: nowrap;     
    overflow: hidden;         
    text-overflow: ellipsis;

}
/*name：main-select CSS样式end*/

</style>
</head>
<body>


<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
  <legend>添加记录</legend>
</fieldset> 
<ul class="layui-timeline">
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2018年，layui 5.0 发布。并发展成为中国最受欢迎的前端UI框架（期望）
  	  </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2017年，layui 里程碑版本 2.0 发布
  	  </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2016年，layui 首个版本发布
      </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2015年，layui 孵化
      </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	更久前，轮子时代。维护几个独立组件：layer等
      </div>
    </div>
  </li>
</ul>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
  <legend>修改记录</legend>
</fieldset> 
<ul class="layui-timeline">
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2018年，layui 5.0 发布。并发展成为中国最受欢迎的前端UI框架（期望）
  	  </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2017年，layui 里程碑版本 2.0 发布
  	  </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2016年，layui 首个版本发布
      </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2015年，layui 孵化
      </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	更久前，轮子时代。维护几个独立组件：layer等
      </div>
    </div>
  </li>
</ul>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
<legend>删除记录</legend>
</fieldset> 
<ul class="layui-timeline">
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2018年，layui 5.0 发布。并发展成为中国最受欢迎的前端UI框架（期望）
  	  </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2017年，layui 里程碑版本 2.0 发布
  	  </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2016年，layui 首个版本发布
      </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	2015年，layui 孵化
      </div>
    </div>
  </li>
  <li class="layui-timeline-item">
    <i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop layui-timeline-axis"></i>
    <div class="layui-timeline-content layui-text">
      <div class="layui-timeline-title">
      	更久前，轮子时代。维护几个独立组件：layer等
      </div>
    </div>
  </li>
</ul>
    
</body>
</html>