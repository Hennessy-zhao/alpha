<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/alpha/Public/Admin/Login/css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/alpha/Public/Admin/Login/css/mws.style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/alpha/Public/Admin/Login/css/icons/icons.css" media="screen" />

<link rel="stylesheet" type="text/css" href="/alpha/Public/Admin/Login/css/mws.theme.css" media="screen" />

<!-- JavaScript Plugins -->

<script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
<style type="text/css">
    .smallurl{
        display: none;
    }
</style>

</head>

<body>
>
    <!-- Themer End -->
    

	<!-- Header Wrapper -->
	<div id="mws-header" class="clearfix">
        <h3>计算机系统研发中心管理界面</h3> 
        <p>管理员：<?php echo ($_SESSION['master']); ?>&nbsp;&nbsp;<a href="#" id="signout">退出</a></p>
    </div>
    
    <!-- Main Wrapper -->
    <div id="mws-wrapper">
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
            	<ul>
                	<li class="#"><a href="<?php echo U('Admin/Manage/welcome','','');?>" class="mws-i-24 i-home" target="target1">主页</a></li>
                	<li>
                        <a href="#" class="mws-i-24 i-group" alt="1">成员管理</a>
                        <ul class="smallurl" id="smallurl1">
                            <li><a href="<?php echo U('Admin/Manage/existmemer','','');?>" target="target1">现有成员</a></li>
                            <li><a href="<?php echo U('Admin/Manage/examinememer','','');?>" target="target1">未审核成员</a></li>
                        </ul>
                    </li>
                	<li>
                        <a href="#" class="mws-i-24 i-speech-bubble" alt="2">聊天管理</a>
                        <ul class="smallurl" id="smallurl2">
                            <li><a href="#">聊天记录</a></li>
                            <li><a href="#">成员聊天活跃度</a></li>
                        </ul>
                    </li>
                	<li>
                        <a href="#" class="mws-i-24 i-list" alt="3">帖子管理</a>
                        <ul class="smallurl" id="smallurl3">
                            <li><a href="<?php echo U('Admin/Manage/existposts','','');?>" target="target1">全部帖子</a></li>
                            <li><a href="<?php echo U('Admin/Manage/examineposts','','');?>" target="target1">被删除帖子</a></li>
                        </ul>
                    </li>
                	<li>
                        <a href="#" class="mws-i-24 i-folder" alt="4">文件管理</a>
                        <ul class="smallurl" id="smallurl4">
                            <li><a href="<?php echo U('Admin/Manage/existfiles','','');?>" target="target1">现有文件</a></li>
                            <li><a href="<?php echo U('Admin/Manage/examinefiles','','');?>" target="target1">未审核文件</a></li>
                            <li><a href="<?php echo U('Admin/Manage/deletefiles','','');?>" target="target1">用户删除文件</a></li>
                        </ul>
                    </li>
                	<li>
                    	<a href="#" class="mws-i-24 i-multiple-users" alt="5">成员中心显示</a>
                        <ul class="smallurl" id="smallurl5">
                        	<li><a href="#">已显示成员</a></li>
                        	<li><a href="#">添加成员</a></li>
                        </ul>
                    </li>
                	<li>
                        <a href="#" class="mws-i-24 i-create" alt="6">公告管理</a>
                        <ul class="smallurl" id="smallurl6">
                            <li><a href="#">全部公告</a></li>
                            <li><a href="#">发布新公告</a></li>
                        </ul>
                    </li>
                	<li>
                        <a href="#" class="mws-i-24 i-mail" alt="7">投诉/建议邮件</a>
                        <ul class="smallurl" id="smallurl7">
                            <li><a href="<?php echo U('Admin/Manage/outwardadvise','','');?>" target="target1">外网投诉/建议</a></li>
                            <li><a href="<?php echo U('Admin/Manage/inwardadvise','','');?>" target="target1">内网投诉/建议</a></li>
                        </ul>
                    </li>
                	<li><a href="#" class="mws-i-24 i-blocks-images">其他</a></li>
                	<li><a href="#" class="mws-i-24 i-polaroids">其他</a></li>
                	<li><a href="#" class="mws-i-24 i-alert-2">其他</a></li>
                	<li><a href="#" class="mws-i-24 i-pacman">其他</a></li>
                </ul>
            </div>
            <!-- End Navigation -->
        </div>
        <div id="mws-container" class="clearfix">
            <iframe scrolling="yes" width="100%" height="1450px" frameborder="0" src="welcome.html" name="target1"></iframe>
        </div>
    </div>
    <!-- End Main Wrapper -->

    <script type="text/javascript">
        $(function(){
            $(".mws-i-24").on("click",function(){
                var alt=$(this).attr("alt");
                $(".smallurl").css("display","none");
                $("#smallurl"+alt).css("display","block");
            });
        })


        $(function(){
            $("#signout").click(function(){
                if (confirm("确定退出管理界面？？")) {
                     $.post("<?php echo U('Admin/Manage/signout','','');?>",{
                          
                      },function(data){
                        if (data==1) {
                            window.location.href="<?php echo U('Admin/Index/index','','');?>";
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