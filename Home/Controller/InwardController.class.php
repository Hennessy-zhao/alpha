<?php
namespace Home\Controller;
use Think\Controller;
class InwardController extends Controller {

//*****内网主页面********************************
    public function index(){
     	$this->display("index");
     }


//模板

     public function masterplate(){
      $this->display("masterplate");
     }


//*****聊天室页面********************************

     public function chat(){
     	$this->display("chat");
     }


//*****发帖页面********************************

     public function posts(){
      $user = M('user');
      

      $count = $user->table('posttitles post,user user')->where('post.userid=user.id and post.ifdelete=1')->field('post.id as id, post.title as title, post.messages as messages,post.postdate as date,post.replycount as comments,user.username as username,user.userimg as img')->order('post.id desc' )->count();
      $p = new Page($count,10);
      $p->setConfig('theme',"<ul class='pagination'><li><a> %HEADER% </a></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %NOW_PAGE%/%TOTAL_PAGE% 页</a></li></ul>");
      $list = $user->table('posttitles post,user user')->where('post.userid=user.id and post.ifdelete=1')->field('post.id as id, post.title as title, post.messages as messages,post.postdate as date,post.replycount as comments,user.username as username,user.userimg as img')->order('post.id desc' )->limit($p->firstRow, $p->listRows)->select();
      $this->assign('select', $list); // 赋值数据集
      $this->assign('page', $p->show()); // 赋值分页输出
     
     	$this->display("posts");
     }




     


     //发布新帖子

     public function addnewpost(){
          $posttitle=I('post.posttitle');
          $postmessages=I('post.messages');

          //获取userid
          $m = M('user');      
          $where['username'] = $_SESSION['user'];
          $list = $m->field(true)->where($where)->select();
          $userid=$list[0]['id'];

          $data=array(
              'title'=>$posttitle,
              'filesrc' => $info["newfile"]["savename"],
              'userid'=>$userid,
              'messages'=>$postmessages,
              'postdate'=>date('y-m-d H:i:s',time())
          );    

          $result=M('posttitles')->add($data);

          $this->redirect("Inward/posts");
     }


     //单个帖子页面

      public function postmessages(){
        $postid=I('get.postid');
        
        $m1 = M('posttitles');     
        $list1 = $m1->table('posttitles post,user user')->where('post.id='.$postid.' and post.userid=user.id')->field('post.id as id, post.title as title, post.messages as messages,post.postdate as date,user.id as userid,user.username as username,user.userimg as img')->order('post.id desc' )->select();
        $this->assign('select1', $list1);

        $m2 = M('postcomments');  
        $count = $m2->table('postcomments post,user user')->where('post.titleid='.$postid.' and post.fid=-1 and post.userid=user.id')->field('post.id as id, post.titleid as titleid, post.fid as postfid,post.messages as messages,post.commentdate as date,post.good as good,post.commentid as commentid, post.fname as fname ,user.id as userid,user.username as username,user.userimg as img')->count();
        $p = new Page($count,10);
        $p->setConfig('theme',"<ul class='pagination'><li><a> %HEADER% </a></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %NOW_PAGE%/%TOTAL_PAGE% 页</a></li></ul>");
        $list2 = $m2->table('postcomments post,user user')->where('post.titleid='.$postid.' and post.fid=-1 and post.userid=user.id')->field('post.id as id, post.titleid as titleid, post.fid as postfid,post.messages as messages,post.commentdate as date,post.good as good,post.commentid as commentid, post.fname as fname ,user.id as userid,user.username as username,user.userimg as img')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select2', $list2);
        $this->assign('page', $p->show()); // 赋值分页输出

        $list3 = $m2->table('postcomments post,user user')->where('post.titleid='.$postid.' and post.userid=user.id')->field('post.id as id, post.titleid as titleid, post.fid as postfid,post.messages as messages,post.commentdate as date,post.good as good,post.commentid as commentid, post.fname as fname ,user.id as userid,user.username as username,user.userimg as img')->select();      
        $this->assign('select3', $list3);

        $this->display("postmessages");
      }


      //在单个帖子中发表评论
      public function addnewcomment(){
        $postid=I('get.postid');
        $userid=$_SESSION['userid'];
        $messages=I('post.newtext');
        $data=array(
              'titleid'=>$postid,
              'fid' => -1,
              'userid'=>$userid,
              'messages'=>$messages,
              'commentdate'=>date('y-m-d H:i:s',time())
          );    

        $result=M('postcomments')->add($data);


        $this->redirect("Home/Inward/postmessages/postid/".$postid);
      }



      //无极限评论提交

      public function addendlesscomment(){
          $titleid=I('post.titleid');
          $fid=I('post.fid');
          $commentid=I('post.commentid');
          $message=I('post.message');
          $fname=I('post.fname');

          $data=array(
              'titleid'=>$titleid,
              'fid' => $fid,
              'userid'=>$_SESSION['userid'],
              'messages'=>$message,
              'commentdate'=>date('y-m-d H:i:s',time()),
              'commentid'=>$commentid,
              'fname'=>$fname
          );    

          $result=M('postcomments')->add($data);
          if($result){
            echo 1;
          }
          else{
            echo 0;
          }
      }


      //评论点赞

