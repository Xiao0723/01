<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\news\child.html";i:1608017597;s:72:"D:\phpStudy\WWW\Movies_TP5\public/../application/movies\view\parent.html";i:1608017173;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <title>子页标题</title>

<style type="text/css" media="screen">
    #d0{
        background-color:#ff0;
        width:1200px;
        height: 600px;
    }


    #d1{
        background-color:#f0f;
        width:370px;
        height: 600px;
        float:left;
        padding-left:30px;
    }

    #d2{
        background-color:#0ff;
        width:770px;
        height: 600px;
        float:left;
        padding-left:30px;
    }
</style>

</head>
<body>

<form action="parent_submit" method="get" accept-charset="utf-8">
   <input type="text" name="cx">
   <input type="submit" name="tj" value="提交">
</form>

<table  width="1200" height="50" bgcolor="yellow" border="1">
    <caption>table title and/or explanatory text</caption>
    <thead>
        <tr>
            <th>header</th>
            <th>header</th>
            <th>header</th>
            <th>header</th>
            <th>header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>机构设置</td>
            <td>机构设置</td>
            <td>机构设置</td>
            <td>机构设置</td>
            <td>机构设置</td>

        </tr>
    </tbody>
</table>

<div  id="d0">
   <div id="d1">
    <p>left area..........
    <p>left area..........
    <p>left area..........
    <p>left area..........
    <p>left area..........
    <p>left area..........
    <p>left area..........
    <p>left area..........
   </div>

    <div id="d2">
    
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    <p>新闻标题。。。。。。。。。。。。。。。
    
   </div>

</div>
</body>
</html>