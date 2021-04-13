<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\index\test_check.html";i:1608731262;s:71:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin.html";i:1608566882;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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
    top: -49px;
    right: 505px;

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
    
<div id="d2">
<table width="1200" border="1" class="table1"> 
  <tr>
    <td width="97">ID</td>
    <td width="493">
    <form name="form" method="post" action="test_check">
        <label for="m_id"></label>
        <input type="text" name="m_id" placeholder="请输入Id" id="textfield" class="txt">
    </td>
    <td width="75">类型</td>
    <td width="507">
        <label for="m_lb"></label>
        <select name="m_lb" placeholder="类型选择">
               <option>类型</option>
               <option value="1">电影</option>
               <option value="2">综艺</option>
               <option value="3">娱乐</option>
               <option value="4">动漫</option>
        </select>
        <select name="m_status" placeholder="类型选择">
               <option>状态</option>
               <option value="T">公布</option>
               <option value="F">不公布</option>
        </select>
    </td>
  </tr>
  <tr>
    <td>电影标题</td>
    <td>
        <label for="m_bt"></label>
        <input type="text" name="m_bt" placeholder="请输入标题" id="textfield2" class="txt">
    </td>
    <td>主演</td>
    <td>
        <label for="textfield3"></label>
        <input type="text" name="textfield3" placeholder="请输入" id="textfield3" class="txt">
    </td>
  </tr>
  <tr>
    <td colspan="2">
        <a href="admin_add" target="admin_middle">
          <input type="button" value="添加" class="button button-rounded button-royal button-royal-flat">
        </a>
        <a href="#" target="admin_middle">
          <input type="button" value="更新" class="button button-rounded button-caution button-caution-flat">
        </a>
        <a href="#" target="admin_middle">
          <input type="button" value="删除" class="button button-rounded button-highlight button-highlight-flat">
        </a>
        <a href="#" target="admin_middle">
          <input type="submit" value="统计" class="button button-rounded button-action button-action-flat">
        </a>
    </form>
    </td>
  </tr>
</table>
</div>

    <div id="d3">
<table border="1" class="table" width="1200">
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
    
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
<tr>
    <td></td>       
    <td><?php echo $user['Id']; ?></td>
    <td><?php echo $user['m_image']; ?></td>
    <td><?php echo $user['m_name']; ?></td>
    <td><?php echo $user['m_kind']; ?></td>
    <td><?php echo $user['m_content']; ?></td>
    <td><?php echo $user['m_describe']; ?></td>
    <td>
        <a href="admin_update_check?id=<?php echo $user['Id']; ?>">修改</a>
        | <a href="admin_delete_check?id=<?php echo $user['Id']; ?>">删除</a>
    </td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>


</table>
  </div>
</body>
</html>