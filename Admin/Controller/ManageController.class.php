<?php
namespace Admin\Controller;
use Think\Controller;
class ManageController extends Controller {
    public function index(){
    	if ($_SESSION['master']==NULL) {
    		$this->redirect("Index/index");
    	}


     	$this->display("index");
     }


    public function signout(){
    	$_SESSION['master']=NULL;
    	echo 1;
    }



//welcome欢迎页面

    public function welcome(){
        $this->display("welcome");
     }



//已有成员的一系列操作*****************************

    public function existmemer(){
        $m = M('user');      
        $where = "rank!=0";
        $count = $m->where($where)->count();
        $where1 = "rank>3";
        $masternum=$m->where($where1)->count();
        $membernum=$count-$masternum;
        // 实例化分页类
        $p = new Page($count,15);
        //$p = getpage($count,15);
        $list = $m->field(true)->where($where)->order('rank desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('masternum', $masternum);
        $this->assign('membernum', $membernum);


        $this->display("existmemer");
    }


                public function managerank(){
                    $userid=I('post.userid');
                    $manage=I('post.manage');
                    if ($manage<=5) {
                        $User = M("user"); // 实例化User对象
                        // 要修改的数据对象属性赋值
                        $data['rank'] = $manage;
                        $data['judger']=$_SESSION['master'];
                        $where['id']=$userid;
                        $save=$User->where($where)->save($data); 
                        if ($save) {
                            echo 1;
                        }
                        else{
                            echo 2;
                        }

                    }
                    else{
                        $User1 = M("user"); // 实例化User对象
                        // 要修改的数据对象属性赋值
                        $data1['rank'] = -1;
                        $data1['judger']=$_SESSION['master'];
                        $where1['id']=$userid;
                        $save1=$User1->where($where1)->save($data1); 
                        if ($save1) {
                            echo 1;
                        }
                        else{
                            echo 2;
                        }
                    }
                }


                public function deletemember(){
                    $userid=I('post.userid');

                    $where['truename']=$_SESSION['master'];
                    $res=M('user')->where($where)->select();
                    $rankmaster=$res[0]['rank'];

                    $where1['id']=$userid;
                    $res1=M('user')->where($where1)->select();
                    $rankmember=$res1[0]['rank'];

                    if ($rankmember>=$rankmaster) {
                        echo 2;
                    }
                    else{
                        $User = M("user"); // 实例化User对象
                        $where2['id']=$userid;
                        $res=$User->where($where2)->delete(); // 删除id为5的用户数据
                        if ($res) {
                            echo 1;
                        }
                        else
                            echo 0;
                    }
                }

//审核成员的一系列操作*****************************

    public function examinememer(){
        $m = M('user');      
        $where = "rank=0";
        $count = $m->where($where)->count();
        // 实例化分页类
        $p = new Page($count,20);
        //$p = getpage($count,15);
        $list = $m->field(true)->where($where)->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('count', $count); 


        $this->display("examinememer");
    }




//现有帖子的一系列操作*****************************
    public function existposts(){
        $m = M('posttitles');      
        $where = "ifdelete=1";
        $count = $m->where($where)->count();
        // 实例化分页类
        $p = new Page($count,10);
        //$p = getpage($count,15);
        $list = $m->table('posttitles post,user user')->where('post.userid=user.id and post.ifdelete=1')->field('post.id as id, post.title as title, post.messages as messages,post.postdate as date,post.replycount as comments,user.username as username,user.userimg as img')->order('post.id desc' )->order('id asc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('count', $count); // 赋值数据集

        $this->display("existposts");
    }


    //对于帖子的删除操作
    public function manageposts(){
        $titleid=I('post.titleid');
        $rank=I('post.rank');
        if ($rank==1) {
            $User1 = M("posttitles"); 
            $data1['ifdelete'] = 0;
            $data1['judger']=$_SESSION['master'];
            $where1['id']=$titleid;
            $save1=$User1->where($where1)->save($data1);
            if ($save1) {
                 echo 1;
            }
            else{
                echo 0;
            } 
        }
        else{
            $User1 = M("posttitles"); 
            $where1['id']=$titleid;
            $res1=$User1->where($where1)->delete(); 
            $User2 = M("postcomments"); 
            $where2['titleid']=$titleid;
            $res2=$User2->where($where2)->delete(); 
            if ($res1) {
                echo 1;
            }
            else
                echo 0;
        }
    }




//被用户或管理员删除的帖子的一系列操作*****************************
    public function examineposts(){
        $m = M('posttitles');      
        $where = "ifdelete=0";
        $count = $m->where($where)->count();
        // 实例化分页类
        $p = new Page($count,10);
        //$p = getpage($count,15);
        $list = $m->table('posttitles post,user user')->where('post.userid=user.id and post.ifdelete=0')->field('post.id as id, post.title as title, post.messages as messages,post.postdate as date,post.replycount as comments,post.judger as master,user.username as username,user.userimg as img')->order('post.id desc' )->order('id asc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('count', $count); // 赋值数据集

        $this->display("examineposts");
    }




//现有文件的一系列操作*****************************

    public function existfiles(){
        $m = M('files');      
        $where['ifshow'] = 1;
        $where['ifdelete']=1;
        $count = $m->where($where)->count();
        // 实例化分页类
        $p = new Page($count,10);
        //$p = getpage($count,15);
        $list = $m->field(true)->where($where)->order('id asc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('count', $count); // 赋值数据集


        $this->display("existfiles");
    }

    //文件审核操作

        public function managefiles(){
            $fileid=I('post.fileid');
            $manage=I('post.manage');

            if ($manage==0) {
                $User = M("files"); // 实例化User对象
                $where2['id']=$fileid;

                $list = $User->where($where2)->select();

                unlink("./Public/files/".$list[0]['filesrc']); 
              
                $res=$User->where($where2)->delete(); 
                if ($res) {
                    echo 1;
                }
                else
                    echo 0;
            }
            else if($manage==1){
                $User1 = M("files"); // 实例化User对象
                        // 要修改的数据对象属性赋值
                        $data1['ifshow'] = 1;
                        $data1['master']=$_SESSION['master'];
                        $where1['id']=$fileid;
                        $save1=$User1->where($where1)->save($data1); 
                        if ($save1) {
                            echo 1;
                        }
                        else{
                            echo 0;
                        }
            }
            else{
                $User1 = M("files"); // 实例化User对象
                        // 要修改的数据对象属性赋值
                        $data1['ifshow'] = 0;
                        $data1['master']=$_SESSION['master'];
                        $where1['id']=$fileid;
                        $save1=$User1->where($where1)->save($data1); 
                        if ($save1) {
                            echo 1;
                        }
                        else{
                            echo 0;
                        }
            }
        }


//用户删除的帖子的一系列操作*************************
    public function deletefiles(){
        $where['ifdelete']=0;
        $count=M('files')->where($where)->count();

        $p=new Page($count,10);
        $list=M('files')->where($where)->order('id asc')->limit($p->firstRow,$p->listRows)->select();
        $this->assign("data",$list);
        $this->assign("page",$p->show());


        $this->assign("count",$count);
        $this->display("deletefiles");
    }


    //恢复文件
    public function recoverfiles(){
        $fileid=I('post.fileid');

        $where['id']=$fileid;
        $data['ifdelete']=1;
        $res=M('files')->where($where)->save($data);

        if ($res) {
            echo 1;
        }
        else{
            echo 0;
        }
    }


    //彻底删除文件
    public function throughdeletefiles(){
        $fileid=I('post.fileid');

        $where['id']=$fileid;
        $list=M('files')->where($where)->select();

        unlink("./Public/files/".$list[0]['filesrc']);
        $res=M('files')->where($where)->delete();

        if ($res) {
            echo 1;
        }
        else{
            echo 0;
        }

    }


//未审核文件的一系列操作*****************************

    public function examinefiles(){
        $m = M('files');      
        $where = "ifshow=0";
        $count = $m->where($where)->count();
        // 实例化分页类
        $p = new Page($count,10);
        //$p = getpage($count,15);
        $list = $m->field(true)->where($where)->order('id asc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('count', $count); // 赋值数据集


        $this->display("examinefiles");
    }


//外网投诉建议操作*****************************
    public function outwardadvise(){

        $m = M('advise');      
        $where = "m_type=0";
        $count = $m->where($where)->count();

        $where1['m_type']=0;
        $where1['reply'] = array('exp','is null');
        $count1 = $m->where($where1)->count();
        // 实例化分页类
        $p = new Page($count,5);
        //$p = getpage($count,15);
        $list = $m->field(true)->where($where)->order('id desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('count', $count);
        $this->assign('count1', $count1);

        $this->display("outwardadvise");
    }


            public function deleteadvise(){
                $adviseid=I('post.adviseid');
                $User = M("advise"); // 实例化User对象
                $where['id']=$adviseid;
                $res=$User->where($where)->delete(); // 删除id为5的用户数据
                if ($res) {
                    echo 1;
                }
                else{
                    echo 0;
                }

            }



//内网投诉建议操作*****************************

    public function inwardadvise(){
        $m = M('advise');      
        $where = "m_type=1";
        $count = $m->where($where)->count();

        $where1['m_type']=1;
        $where1['reply'] = array('exp','is null');
        $count1 = $m->where($where1)->count();
        // 实例化分页类
        $p = new Page($count,5);
        //$p = getpage($count,15);
        $list = $m->field(true)->where($where)->order('id desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('count', $count);
        $this->assign('count1', $count1);



        $this->display("inwardadvise");
    }

    public function _empty(){
        echo "您输入的网址有错";
     }


    
}



class Page{
    public $firstRow; // 起始行数
    public $listRows; // 列表每页显示行数
    public $parameter; // 分页跳转时要带的参数
    public $totalRows; // 总行数
    public $totalPages; // 分页总页面数
    public $rollPage   = 11;// 分页栏每页显示的页数
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



