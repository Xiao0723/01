<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\WWW\MTP5\public/../application/movies\view\admin\admin_select_top.html";i:1606354510;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
   #d2{
    margin-left: 110px;
  }
.table {
  font-family: verdana,arial,sans-serif;
  font-size:14px;
  color:#333333;
  border-color: #999999;
  border-collapse: collapse;
}

.table th {
  background:#e0ffff;
  padding: 4px;
  border-style: solid;
  border-color: #999999;
  font-size: 18px;
}
.table td {
  background:#fafad2;
  padding: 8px;
  border-style: solid;
  border-color: #999999;
}

.table1 {
  font-family: verdana,arial,sans-serif;
  font-size:14px;
  
  border-color: #999999;
  border-collapse: collapse;
}


.table1 td {
  padding: 8px;
  border-style: solid;
  border-color: #999999;
} 
#d3 p{
  font-size: 20px;
  
}
a:link{
  text-decoration: none;
  color: blue;
}
#d3 a:hover{
  color: #F00;
}

.page{
  text-align:center;

  }
.page a,.page span{
  text-decoration:none;
  border:1px solid #f9d52b;
  padding:5px 7px;
  color:#767675;
  cursor:pointer;
  }
.page a:hover,.page span:hover{
  color:red;
  }
.txt{ 
    height:30px; 
    width: 240px;
    border:1px solid #cdcdcd; 
    border: 1px solid rgb(169, 169, 169);
    background: #fafafa;
    border-radius: 6px;
    color: #888;
    /*width:200px;border-right:none;*/
} 
     
.button {
  color: #666;
  background-color: #EEE;
  border-color: #EEE;
  font-weight: 300;
  font-size: 16px;
  font-family: "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  text-decoration: none;
  text-align: center;
  line-height: 40px;
  height: 40px;
  padding: 0 40px;
  margin: 0;
  display: inline-block;
  appearance: none;
  cursor: pointer;
  border: none;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  -webkit-transition-property: all;
          transition-property: all;
  -webkit-transition-duration: .3s;
          transition-duration: .3s;
  /*
  * Disabled State
  *
  * The disabled state uses the class .disabled, is-disabled,
  * and the form attribute disabled="disabled".
  * The use of !important is only added because this is a state
  * that must be applied to all buttons when in a disabled state.
  */ }
  

.button-rounded {
  border-radius: 4px; 
  }
  
  
.button-royal,
.button-royal-flat {
  background-color: #7B72E9;
  border-color: #7B72E9;
  color: #FFF; 
  }
.button-royal:visited,.button-royal-flat:visited {
    color: #FFF; 
  }
.button-royal:hover, .button-royal:focus,.button-royal-flat:hover,.button-royal-flat:focus {
    background-color: #a49ef0;
    border-color: #a49ef0;
    color: #FFF; 
  }
.button-royal:active, .button-royal.active, .button-royal.is-active,.button-royal-flat:active,.button-royal-flat.active,.button-royal-flat.is-active {
    background-color: #827ae1;
    border-color: #827ae1;
    color: #5246e2; 
  }

  
.button-caution,
.button-caution-flat {
  background-color: #FF4351;
  border-color: #FF4351;
  color: #FFF; 
  }
.button-caution:visited,.button-caution-flat:visited {
    color: #FFF; 
  }
.button-caution:hover, .button-caution:focus,.button-caution-flat:hover,.button-caution-flat:focus {
    background-color: #ff7680;
    border-color: #ff7680;
    color: #FFF; 
  }
.button-caution:active, .button-caution.active,.button-caution.is-active,.button-caution-flat:active,.button-caution-flat.active,.button-caution-flat.is-active {
    background-color: #f64c59;
    border-color: #f64c59;
    color: #ff1022;
  }
  
  
.button-highlight,
.button-highlight-flat {
  background-color: #FEAE1B;
  border-color: #FEAE1B;
  color: #FFF; 
  }
.button-highlight:visited,.button-highlight-flat:visited {
    color: #FFF; 
  }
.button-highlight:hover, .button-highlight:focus,.button-highlight-flat:hover,.button-highlight-flat:focus {
    background-color: #fec04e;
    border-color: #fec04e;
    color: #FFF;
  }
.button-highlight:active,.button-highlight.active,.button-highlight.is-active,.button-highlight-flat:active,.button-highlight-flat.active,.button-highlight-flat.is-active {
    background-color: #f3ab26;
    border-color: #f3ab26;
    color: #e59501; 
  }
  
  
  
.button-action,
.button-action-flat {
  background-color: #A5DE37;
  border-color: #A5DE37;
  color: #FFF; 
  }
.button-action:visited,.button-action-flat:visited {
    color: #FFF; 
  }
.button-action:hover, .button-action:focus,.button-action-flat:hover,.button-action-flat:focus {
    background-color: #b9e563;
    border-color: #b9e563;
    color: #FFF; 
  }
.button-action:active, .button-action.active, .button-action.is-active,.button-action-flat:active,.button-action-flat.active,.button-action-flat.is-active {
    background-color: #a1d243;
    border-color: #a1d243;
    color: #8bc220; 
  }
  
.table th{
    background:#eff7fd;
    padding: 4px;
    border-style: solid;
    border-color: #999999;
    font-size: 18px;
    color: #178fe6;
}
  </style>
  
</head>
<body>
<div id="d2">
<table width="1200" border="1" class="table1">
  
  <tr>
    <td width="97">ID</td>
    <td width="493">
      <form name="form2" method="post" action="">
        <label for="textfield"></label>
        <input type="text" name="textfield" id="textfield" class="txt">
      </form>
    </td>
    <td width="75">类型</td>
    <td width="507">
      <form name="form4" method="post" action="">
        <label for="select"></label>
        <select name="lb">
               <option value="1">科幻</option>
               <option value="2">动画</option>
               <option value="3">战争</option>
               <option value="4">青春</option>
        </select>
      </form>
    </td>
  </tr>

  <tr>
    <td>电影标题</td>
    <td>
      <form name="form3" method="post" action="">
        <label for="textfield2"></label>
        <input type="text" name="textfield2" id="textfield2" class="txt">
      </form>
    </td>
    <td>主演</td>
    <td>
      <form name="form5" method="post" action="">
        <label for="textfield3"></label>
        <input type="text" name="textfield3" id="textfield3" class="txt">
      </form>
    </td>
  </tr>

  <tr>
    <td colspan="2">
      <form>
        <a href="file:///C|/Users/ting/Desktop/add.php"><input type="submit" value="添加" class="button button-rounded button-royal button-royal-flat"></a>
        <input type="button" value="编辑" class="button button-rounded button-caution button-caution-flat">
        <input type="button" value="删除" class="button button-rounded button-highlight button-highlight-flat">
        <a href="admin_select_middle.html" target="admin_select_middle"><input type="button" value="统计" class="button button-rounded button-action button-action-flat"></a>
      </form>
    </td>
    <td colspan="2">
      <div class="page">
          <span>上一页</span>
              <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">7</a>
            <span>下一页</span>
        </div>
    </td>
  </tr>
</table>
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
</table>
</div>

</body>
</html>