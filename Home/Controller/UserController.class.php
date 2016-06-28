<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
     	$this->display("user");
     }

     public function _empty(){
     	echo "您输入的网址有错";
     }



}