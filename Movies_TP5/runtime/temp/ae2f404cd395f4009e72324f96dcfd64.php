<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\MTP5\public/../application/movies\view\admin\admin.html";i:1608167878;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>admin</title>
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
    background:#fafad2;
    padding: 8px;
    border-style: solid;
    border-color: #999999;
    text-overflow:ellipsis;
    white-space:nowrap;
    overflow:hidden;
    /*width: 100px;*/
}
#d3{
    margin-left: 110px;

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
  </style>
</head>
<body>
    <div id="d3">
<table border="1" class="table" width="1200">
    <p><a href="add.php">添加</a> 编辑 删除 统计</p>
    <tr>
        <th width="25px">&nbsp;</th>
        <th width="25px">ID</th>
        <th width="180px">图片路径</th>
        <th width="160px">电影标题</th>
        <th width="50px">类型</th>
        <th width="230px">主演</th>
        <th width="350px">详情</th>
        <th width="82px">操作</th>
    </tr>  
<?php if(is_array($x) || $x instanceof \think\Collection || $x instanceof \think\Paginator): $i = 0; $__LIST__ = $x;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xw): $mod = ($i % 2 );++$i;?>
    <tr>
        <td></td>       
        <td><?php echo $xw->getData("Id"); ?></td>
        <td><?php echo $xw->getData("m_image"); ?></td>
        <td><?php echo $xw->getData("m_name"); ?></td>
        <td><?php echo $xw->getData("m_kind"); ?></td>
        <td><?php echo $xw->getData("m_content"); ?></td>
        <td><?php echo $xw->getData("m_describe"); ?></td>
        <td>
            <a href="admin_update?id=<?php echo $xw->getData('Id'); ?>">修改</a>
            | <a href="admin_delete?id=<?php echo $xw->getData('Id'); ?>">删除</a>
        </td>
    </tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
</table>
  </div>
</body>
</html>