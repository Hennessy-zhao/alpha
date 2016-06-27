<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script src="/alpha/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/alpha/Public/css/bootstrap.min.css"/>
	<script src="/alpha/Public/js/bootstrap.js" ></script>
	<link rel="stylesheet" type="text/css" href="/alpha/Public/Admin/Manage/css/examinemember.css">
	<link rel="stylesheet" type="text/css" href="/alpha/Public/Admin/Login/css/icons/icons.css" media="screen" />
	<style>
		li{
			font-size: 1.1em;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="row" style="padding-left:20px;padding-right:20px;">
		<div class="col-md-12" id="topnumber">
			<div class="col-md-3" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/group.png" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">成员数量</span><br/><span class="spanvalue">11</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/note.png" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">帖子数量</span><br/><span class="spanvalue">11</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/network_folder.png" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">文件数量</span><br/><span class="spanvalue">11</span>
					</div>
				</div>
			</div>
			<div class="col-md-12" style="height:20px"></div>
			<div class="col-md-3" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/group_gear.png" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">显示成员数量</span><br/><span class="spanvalue">11</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/script.png" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">公告数量</span><br/><span class="spanvalue">11</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/email.png" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">邮件数量</span><br/><span class="spanvalue">11</span>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-6 col-md-offset-1" id="desc">
				<div class="row">
					<div class="col-md-12" id="desc-top">
						<p><a href="#" class="mws-i-24 i-list-images" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>对于外网审核信件说明</p>
					</div>
					<div class="col-md-12" id="desc-main">
						<div class="com-md-12 main">
							<ul>
								<li>由主席和管理员对未进行审核的同学进行审核管理。</li>
								<li>尽量在一周内进行审核。</li>
								<li>审核结束后会通过邮件方式自动通知成员。</li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<div class="col-md-11" id="content">
			<div class="row">
				<div class="col-md-10" id="content-top">
					<p><a href="#" class="mws-i-24 i-clipboard" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>计算机系统研发中心后台管理中心说明</p>
				</div>
				<div class="col-md-10" id="content-main">
					<div class="col-md-12 main">
						<ul>
							<li>计算机系统研发中心后台管理系统仅主席和管理员可以进入操作</li>
							<li>成员之间操作均有记录，除主席定期清理记录以外任何人不得删除操作记录</li>
							<li>管理员不可以根据个人好恶在管理系统内擅用私权，违者依据事件恶劣程度封号</li>
							<li>新成员审核必须保证人员的正确性，不可放过不法者进入内网站</li>
							<li>其他规定欢迎其他管理员添加</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		$(function(){
			$(".mws-table").find("tr:even").addClass("odd");
			$(".mws-table").find("tr:odd").addClass("even");
		})
	</script>
</body>
</html>