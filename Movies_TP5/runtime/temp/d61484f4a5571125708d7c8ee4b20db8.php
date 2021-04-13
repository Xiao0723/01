<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\index\test.html";i:1609296252;s:71:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin.html";i:1608976009;}*/ ?>

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
  <legend>选完文件后不自动上传</legend>
</fieldset>
 
<div class="layui-upload">
  <button type="button" class="layui-btn layui-btn-normal" id="test8">选择文件</button>
  <button type="button" class="layui-btn" id="test9">开始上传</button>
</div>
<script>
layui.use('upload', function(){
  var $ = layui.jquery
  ,upload = layui.upload;
  //选完文件后不自动上传
  upload.render({
    elem: '#test8'
    ,url: 'https://httpbin.org/post' //改成您自己的上传接口
    ,auto: false
    //,multiple: true
    ,bindAction: '#test9'
    ,done: function(res){
      layer.msg('上传成功');
      console.log(res)
    }
  });
});
</script>
    
</body>
</html>