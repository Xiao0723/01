<?php
// 前台页页控制器
namespace app\movies\controller;
use think\Controller;  //导入Controller
class TestController extends controller //继承Controller
{
    public function parent()
    {
        $htmls=$this->fetch();
        return $htmls;
    }
    public function child()
    {
        $htmls=$this->fetch();
        return $htmls;
    }

    
    
}