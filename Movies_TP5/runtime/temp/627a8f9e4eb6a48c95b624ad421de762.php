<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\tp5\public/../application/movies\view\admin\admin_add.html";i:1604474853;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" type="text/css" href="/Movies_TP5/public/static/js/jquery.min.js">
    <!-- 编辑器js文件start -->
    <script type="text/javascript" src="/Movies_TP5/public/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/Movies_TP5/public/static/ueditor/_examples/editor_api.js"></script>
    <!-- 编辑器js文件end -->

	<style type="text/css">
*{
	margin: 0px;
	padding: 0px;
}
body{
    background-image: url(/Movies_TP5/public/static/image/admin_background.jpg);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100%;
	background-color: #ffebcd;
}
.bord{
	position: absolute;
	left: 110px;
	font-size: 24px;
	width: 750px;
	margin-top: 25px;
	/*height: 400px;*/
    /*border: 1px solid red;*/
}
.bord2{
	position: absolute;
	width: 1348px;

}
form p{
    font-size: 18px;
    margin-top: 20px;
}
input{
    font-size: 18px;
}
.input1{
    font-size: 16px;
    border: 1px solid rgb(169, 169, 169);
    height: 40px;
    width: 280px;
    background: #fafafa;
    border-radius: 6px;
    color: #888;
}
.input{
    font-size: 16px;
}
.button{ 
    background-color:#2ECCFA;
    width: 120px;
    height: 40px;
    border: 0px;
    margin-top: 20px;
    box-shadow: 0 2px 2px rgba(0,0,0,0.8);
    font-size: 20px;
    color: white;
    margin-left: 97px;
}

.button:hover{
    color: blue;
}

/*文件选择css样式开始*/
.file-box{ 
    position:relative;
    width:450px
} 
.txt{ 
    height:40px; 
    width: 240px;
    border:1px solid #cdcdcd; 
    border: 1px solid rgb(169, 169, 169);
    background: #fafafa;
    border-radius: 6px;
    color: #888;
    /*width:200px;border-right:none;*/
} 
.btn{ 
    background-color:#FFF;
    border:1px solid #CDCDCD;
    height:40px; 
    width:70px;
    border-radius: 10px;
    margin-left: 10px;
} 
.file{ 
    position:absolute; 
    top:8px; 
    right:32px; 
    height:70px; 
    opacity: 0;
    width:70px;
    /*border: 1px solid red;*/
}
/*文件选择css样式结束*/
	</style>
</head>
<body>
	<!-- 添加页面 -->
<div class="bord2">
    <div class="bord">
        <form action="insert" name="admin_add" method="post" id="admin_add">
            <h2>添加电影信息</h2>
            <p class="file-box">图片路径：
            <input type='text' name='textfield' id='textfield' class='txt' /><input type='button' class='btn' value='浏览...' />
            <input type="file" name="fileField" class="file" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" /> 
            </p>

            <p>电影标题：<input name="bt" type="text" class="input1" placeholder="请输入标题"><label for="fileField"></label>
            </p>
            <select name="lb">
               <option value="科幻">科幻</option>
               <option value="动画">动画</option>
               <option value="战争">战争</option>
               <option value="青春">青春</option>
            </select>
            <p>主演：<input name="zy" type="text" class="input1" placeholder="请输入主演人员"><label for="fileField"></label>
            </p>
            
            <p>详情：<textarea class="input" name="xq" id="bjq" cols="60" rows="30" placeholder="简介" style="vertical-align: top;"></textarea>
            </p>
            <script type="text/javascript">
                var ue = UE.getEditor('bjq');
            </script>
        <div>
        <button class="button" type="submit" name="fb">发布</button>
        <button class="button" type="reset" name="cz">重置</button>
        </div>
        </form>
            </div>
</div>
</body>
</html>