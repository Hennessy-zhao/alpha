<?php
namespace Home\Controller;
use Think\Controller;
class MainController extends Controller {
    public function index(){
     	$this->display("index");
     }


    public function login(){
    	$user=I('post.user');
    	$pasd=I('post.pasd');
    	$where['username']=$user;
		$res=M('user')->where($where)->select();
		if ($res) {
			$password=$res[0]['password'];
			$rank=$res[0]['rank'];
			if ($rank==0) {
				echo 3;
			}
			else{
				if ($password==md5($pasd)){
					echo 1;
				}
				else
					echo 2;
			}
		}
		else{
			$where1['truename']=$user;
			$res1=M('user')->where($where1)->select();
			if ($res1) {
				$password1=$res1[0]['password'];
				$rank1=$res1[0]['rank'];
				if ($rank1==0) {
					echo 3;
				}
				else{
					if ($password1==md5($pasd)) {
						echo 1;
					}
					else{
						echo 2;
					}
				}
			}
			else{
				$where2['email']=$user;
				$res2=M('user')->where($where2)->select();
				if ($res2) {
					$password2=$res2[0]['password'];
					$rank2=$res2[0]['rank'];
					if ($rank2==0) {
						echo 3;
					}
					else{
						if ($password2==md5($pasd)) {
							echo 1;
						}
						else{
							echo 2;
						}
					}
				}
				else{
					echo 3;
				}
			}
		}
    }

    //对外网投诉/建议信息进行处理
    public function doadvise(){
    	$username=I('post.username');
    	$phone=I('post.phone');
    	$email=I('post.email');
    	$message=I('post.message');

    	$data=array(
			'username'=>$username,
			'phone'=>$phone,
			'email' => $email,
			'phone' => $phone,
			'message'=>$message,
			'start_time'=>date('y-m-d h:i:s',time())
			);		
		$result=M('advise')->add($data);
		echo 1;

    }


     public function _empty(){
     	echo "您输入的网址有错";
     }

     
}