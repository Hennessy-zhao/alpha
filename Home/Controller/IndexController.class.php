<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
     	$this->display("index");
     }


     public function _empty(){
     	echo "您输入的网址有错";
     }
}