<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="/alpha/Public/Outward/Inward/css/post.css" rel="stylesheet"/>
    <link href="/alpha/Public/Outward/Inward/css/timeblogstyle.css" rel="stylesheet">
    <link href="/alpha/Public/Outward/Inward/css/animation.css" rel="stylesheet">
    <link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="/alpha/Public/Common/js/jquery.js"></script>
    <script type="text/javascript" src="/alpha/Public/Outward/Inward/js/js.js"></script>
</head>
<body ng-app="myapp">
    <div class="dropdown">
               <p class="btn dropdown-toggle" id="dropdownMenu1" 
                  data-toggle="dropdown">
                  <?php echo ($_SESSION['user']); ?>
                  <span class="caret"></span>
               </p>
               <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                  <li role="presentation">
                     <a role="menuitem" tabindex="-1" href="<?php echo U('Home/User/index','','');?>">个人中心</a>
                  </li>
                  <li role="presentation">
                     <a id="signout" role="menuitem" tabindex="-1" href="#">退出</a>
                  </li>
               </ul>
    </div>
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
                <li><a href="#" class="current">发帖区</a></li>
                <li><a href="<?php echo U('Home/Inward/files','','');?>">学习文件</a></li>
                <li><a href="<?php echo U('Home/Inward/membercenter','','');?>">成员中心</a></li>
                <li style="float:right;"><a href="#">建议/投诉</a></li>
                <li style="float:right;"><a href="<?php echo U('Home/Main/index','','');?>">外网页</a></li>
            </ul>       
        </div>
    </div>
    <div class="col-md-12" id="mainbody">
        <div class="info col-md-12">
                <figure class="col-md-9">
                    <img src="/alpha/Public/Outward/Inward/images/art2.jpg">
                    <figcaption>
                        <strong>只要愿意学习&nbsp;&nbsp;就一定能学会</strong>
                        计算机专业是比较枯燥困难的一个专业，很多人望而却步，但是社团中的我们一直相信，只要愿意学习，用心去体悟，就一定可以学会、学好。本网站为社团内部成员提供一个互相交流的机会，彼此互相进步，克服困难。
                    </figcaption>
                </figure>
                <div class="card col-md-3">
                     <object width="100%" height="100%"  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553544800">
                        <param value="flash233.swf" name="movie">
                        <param value="high" name="quality">
                        <param value="transparent" name="wmode">
                        <embed width="100%" height="95%" wmode="transparent" type="application/x-shockwave-flash"  quality="high" src="/alpha/Public/Outward/Inward/flash/flash233.swf">
                    </object>
                </div>
        </div>


        <!--博客的列表开始-->
            <div class="blogs col-md-12">
                <ul class="bloglist col-md-9">
                    <?php if(is_array($select)): foreach($select as $key=>$data): ?><li class="col-md-12">
                        <div class="row_box col-md-12">
                            <div class="ti"></div><!--三角形-->
                            <div class="ci"></div><!--圆形-->
                            <h2 class="title"><a href="<?php echo U('Home/Inward/postmessages',array('postid'=>$data['id']));?>"><?php echo ($data["title"]); ?></a></h2>
                            <ul class="textinfo">
                                <div style="float:left">
                                    <img src="/alpha/Public/userimg/<?php echo ($data["img"]); ?>">
                                    <p class="p1"><?php echo ($data["username"]); ?></p>
                                </div>
                                <p class="p2"><?php echo ($data["messages"]); ?></p>
                            </ul>
                            <ul class="details col-md-12">
                                <li class="comments"><?php echo ($data["comments"]); ?></li>
                                <li class="icon_time"><?php echo ($data["date"]); ?></li>
                            </ul>
                        </div>
                    </li><?php endforeach; endif; ?>
                    <li class="col-md-12">
                        <?php echo ($page); ?>
                    </li>
                        
                </ul>
            
            <!--博客列表部分结束-->
            
            
            <!--右半部分开始-->
                <aside class="col-md-3">
                    <div class="masters">
                        <h3>
                            管理员
                        </h3>
                        <p>Wugao</p>
                        <p>Hennessy-zhao</p>
                    </div>
                    <div class="rules">
                         <h3>
                            发帖规定
                        </h3>
                        <p>不得发和学习无关内容（灌水请到聊天区）</p>
                        <p>语言礼貌，不可以辱骂他人 </p>
                        <p>对于一些废贴管理员会依据帖子情况及时清理</p>
                    </div>
                </aside>
            </div>
            <!--blogs结束-->

    </div>
    <div class="col-md-10 col-md-offset-1" id="newpost" ng-controller="firstController">
            <form action="<?php echo U('Home/Inward/addnewpost');?>" name="myForm" method="post">
            <div class="form-group">
                <span class="posttitle">标题</span><input name="posttitle" autocomplete="off" type="text" class="form-control"
                 placeholder="请输入新帖标题(字数为1-30)" style="width:80%;background-color:whitesmoke;" ng-required="true" minlength="1" maxlength="30">
            </div>
            <br>
            <div class="form-group">
                <textarea name="messages" autocomplete="off" class="form-control" rows="3" style="width:90%;background-color:whitesmoke;" placeholder="请输入内容（字数在1-300）" ng-required="true" minlength="1" maxlength="300"></textarea>
            </div>   
            <br>
            <input type="submit" class="btn btn-success" style="padding-left:20px;padding-right:20px;" value="发  帖" ng-disabled="myForm.$invalid"> 
            </form>
    </div>
    <div id="footer" class="col-md-12">
        
             版权信息
             
    </div>

<script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
<script src="/alpha/Public/Common/js/bootstrap.min.js"></script>
<script src="/alpha/Public/Common/js/angular.min.js"></script>
<script>
  angular.module("myapp",[])
  .controller("firstController",['$scope',function($scope){
     
  }])
</script>
<script>
     //退出
    $(function(){
            $("#signout").click(function(){
                if (confirm("确定退出管理界面？？")) {
                     $.post("<?php echo U('Home/Inward/signout','','');?>",{
                          
                      },function(data){
                        if (data==1) {
                            window.location.href="<?php echo U('Home/Main/index','','');?>";
                        }
                        else{
                            alert("服务器正忙");
                        }
                    })
                };
                return false;
            })
        })
</script>
</body>
</html>