<?php
// 前台页页控制器
namespace app\movies\controller;
use think\Controller;  //导入Controller
use think\Db;
// use think\M;
use app\common\model\Index;
use app\common\model\Info;
use app\common\model\User;
use app\common\model\Banner;
use app\common\model\Hotspot;
class IndexController extends controller //继承Controller
{
    public function index()
    {   

        $list1 = Info::where('m_kind', "电视剧")->order('id desc')->select();
        $list2 = Info::where('m_kind', "电影")->order('id desc')->select();
        $list3 = Info::where('m_kind', "综艺")->order('id desc')->select();
        $list4 = Info::where('m_kind', "娱乐")->order('id desc')->select();
        $list5 = Info::where('m_kind', "动漫")->order('id desc')->select();
        $this->assign('cx1',$list1);
        $this->assign('cx2',$list2);
        $this->assign('cx3',$list3);
        $this->assign('cx4',$list4);
        $this->assign('cx5',$list5);

        $infos=new Banner;       
        $Ban=$infos->select(); 
        $this->assign("x1",$Ban); 

        $infos=new Hotspot;
        // $Hot = Hotspot::where('hot_num',)->order('id desc')->select(); 
        $Hot=$infos->order('hot_num desc')->select();       
        $this->assign("x2",$Hot); 

        $htmls=$this->fetch();
        return $htmls;

    }
    public function test()
    {
        $htmls=$this->fetch();
        return $htmls;

    }
    public function test_check()
    {
        $m_status=$_POST["m_status"];
        $m_id=$_POST["m_id"];
        $m_lb=$_POST["m_lb"];
        $m_bt=$_POST["m_bt"];
        
        $list1 = Info::where('m_kind',$m_lb)->value("m_kind");
        $list2 = Info::where('m_name',$m_bt)->value("m_name");
        $list3 = Info::where('m_status',$m_status)->value("m_status");
        $list4 = Info::where('id',$m_id)->value("id");
        if(!is_null($list1)){
            $list = Info::where('m_kind',$m_lb)->select();
            $this->assign('list', $list);
            $htmls=$this->fetch();
            return $htmls;
        }else{
            echo "查询失败，此类型".$m_lb."作品不存在！";
        }
        if(!is_null($list2)) {
            $list = Info::where('m_name',$m_bt)->select();
            $this->assign('list', $list);
            $htmls=$this->fetch();
            return $htmls;           
        }else{
            return $this->error("查询失败，此《".$m_bt."》标题的作品不存在！",url('Index/test'));
        }
        if (!is_null($list3)) {
            $list = Info::where('m_status',$m_status)->select();
            $this->assign('list', $list);
            $htmls=$this->fetch();
            return $htmls;   
        }else{
            echo "查询失败，还未有".$m_status."作品！";
        }
        if (!is_null($list4)) {
            $list = Info::where('id',$m_id)->select();
            $this->assign('list', $list);
            $htmls=$this->fetch();
            return $htmls;  
        }else{
            echo "查询失败，还未有此".$m_id."作品！";
        } 
    }

    public function login()
    {   
        $htmls=$this->fetch();
        //把获取到的静态网页返回给用户
        return $htmls;
    }
    public function user_check()
    {
    	$user=$_POST["user"];
    	$pass=$_POST["password"];
		//echo $user."MM".$pass."mm";
		$map=array('user_name'=>$user);
		$cxjg=User::get($map);
		if(!is_null($cxjg)){
			if($cxjg->getData("user_password")==$pass){
				//把提交用户名存储到session里面
				session("name",$user); 
				return $this->success("登录成功",url('Admin/frameset'));
			}
			else{ 
				return $this->error("密码不对",url('Index/login'));
			}
		}
		else{ 
			return $this->error("账号不对",url('Index/login'));
		}	
    }
    public function member_add(){
        $htmls=$this->fetch();
        //把获取到的静态网页返回给用户
        return $htmls;
    }    
    public function member_add_check()
    {   
         //接收member_add.html页面表单提交过来的数据，准备存入数据库
        $nc=$_POST["nc"];
        $sj=$_POST["sj"];
        $yx=$_POST["yx"];
        $pd1=$_POST["pd1"];
        $pd2=$_POST["pd2"];
        // 把收到的数据存储到一个空数组中
        $member_data=array();
        if ($pd1==$pd2){
            $member_data["user_name"]=$nc;
            $member_data["user_phone"]=$sj;
            $member_data["user_email"]=$yx;
            $member_data["user_password"]=$pd1;
            //利用News模型建立对象，准备操作数据库info表
            $MemberInfo=new User;    
            $result=$MemberInfo->data($member_data)->save();
            if($result)
                return $this->success("注册成功>用户名：".$nc,url('Index/login'));
            else
                echo '数据插入失败';
        }else{ 
            return $this->error("密码不匹配，请两次密码一致",url('Index/member_add'));
        }   
        
    }
    public function search()
    {
        $keywords=$_GET["keywords"];
        $cx=new Info;
        $cxx=$cx->where('m_name','like','%'."$keywords".'%')->select();
        // var_dump($cxx);
        $this->assign('cxjg',$cxx);
        $htmls=$this->fetch();
        return $htmls;
    }
    
}