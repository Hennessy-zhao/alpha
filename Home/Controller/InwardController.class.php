<?php
namespace Home\Controller;
use Think\Controller;
class InwardController extends Controller {

//*****内网主页面********************************
    public function index(){
     	$this->display("index");
     }


//*****聊天室页面********************************

     public function chat(){
     	$this->display("chat");
     }


//*****发帖页面********************************

     public function posts(){
     	$this->display("posts");
     }

//*****文件页面********************************
     public function files(){
     	

          $m = M('files');      
          $where['ifshow'] = 0;
          $list = $m->field(true)->where($where)->order('id')->select();
          $this->assign('select', $list); // 赋值数据集

          $this->display("files");
     }

     //上传新文件
     public function addnewfiles(){
           $upload = new \Think\Upload();// 实例化上传类
          
                   $upload->maxSize   =     3145728 ;// 设置附件上传大小
                   $upload->rootPath  =     './Public/files/'; // 设置附件上传根目录
                   $upload->savePath  =     ''; // 设置附件上传（子）目录
                   $upload->saveName  =        array('uniqid','');     //I('post.title'); 
                   $upload->uploadReplace=true;        //如果存在同名文件是否覆盖
                   $upload->autoSub=false;
                   // 上传文件 
                   $info   =   $upload->upload();
               
                   if(!$info) {// 上传错误提示错误信息
                       echo $upload->getError();
                   }else{// 上传成功

                    $data=array(
                         'filename'=>I('post.newfiletitle'),
                         'filesrc' => $info["newfile"]["savename"],
                         'user'=>$_SESSION['user'],
                         'filedesc'=>I('post.newfiledesc'),
                         'uploadtime'=>date('y-m-d H:i:s',time())
                         );        
                         $result=M('files')->add($data);

                       $this->redirect("Inward/files");
                   }
     }


//*****成员中心页面********************************

     public function membercenter(){
     	$this->display("membercenter");
     }

     public function _empty(){
          echo "您输入的网址有错";
     }




//*******成员退出页面

    public function signout(){
      $_SESSION['master']=NULL;
      echo 1;
    }

}



// create table files(
// id int not null primary key auto_increment,
// filename varchar(64) not null,
// filesrc text not null,
// user varchar(64) not null,
// ifshow int not null default 0,
// master varchar(64)
// )default charset=utf8;



