<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="/alpha/Public/Outward/Inward/css/postmessages.css" rel="stylesheet"/>
    <link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">
</head>

<body ng-app="myapp">
    <div class="col-md-12" id="top">
        <div class="col-md-10" id="site_title">
            <h1>PC System Discuss Center</h1>
            <br/>
            <p>计算机系统研发中心</p>
        </div>
        <div class="col-md-12" id="top_menu">
            <ul>
                <li><a href="<?php echo U('Home/Inward/index','','');?>">主页</a></li>
                <li><a href="<?php echo U('Home/Inward/chat','','');?>">聊天室</a></li>
                <li><a href="<?php echo U('Home/Inward/posts','','');?>">发帖区</a></li>
                <li><a href="<?php echo U('Home/Inward/files','','');?>">学习文件</a></li>
                <li><a href="<?php echo U('Home/Inward/membercenter','','');?>" >成员中心</a></li>
                <li style="float:right;"><a href="#">建议/投诉</a></li>
                <li style="float:right;"><a href="<?php echo U('Home/Main/index','','');?>">外网页</a></li>
            </ul>       
        </div>
    </div>

    <div class="col-md-12" style="padding:0 2% 0 2%;">
        <div id="content" class="col-md-12">
            <h3 class="title">
                <?php echo ($select1[0]['title']); ?>
            </h3>
            <div class="hr_divider col-md-11"></div>
            <div class="col-md-12" id="firstcomment">
                <div class="col-md-2" id="userimg">
                    
                        <img src="/alpha/Public/userimg/<?php echo ($select1[0]['img']); ?>" alt=""> <p class="username"><?php echo ($select1[0]['username']); ?></p>
                </div>
                <div class="col-md-10" id="usercomment">
                    <div class="col-md-12" id="usermessage">
                    <?php echo ($select1[0]['messages']); ?>
                    </div>
                    <div class="col-md-12" id="others">
                        <span class="time"><?php echo ($select1[0]['date']); ?></span>
                        <a href="#newtext"><span class="firstreply">回复</span></a>
                        
                    </div>
                </div>
                
                
            </div>
            <?php if(is_array($select2)): foreach($select2 as $key=>$data): if(($data["fid"] == 0)): ?><div class="col-md-12" id="firstcomment">
                <div class="col-md-2" id="userimg">
                    
                        <img src="/alpha/Public/userimg/<?php echo ($data['img']); ?>" alt=""> <p class="username"><?php echo ($data['username']); ?></p>
                </div>
                <div class="col-md-10" id="usercomment">
                    <div class="col-md-12" id="usermessage">
                        <?php echo ($data['messages']); ?>
                    </div>
                    <div class="col-md-12" id="others">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        <span class="good"><?php echo ($data['good']); ?></span>
                        <span class="time"><?php echo ($data['date']); ?></span>
                        <span class="lookcomment">收起回复</span>
                        <span class="reply">回复</span>
                        <div class="col-md-10 newcomment">
                            <textarea class="form-control"></textarea>
                            <button class="btn btn-default btn-sm">提交</button>
                        </div>
                        
                    </div>
                    <div class="col-md-11 secondcomment" id="secondcomment">
                        <div class="col-md-12" id="onesecondcomment">
                            <div class="col-md-1" id="secondimg">
                                <img src="/alpha/Public/userimg/userimg.jpg" alt="">
                            </div>
                            <div class="col-md-10" id="secondmessage">
                                <p class="message"><span class="username">赵益石</span><span class="replys">回复</span><span class="username">Hennessy-zhao&nbsp;:</span>爱上对方过后就哭了自行车把你们千万儿童与欧普千万儿童与欧普自行车被你骂啥地方规划局可领取儿童</p>
                            </div>
                            <div class="col-md-10" id="secondother">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                <span class="good">356</span>
                                <span class="time">2016-3-4</span>
                                <span class="reply">回复</span>
                                <div class="col-md-11 newcomment">
                                    <textarea class="form-control"></textarea>
                                    <button class="btn btn-default btn-sm">提交</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" id="onesecondcomment">
                            <div class="col-md-1" id="secondimg">
                                <img src="/alpha/Public/userimg/userimg.jpg" alt="">
                            </div>
                            <div class="col-md-10" id="secondmessage">
                                <p class="message"><span class="username">赵益石</span><span class="replys">回复</span><span class="username">Hennessy-zhao&nbsp;:</span>爱上对方过后就哭了自行车把你们千万儿童与欧普千万儿童与欧普自行车被你骂啥地方规划局可领取儿童</p>
                            </div>
                            <div class="col-md-10" id="secondother">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                <span class="good">356</span>
                                <span class="time">2016-3-4</span>
                                <span class="reply">回复</span>
                                <div class="col-md-11 newcomment">
                                    <textarea class="form-control"></textarea>
                                    <button class="btn btn-default btn-sm">提交</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div><?php endif; endforeach; endif; ?>
           <div class="col-md-10" id="newfirstcomment">
                <h3>发表评论</h3>
                <form action="<?php echo U('Home/Inward/addnewcomment',array('postid'=>$select1[0]['id'],'userid'=>$select1[0]['userid']));?>" name="myForm" method="post">
                   <textarea id="newtext" name="newtext" class="form-control" required="true" rows="5" placeholder="我想说......"></textarea>
                   <h4>评论者：&nbsp;&nbsp;<?php echo ($_SESSION['user']); ?></h4>
                   <button class="btn">发表评论</button>
               </form>
           </div>
        </div>
    </div>
    
    <div id="footer" class="col-md-12">
        
             版权信息
             
    </div>


 <script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
<script src="/alpha/Public/Common/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>


<script src="/alpha/Public/Common/js/angular.min.js"></script>
<script>
  angular.module("myapp",[])
  .controller("firstController",['$scope',function($scope){
     
  }])
</script>

<script>
    //回复框的出现和隐藏
    $(function(){
        $(".reply").on("click",function(){
            $(this).siblings(".newcomment").toggle()
        })
    })

    //评论的出现和隐藏
    $(function(){
        $(".lookcomment").on("click",function(){
            $(this).parent().siblings(".secondcomment").toggle();

            if ($(this).text()=="收起回复") {
                $(this).text("查看回复")
            }
            else{
                $(this).text("收起回复")

            }
        })
    })
</script>
</body>
</html>