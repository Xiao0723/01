<?php
namespace app\movies\controller;
use think\Controller;  //导入Controller
use think\Db;
use think\db\where;
use app\common\model\Admin;
use app\common\model\Info;
class AdminController extends controller //继承Controller
{
//后台页面方法
    public function frameset()
    {	
    	$x=session("name");
    	if ($x==null){
    		return $this->error("请先登录账号",url('Index/login'));
    	}
    	else {
        $htmls=$this->fetch();
        return $htmls;
    	}
    }

    public function frameset_02()
    {
        $htmls=$this->fetch();
        return $htmls;
    }

    public function admin()
    {   
        // $infos=new Info;        //利用模型类创建一个对象
        // $MV=$infos->select();   //查询teacher表的所有数据       
        // $this->assign("x",$MV); //把查出来所有数据发送给视图文件
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Info::where('m_status','T')->order('id desc')->paginate(10);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        $htmls=$this->fetch();
        return $htmls;

        
    }

    public function admin_top()
    {
        $htmls=$this->fetch();
        return $htmls;
    }

    public function admin_left()
    {
        $htmls=$this->fetch();
        return $htmls;
    }

    public function admin_middle()
    {
        $htmls=$this->fetch();
        return $htmls;
    }

    

    //增删查改页面方法 

    //对movies数据库,info表增方法start
    public function admin_add()
    {
        $htmls=$this->fetch();
        return $htmls;       
    }

    public function fileimage()
    {
        $m_file = request()->file('image');
        $m_file->move('D:/phpStudy/WWW/Movies_TP5/public/static/image/display','');      
    }

    public function insert()
    {
        $m_file = request()->file('image');
        $m_file->move('D:/phpStudy/WWW/Movies_TP5/public/static/image/display','');
        //接收admin_add.html页面表单提交过来的数据，准备存入数据库
        $m_field=$_POST["textfield"];
        $str = substr($m_field,12);
        // echo "$str";
        $m_path="/Movies_TP5/public/static/image/display/";
        $field="$m_path"."$str";
        $bt=$_POST["bt"];
        $dy=$_POST["dy"];
        $lb=$_POST["lb"];
        $fba=$_POST["fba"];
        $zy=$_POST["zy"];
        $xq=$_POST["xq"];
        // 把收到的数据存储到一个空数组中
        $mvdata=array();
        $mvdata["m_image"]=$field;
        $mvdata["m_name"]=$bt;
        $mvdata["m_daoyan"]=$dy;
        $mvdata["m_kind"]=$lb;
        $mvdata["m_status"]=$fba;
        $mvdata["m_content"]=$zy;
        $mvdata["m_describe"]=$xq;
        //利用News模型建立对象，准备操作数据库info表
        $MoviesInfo=new Info;    
        $result=$MoviesInfo->data($mvdata)->save();

        if($result)
            echo '数据插入成功';
        else
            echo '数据插入失败'; 

    }
    //对movies数据库,info表增方法end

    //对movies数据库,info表改方法start
    public function admin_upd()
    {
        $list = Info::where('m_status','T')->order('id desc')->paginate(10);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        $htmls=$this->fetch();
        return $htmls;       
    }
    public function admin_update_check()
    {   
        $x=$_GET["id"];
        $infos=Info::get($x); //利用模型类创建一个对象
        $this->assign("x",$infos);
        $htmls=$this->fetch();
        return $htmls;        
    }
    public function admin_update_run()
    {   
        
        $list = Db::name('info')->where('Id',$_POST["m_id"])->update(['m_image'=>$_POST["textfield"],'m_name'=>$_POST["bt"],'m_kind'=>$_POST["lb"],'m_status'=>$_POST["fba"],'m_content'=>$_POST["zy"],'m_describe'=>$_POST["xq"]]);
        if($list){
            echo "修改成功";
        }else{
            echo "修改失败";
        }
    }
    //对movies数据库,info表改方法end

    //对movies数据库,info表查方法start
   
