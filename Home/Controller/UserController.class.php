<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){

        $where['id']=$_SESSION['userid'];
        $list=M('user')->field(true)->where($where)->select();
        $img=$list[0]['userimg'];
        $this->assign('userimg',$img);

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


    //修改个人信息

    public function updateusermsg(){
        
        if ($_FILES['userimg']['name']) {
            $upload = new \Think\Upload();
            $upload->maxSize   =     3145728 ;
            $upload->rootPath  =     './Public/userimg/';
            $upload->savePath  =     ''; 
            $upload->saveName  =        array('uniqid','');   
            $upload->uploadReplace=true; 
            $upload->autoSub=false;
            $info   =   $upload->upload();
            if(!$info) {
                echo $upload->getError();
            }

            $imgsrc=$info["userimg"]["savename"];
        }
        else{
            $imgsrc="userimg.jpg";
        }
        
        $where['id']=$_SESSION['userid'];
        $data['username'] = I('post.username');
        $data['start_year'] = I('post.startyear');
        $data['phone']=I('post.phone');
        $data['sex']=I('post.sex');
        $data['introduction']=I('post.introduction');
        $data['userimg'] = $imgsrc;
      
        $result=M('user')->where($where)->save($data);

        $this->redirect("User/userset");
                   
    }


//*********用户页面系统信息**************

    public function message(){
    	$this->display("message");
    }


//*********用户页面我的帖子**************

    public function userpost(){
        $where['userid']=$_SESSION['userid'];
        $where['ifdelete']=1;
        $list=M('posttitles')->field(true)->where($where)->select();
        $this->assign("data",$list);

    	$this->display("userpost");
    }



    //用户页面删除一个帖子

    public function deleteposts(){
        $postid=I('post.postid');
        $where['id']=$postid;
        $data['ifdelete']=0;
        $res=M('posttitles')->where($where)->save($data);

        if ($res) {
            echo 1;
        }
        else{
            echo 0;
        }
    }

//*********用户页面我的文件**************

    public function userfiles(){
        $where['user']=$_SESSION['user'];
        $where['ifshow']=1;
        $where['ifdelete']=1;
        $data=M('files')->field(true)->where($where)->select();
        $this->assign("data",$data);

    	$this->display("userfiles");
    }



    //用户页面删除一个文件

    public function deletefiles(){

        $fileid=I('post.fileid');

        $where['id']=$fileid;
        $data['ifdelete']=0;
        $res=M('files')->where($where)->save($data);

        if ($res) {
            echo 1;
        }
        else{
            echo 0;
        }
    }






     public function _empty(){
     	echo "您输入的网址有错";
     }



}