<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="/alpha/Public/Outward/Inward/css/masterplate.css" rel="stylesheet"/>
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
                <li><a href="#" class="current">学习文件</a></li>
                <li><a href="<?php echo U('Home/Inward/membercenter','','');?>" >成员中心</a></li>
                <li style="float:right;"><a href="#">建议/投诉</a></li>
                <li style="float:right;"><a href="<?php echo U('Home/Main/index','','');?>">外网页</a></li>
            </ul>    	
		</div>
	</div>

	<div class="col-md-12" style="padding:0 2% 0 2%;">
        <div id="content" class="col-md-12">
        	
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
</body>
</html>