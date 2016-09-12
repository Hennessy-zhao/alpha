<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
     	$this->display("user");
     }

     public function register(){
     	$this->display("register");
     }

     public function repeatusername(){
    	$username=I('post.user');
    	$where['username']=$username;
		$res=M('user')->where($where)->select();
		if ($res) {
			echo 2;
		}
		else
		{
			echo 1;
		}
    }


    public function repeattruename(){
    	$username=I('post.user');
    	$where['truename']=$username;
		$res=M('user')->where($where)->select();
		if ($res) {
			echo 2;
		}
		else
		{
			echo 1;
		}
    }



    public function doregister(){
    	$username=I('post.username');
    	$truename=I('post.truename');
    	$password=I('post.password');
    	$email=I('post.email');
    	$start_year=I('post.start_year');
    	$phone=I('post.phone');
    	$sex=I('post.sex');
    	$introduction=I('post.introduction');

    	$psd=md5($password);

    	$data=array(
			'username'=>$username,
			'truename'=>$truename,
			'password'=>$psd,
			'email' => $email,
			'start_year'=>$start_year,
			'phone' => $phone,
			'sex'=>$sex,
			'introduction'=>$introduction,
			'start_time'=>date('y-m-d H:i:s',time())
			);		
		$result=M('user')->add($data);
		if ($result) {
			echo 1;
		}
		else
		{
			echo 0;
		}
    }




//*******以下为用户个人中心的一些小主页********************************************



//*********用户页面我的主页**************

    public function home(){
    	//发帖个数
    	$where['userid']=$_SESSION['userid'];
    	$postcount=M('posttitles')->field(true)->where($where)->count();
    	$commentcount=M('postcomments')->field(true)->where($where)->count();
    	$postnumber=intval($postcount)+intval($commentcount);

    	//文件个数
    	$where1['user']=$_SESSION['user'];
    	$filenumber=M('files')->field(true)->where($where1)->count();


    	//投诉/建议次数
    	$where2['username']=$_SESSION['user'];
    	$advisenumber=M('advise')->field(true)->where($where2)->count();

    	$this->assign('postnumber',$postnumber);
    	$this->assign('filenumber',$filenumber);
    	$this->assign('advisenumber',$advisenumber);



    	$this->display("home");
    }

//*********用户页面个人设置**************

    public function userset(){

        $where['userid']=$_SESSION['userid'];
        $list=M('user')->field(true)->where($where)->select();

        $this->assign('user',$list);


    	$this->display("userset");
    }


//*********用户页面系统信息**************

    public function message(){
    	$this->display("message");
    }


//*********用户页面我的帖子**************

    public function userpost(){
    	$this->display("userpost");
    }

//*********用户页面我的文件**************

    public function userfiles(){
    	$this->display("userfiles");
    }






     public function _empty(){
     	echo "您输入的网址有错";
     }



}