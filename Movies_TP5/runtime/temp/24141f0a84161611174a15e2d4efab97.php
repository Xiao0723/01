<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin\admin_select.html";i:1609137939;s:71:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin.html";i:1608976009;}*/ ?>

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


<form class="layui-form layui-form-pane" action="admin_select_middle" method="post">
  <div class="layui-form-item">
    <label class="layui-form-label">作品标题</label>
    <div class="layui-input-block">
      <input type="text" name="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-inline">
      <label class="layui-form-label">ID范围</label>
      <div class="layui-input-inline" style="width: 100px;">
        <input type="text" name="price_min" placeholder="1" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-form-mid">-</div>
      <div class="layui-input-inline" style="width: 100px;">
        <input type="text" name="price_max" placeholder="10" autocomplete="off" class="layui-input">
      </div> 
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">高级选择</label>
    <div class="layui-input-inline">
      <select name="m_status">
        <option value="" selected="">作品状态</option>
        <option value="T">公布</option>
        <option value="F">不公布</option>
      </select>
    </div>
    <div class="layui-input-inline">
      <select name="m_lb">
        <option value="">作品类型</option>
        <option value="电影">电影</option>
        <option value="电视剧" disabled="">电视剧</option>
        <option value="综艺">综艺</option>
        <option value="娱乐">娱乐</option>
        <option value="动漫">动漫</option>
      </select>
    </div>
    <div class="layui-input-inline">
      <select name="m_more">
        <option value="">更多</option>
        <option value="down">按ID降序</option>
        <option value="up">按ID升序</option>
      </select>
    </div>
  </div>
  <div class="layui-form-item">
    <button class="layui-btn" type="submit">跳转式提交</button>
  </div>
</form>

<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  //表单取值
  // layui.$('#LAY-component-form-getval').on('click', function(){
  //   var data = form.val('admin_select_middle');
  //   alert(JSON.stringify(data));
  // });
  
});
</script>

    
</body>
</html>