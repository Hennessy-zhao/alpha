<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
     	$this->display("index");
     }

    public function register(){
     	$this->display("register");
    }

    public function login(){
    	$user=I('post.user');
    	$pasd=I('post.pasd');
    	$where['username']=$user;
		$res=M('user')->where($where)->select();
		if ($res) {
			$password=$res[0]['password'];
			$rank=$res[0]['rank'];
			if ($rank<4) {
				echo 4;
			}
			else{
				if ($password==md5($pasd)){
					echo 1;
					$_SESSION['master']=$res[0]['truename'];
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
				if ($rank1<4) {
					echo 4;
				}
				else{
					if ($password1==md5($pasd)) {
						echo 1;
						$_SESSION['master']=$res1[0]['truename'];
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
					if ($rank2<4) {
						echo 4;
					}
					else{
						if ($password2==md5($pasd)) {
							echo 1;
							$_SESSION['master']=$res2[0]['truename'];
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

    public function _empty(){
     	echo "您输入的网址有错";
     }
}