<?php
namespace Home\Controller;
use Think\Controller;
class InwardController extends Controller {
    public function index(){
     	$this->display("index");
     }


     public function chat(){
     	$this->display("chat");
     }

     public function posts(){
     	$this->display("posts");
     }

     public function files(){
     	$this->display("files");
     }

     public function membercenter(){
     	$this->display("membercenter");
     }

     public function _empty(){
          echo "您输入的网址有错";
     }

}