      public function goodcomment(){
        $commentid=I('post.commentid');
        $m = M('postcomments');      
        $where['id'] = $commentid;
        $list = $m->where($where)->select();
        $good=intval($list[0]['good'])+1;

        $User = M("postcomments"); // 实例化User对象
        $data['good'] = $good;
        $res=$User->where($where)->save($data); // 根据条件保存修改的数据
        if ($res) {
          echo 1;
        }
        else
          echo 0;
      }

//*****文件页面********************************
     public function files(){
     	

          $m = M('files');      
          $where['ifshow'] = 1;
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

class Page{
    public $firstRow; // 起始行数
    public $listRows; // 列表每页显示行数
    public $parameter; // 分页跳转时要带的参数
    public $totalRows; // 总行数
    public $totalPages; // 分页总页面数
    public $rollPage   = 5;// 分页栏每页显示的页数
    public $lastSuffix = true; // 最后一页是否显示总页数

    private $p       = 'p'; //分页参数名
    private $url     = ''; //当前链接URL
    private $nowPage = 1;

    // 分页显示定制
    private $config  = array(
        'header' => '<span class="rows">共 %TOTAL_ROW% 条记录</span>',
        'prev'   => '<<',
        'next'   => '>>',
        'first'  => '1...',
        'last'   => '...%TOTAL_PAGE%',
        'theme'  => '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%',
    );

    /**
     * 架构函数
     * @param array $totalRows  总的记录数
     * @param array $listRows  每页显示记录数
     * @param array $parameter  分页跳转的参数
     */
    public function __construct($totalRows, $listRows=20, $parameter = array()) {
        C('VAR_PAGE') && $this->p = C('VAR_PAGE'); //设置分页参数名称
        /* 基础设置 */
        $this->totalRows  = $totalRows; //设置总记录数
        $this->listRows   = $listRows;  //设置每页显示行数
        $this->parameter  = empty($parameter) ? $_GET : $parameter;
        $this->nowPage    = empty($_GET[$this->p]) ? 1 : intval($_GET[$this->p]);
        $this->nowPage    = $this->nowPage>0 ? $this->nowPage : 1;
        $this->firstRow   = $this->listRows * ($this->nowPage - 1);
    }

    /**
     * 定制分页链接设置
     * @param string $name  设置名称
     * @param string $value 设置值
     */
    public function setConfig($name,$value) {
        if(isset($this->config[$name])) {
            $this->config[$name] = $value;
        }
    }

    /**
     * 生成链接URL
     * @param  integer $page 页码
     * @return string
     */
    private function url($page){
        return str_replace(urlencode('[PAGE]'), $page, $this->url);
    }

    /**
     * 组装分页链接
     * @return string
     */
    public function show() {
        if(0 == $this->totalRows) return '';

        /* 生成URL */
        $this->parameter[$this->p] = '[PAGE]';
        $this->url = U(ACTION_NAME, $this->parameter);
        /* 计算分页信息 */
        $this->totalPages = ceil($this->totalRows / $this->listRows); //总页数
        if(!empty($this->totalPages) && $this->nowPage > $this->totalPages) {
            $this->nowPage = $this->totalPages;
        }

        /* 计算分页临时变量 */
        $now_cool_page      = $this->rollPage/2;
        $now_cool_page_ceil = ceil($now_cool_page);
        $this->lastSuffix && $this->config['last'] = $this->totalPages;

        //上一页
        $up_row  = $this->nowPage - 1;
        $up_page = $up_row > 0 ? '<a class="prev" href="' . $this->url($up_row) . '">' . $this->config['prev'] . '</a>' : '';

        //下一页
        $down_row  = $this->nowPage + 1;
        $down_page = ($down_row <= $this->totalPages) ? '<a class="next" href="' . $this->url($down_row) . '">' . $this->config['next'] . '</a>' : '';

        //第一页
        $the_first = '';
        if($this->totalPages > $this->rollPage && ($this->nowPage - $now_cool_page) >= 1){
            $the_first = '<a class="first" href="' . $this->url(1) . '">' . $this->config['first'] . '</a>';
        }

        //最后一页
        $the_end = '';
        if($this->totalPages > $this->rollPage && ($this->nowPage + $now_cool_page) < $this->totalPages){
            $the_end = '<a class="end" href="' . $this->url($this->totalPages) . '">' . $this->config['last'] . '</a>';
        }

        //数字连接
        $link_page = "";
        for($i = 1; $i <= $this->rollPage; $i++){
            if(($this->nowPage - $now_cool_page) <= 0 ){
                $page = $i;
            }elseif(($this->nowPage + $now_cool_page - 1) >= $this->totalPages){
                $page = $this->totalPages - $this->rollPage + $i;
            }else{
                $page = $this->nowPage - $now_cool_page_ceil + $i;
            }
            if($page > 0 && $page != $this->nowPage){

                if($page <= $this->totalPages){
                    $link_page .= '<a class="num" href="' . $this->url($page) . '">' . $page . '</a>';
                }else{
                    break;
                }
            }else{
                if($page > 0 && $this->totalPages != 1){
                    $link_page .= '<span class="current">' . $page . '</span>';
                }
            }
        }

        //替换分页内容
        $page_str = str_replace(
            array('%HEADER%', '%NOW_PAGE%', '%UP_PAGE%', '%DOWN_PAGE%', '%FIRST%', '%LINK_PAGE%', '%END%', '%TOTAL_ROW%', '%TOTAL_PAGE%'),
            array($this->config['header'], $this->nowPage, $up_page, $down_page, $the_first, $link_page, $the_end, $this->totalRows, $this->totalPages),
            $this->config['theme']);
        return "<div>{$page_str}</div>";
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

// create table posttitles(
// id int not null primary key auto_increment,
// title varchar(64) not null,
// userid varchar(64) not null,
// messages text not null,
// postdate datetime not null
// )default charset=utf8;

// create table postcomments(
// id int not null primary key auto_increment,
// titleid int not null,
// fid int not null,
// userid int not null,
// messages text not null,
// commentdate datetime not null
// )default charset=utf8;



