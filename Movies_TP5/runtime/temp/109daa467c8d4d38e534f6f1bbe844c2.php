<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin\admin_upd.html";i:1609257306;s:71:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\admin.html";i:1608976009;}*/ ?>

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


<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m_date): $mod = ($i % 2 );++$i;?>
<div style="padding: 20px; background-color: #F2F2F2;">
  <div class="layui-row layui-col-space15">
     <div class="layui-col-md5">
      <div class="layui-card">
        <div class="layui-card-header">Id号：<?php echo $m_date['Id']; ?></div>
        <div class="layui-card-header">图片路径：<?php echo $m_date['m_image']; ?></div>
        <div class="layui-card-header">作品名：<?php echo $m_date['m_name']; ?></div>
        <div class="layui-card-header">类型：<?php echo $m_date['m_kind']; ?></div>
      </div>
    </div>
    <div class="layui-col-md7">
      <div class="layui-card">
        <div class="layui-card-header">主演人员：</div>
        <div class="layui-card-body">
        <?php echo $m_date['m_content']; ?>
        </div>
      </div>
    </div>
    <div class="layui-col-md7">
      <div class="layui-card">
        <div class="layui-card-header">作品描述：</div>
        <div class="layui-card-body">
        <?php echo $m_date['m_describe']; ?>
        </div>
      </div>
    </div> 
    <div class="layui-col-md2">
      <div class="layui-card">
        <div class="layui-card-header">
          <a href="admin_update_check?id=<?php echo $m_date['Id']; ?>">
          <button type="button" class="layui-btn layui-btn-normal layui-btn-sm">
            <i class="layui-icon"></i>
          </button>
          </a>
          <a href="#">
           <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
          </a>
          <a href="#">
        <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"><i class="layui-icon"></i></button>
        </a>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php endforeach; endif; else: echo "" ;endif; ?>
    <?php echo $list->render(); ?>
    
</body>
</html>