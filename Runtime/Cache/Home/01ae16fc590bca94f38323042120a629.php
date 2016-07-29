<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Visual Admin Dashboard - Home</title>
<link href="/alpha/Public/Outward/user/css/font-awesome.min.css" rel="stylesheet">
<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">
<link href="/alpha/Public/Outward/user/css/templatemo-style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <h1>Personal center </h1>
        </header>
        <div class="profile-photo-container">
          <img src="/alpha/Public/Outward/user/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="#" class="active"><i class="fa fa-user fa-fw"></i>我的主页</a></li>
            <li><a href="#"><i class="fa fa-tags fa-fw"></i>个人信息</a></li>
            <li><a href="#"><i class="fa fa-file fa-fw"></i>我的帖子</a></li>
            <li><a href="#"><i class="fa fa-folder fa-fw"></i>我的文件</a></li>
            <li><a href="#"><i class="fa fa-envelope fa-fw"></i>我的邮件</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="<?php echo U('Home/Inward/index','','');?>">主页</a></li>
                <li><a href="<?php echo U('Home/Inward/chat','','');?>">聊天室</a></li>
                <li><a href="<?php echo U('Home/Inward/posts','','');?>">发帖区</a></li>
                <li><a href="<?php echo U('Home/Inward/files','','');?>">文件</a></li>
                <li><a href="<?php echo U('Home/Inward/membercenter','','');?>">成员</a></li>
                <li><a href="<?php echo U('Home/Main/index','','');?>">外网</a></li>
                <li><a href="#">退出</a></li>
                
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container" style="height:1000px">
          
                  
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>      <!-- jQuery -->
   

  </body>
</html>