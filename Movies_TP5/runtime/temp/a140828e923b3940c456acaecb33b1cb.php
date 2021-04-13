<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin\admin_select_middle.html";i:1608965299;s:71:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin.html";i:1608976009;}*/ ?>

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

<table class="layui-table" lay-even="" lay-skin="row">
  <colgroup>
    <col width="80">
    <col width="120">
    <col width="200">
    <col width="80">
    <col width="80">
    <col width="200">
  </colgroup>
  <thead>
    <tr>
      <th>ID号</th>
      <th>图片路径</th>
      <th>作品名</th>
      <th>类型</th>
      <th>状态</th>
      <th>操作</th>
    </tr> 
  </thead>
  <tbody>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m_select): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo $m_select['Id']; ?></td>
      <td><?php echo $m_select['m_image']; ?></td>
      <td><?php echo $m_select['m_name']; ?></td>
      <td><?php echo $m_select['m_kind']; ?></td>
      <td><?php echo $m_select['m_status']; ?></td>
      <td>
        <div class="layui-btn-group">
        <button type="button" class="layui-btn layui-btn-primary layui-btn-sm">文字</button>
        <a href="admin_add">
        <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
        </a>
        <a href="admin_update_check?id=<?php echo $m_select['Id']; ?>">
        <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
        </a>
        <a href="admin_delete_check?id=<?php echo $m_select['Id']; ?>">
        <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
        </a>
        </div>
      </td> 
    </tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table> 
<!-- <script>
layui.use(['rate'], function(){
  var rate = layui.rate; 
  //显示文字
  rate.render({
    elem: '#test2'
    ,value: 3 //初始值
    ,text: true //开启文本
  }); 
});
</script>
<td><div id="test2"></div></td> -->
   


    
</body>
</html>