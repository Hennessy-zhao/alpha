<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
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
			'start_time'=>date('y-m-d h:i:s',time())
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

    public function _empty(){
     	echo "您输入的网址有错";
     }
}