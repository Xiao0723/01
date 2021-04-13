<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin\admin_del_upd.html";i:1608877596;s:71:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin.html";i:1608877599;}*/ ?>

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
.table{
    font-family: verdana,arial,sans-serif;
    font-size:14px;
    color:#333333;
    border-color: #999999;
    border-collapse: collapse;
    table-layout:fixed;
}
.table th{
    background:#e0ffff;
    padding: 4px;
    border-style: solid;
    border-color: #999999;
    font-size: 18px;
}
.table td{
     padding: 8px;
    border-style: solid;
    border:1px solid #E5E5E5;
    text-overflow:ellipsis;
    white-space:nowrap;
    overflow:hidden;
}
#d3{
    margin-left: 30px;
    position: relative;

} 
#d3 p{
    font-size: 20px;
  
}
td:hover
{
    color: blue;
}
a:link{
    text-decoration: none;
    color: blue;
}
#d3 a:hover{
    color: red;
} 
.pagination {
    position: relative;
    position: absolute;
    bottom: -50px;
    right: 360px;

}
.pagination li{
    list-style: none;
    float: right;
    width: 20px;
    height: 20px;
    /*padding: 10px;*/
}  
</style>
</head>
<body>


<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
<div style="padding: 20px; background-color: #F2F2F2;">
  <div class="layui-row layui-col-space15">
     <div class="layui-col-md5">
      <div class="layui-card">
        <div class="layui-card-header">Id号：<?php echo $user['Id']; ?></div>
        <div class="layui-card-header">图片路径：<?php echo $user['m_image']; ?></div>
        <div class="layui-card-header">作品名：<?php echo $user['m_name']; ?></div>
        <div class="layui-card-header">类型：<?php echo $user['m_kind']; ?></div>
      </div>
    </div>
    <div class="layui-col-md7">
      <div class="layui-card">
        <div class="layui-card-header">主演人员：</div>
        <div class="layui-card-body">
        <?php echo $user['m_content']; ?>
        </div>
      </div>
    </div>
    <div class="layui-col-md7">
      <div class="layui-card">
        <div class="layui-card-header">作品描述：</div>
        <div class="layui-card-body">
        <?php echo $user['m_describe']; ?>
        </div>
      </div>
    </div> 
    <div class="layui-col-md1">
      <div class="layui-card">
        <div class="layui-card-header"><a href="admin_update_check?id=<?php echo $user['Id']; ?>">修改</a></div>
      </div>
    </div>
  </div>
</div> 
<?php endforeach; endif; else: echo "" ;endif; ?>
    <?php echo $list->render(); ?>
    
  </div>
</body>
</html>