    public function admin_select()
    {
        $htmls=$this->fetch();
        return $htmls;

    }
    public function admin_select_middle()
    {
        $m_bt=$_POST["title"];
    
        $m_idmin=$_POST["price_min"];
        $m_idmax=$_POST["price_max"];

        $m_status=$_POST["m_status"];

        $m_lb=$_POST["m_lb"];

        $m_more=$_POST["m_more"];

        if(!empty($m_bt) && !empty($m_idmin) && !empty($m_idmax) && !empty($m_status) && !empty($m_lb)) {
            echo "string1";
            $list=Db::table('info')
            ->where('m_name','like','%'.$m_bt.'%')
            ->where('m_status' ,$m_status)
            ->where('id', '>' ,$m_idmin)
            ->where('id', '<' ,$m_idmax)
            ->where('m_kind', $m_lb)
            ->select();
            if ($list) {
            $this->assign('list', $list);
            $htmls=$this->fetch();
            return $htmls;
            }else{
            echo "未匹配到相关信息！";
            }
        }elseif ( (!empty($m_bt) && !empty($m_idmin) && !empty($m_idmax) && !empty($m_status)) || 
                  (!empty($m_bt) && !empty($m_idmin) && !empty($m_idmax) && !empty($m_lb)) || 
                  (!empty($m_bt) && !empty($m_status) && !empty($m_lb)) || 
                  (!empty($m_idmin) && !empty($m_idmax) && !empty($m_status) && !empty($m_lb)) ){
                    if (!empty($m_bt) && !empty($m_idmin) && !empty($m_idmax) && !empty($m_status)) {
                    echo "string2[123]";
                    $list=Db::table('info')
                    ->where('m_name','like','%'.$m_bt.'%')
                    ->where('id', '>' ,$m_idmin)
                    ->where('id', '<' ,$m_idmax)
                    ->where('m_status', '=' ,$m_status)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }
                    }elseif (!empty($m_bt) && !empty($m_idmin) && !empty($m_idmax) && !empty($m_lb)) {
                    echo "string2[124]";
                    $list=Db::table('info')
                    ->where('m_name','like','%'.$m_bt.'%')
                    ->where('id', '>' ,$m_idmin)
                    ->where('id', '<' ,$m_idmax)
                    ->where('m_kind','=', $m_lb)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }
                    }elseif (!empty($m_bt) && !empty($m_status) && !empty($m_lb)) {
                    echo "string2[134]";
                    $list=Db::table('info')
                    ->where('m_name','like','%'.$m_bt.'%')
                    ->where('m_status', '=' ,$m_status)
                    ->where('m_kind','=', $m_lb)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }
                    }elseif (!empty($m_idmin) && !empty($m_idmax) && !empty($m_status) && !empty($m_lb)) {
                    echo "string2[234]";
                    $list=Db::table('info')
                    ->where('id', '>' ,$m_idmin)
                    ->where('id', '<' ,$m_idmax)
                    ->where('m_status', '=' ,$m_status)
                    ->where('m_kind','=', $m_lb)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }
                    }
        }elseif ( (!empty($m_bt) && !empty($m_idmin) && !empty($m_idmax)) || 
                  (!empty($m_bt) && !empty($m_status)) ||
                  (!empty($m_bt) && !empty($m_lb)) || 
                  (!empty($m_idmin) && !empty($m_idmax) && !empty($m_status)) ||
                  (!empty($m_idmin) && !empty($m_idmax) && !empty($m_lb)) || 
                  (!empty($m_status) && !empty($m_lb)) ){

                  if (!empty($m_bt) && !empty($m_idmin) && !empty($m_idmax)) {
                    echo "string3[12]";
                    $list=Db::table('info')
                    ->where('m_name','like','%'.$m_bt.'%')
                    ->where('id', '>' ,$m_idmin)
                    ->where('id', '<' ,$m_idmax)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }
                  }elseif (!empty($m_bt) && !empty($m_status)) {
                    echo "string3[13]";
                    $list=Db::table('info')
                    ->where('m_name','like','%'.$m_bt.'%')
                    ->where('m_status', '=' ,$m_status)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }

                  }elseif (!empty($m_bt) && !empty($m_lb)) {
                    echo "string3[14]";
                    $list=Db::table('info')
                    ->where('m_name','like','%'.$m_bt.'%')
                    ->where('m_kind','=', $m_lb)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }

                  }elseif (!empty($m_idmin) && !empty($m_idmax) && !empty($m_status)) {
                    echo "string3[23]";
                    $list=Db::table('info')
                    ->where('id', '>' ,$m_idmin)
                    ->where('id', '<' ,$m_idmax)
                    ->where('m_status', '=' ,$m_status)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }

                  }elseif (!empty($m_idmin) && !empty($m_idmax) && !empty($m_lb)) {
                    echo "string3[24]";
                    $list=Db::table('info')
                    ->where('id', '>' ,$m_idmin)
                    ->where('id', '<' ,$m_idmax)
                    ->where('m_kind','=', $m_lb)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }

                  }elseif (!empty($m_status) && !empty($m_lb)) {
                    echo "string3[34]";
                    $list=Db::table('info')
                    ->where('m_status', '=' ,$m_status)
                    ->where('m_kind','=', $m_lb)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                        echo "未匹配到相关信息！";
                        }

                  }            
        }elseif (!empty($m_bt)) {
            echo "$m_bt";
            $list=Db::table('info')
            ->where('m_name','like','%'.$m_bt.'%')
            ->select();
                if ($list) {
                $this->assign('list', $list);
                $htmls=$this->fetch();
                return $htmls;
                }else{
                echo "未匹配到相关信息！";
                }
            }else{
                if (!empty($m_idmin) && !empty($m_idmax)) {
                echo "$m_idmin";
                $list=Db::table('info')
                ->where('id', '>' ,$m_idmin)
                ->where('id', '<' ,$m_idmax)
                ->where('id' ,$m_id)
                ->select();
                    if ($list) {
                    $this->assign('list', $list);
                    $htmls=$this->fetch();
                    return $htmls;
                    }else{
                        echo "未匹配到相关信息！";
                    }
                }else{
                    if (!empty($m_status)) {
                    echo "$m_status";
                    $list=Db::table('info')
                    ->where('m_status', '=' ,$m_status)
                    ->select();
                        if ($list) {
                        $this->assign('list', $list);
                        $htmls=$this->fetch();
                        return $htmls;
                        }else{
                            echo "未匹配到相关信息！";
                        }
                    }else{
                        if (!empty($m_lb)) {
                        echo "$m_lb";
                        $list=Db::table('info')
                        ->where('m_kind','=', $m_lb)
                        ->select();
                            if ($list) {
                            $this->assign('list', $list);
                            $htmls=$this->fetch();
                            return $htmls;
                            }else{
                                echo "未匹配到相关信息！";
                            }
                    }else{
                        echo "请非空操作!";
                    }

                }
                
            } 
        }
    }
    //对movies数据库,info表查方法end

    //对movies数据库,info表删方法start
    public function admin_del()
    {
        $list = Info::where('m_status','T')->order('id desc')->paginate(10);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        $htmls=$this->fetch();
        return $htmls;       
    }
    public function admin_delete_check()
    {
        $x=$_GET["id"];
        $re= Db::name('info')->where('id='.$x)->delete();        
        $list = Info::where('m_status','T')->order('id desc')->paginate(10);
        // // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        $htmls=$this->fetch("admin_del");
        return $htmls;
    }

    //对movies数据库,info表删方法end

    public function logout()
    {
        session("name",null);
        return $this->error("退出成功",url('Index/Index'));
    }

    public function test_imp01()
    {
        $htmls=$this->fetch();
        return $htmls;
    }

    public function test_imp02()
    {
        $infos=new Info;        //利用模型类创建一个对象
        $MV=$infos->select();   //查询teacher表的所有数据       
        $this->assign("x",$MV); //把查出来所有数据发送给视图文件
        $htmls=$this->fetch();
        return $htmls;
    }
}