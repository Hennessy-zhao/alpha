<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<script src="/alpha/Public/js/jquery-2.1.4.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="/alpha/Public/Inward/css/index.css">
	<script src="/alpha/Public/js/bootstrap.js" ></script>
	<link href="/alpha/Public/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="row">
		<div class="col-md-10 col-md-offset-1" id="contain">
			<div class="row">
				<div class="col-md-4" id="left">
					<div class="col-md-12" style="padding:5px;">
						<a href="<?php echo U('Home/Main/index','','');?>"><div class="col-md-12" id="outward"><p>外网页</p></div></a>
					</div>
					<div class="col-md-6" style="padding:5px;">
						<a href="<?php echo U('Home/User/index','','');?>">
						<div class="col-md-12" id="user">
							<span class="glyphicon glyphicon-user"></span>
							<br/><br/>个人中心
						</div>
						</a>
					</div>
					<div class="col-md-6" style="padding:5px;">
						<a href="#">
						<div class="col-md-12" id="advise">
							<span class="glyphicon glyphicon-envelope"></span>
							<br/><br/>建议/投诉
						</div>
						</a>
					</div>
					<div class="col-md-12" style="padding:5px;">
						<a href="#"><div class="col-md-12" id="demand"><p>要求/规定</p></div></a>
					</div>
				</div>
				<div class="col-md-8" id="right">
					<a href="<?php echo U('Home/Inward/chat','','');?>"><div class="col-md-12" id="chat"><p>在线聊天室</p></div></a>
					<div class="col-md-6" style="padding-left:0px;">
						<a href="<?php echo U('Home/Inward/posts','','');?>"><div class="col-md-12" id="post"><p>发帖区</p></div></a>
						<a href="#"><div class="col-md-12" id="other">其他（暂不开放）</div></a>
					</div>
					<div class="col-md-6" style="padding-left:0px;padding-right:0px;">
						<a href="<?php echo U('Home/Inward/membercenter','','');?>"><div class="col-md-12" id="member"></div></a>
						<a href="<?php echo U('Home/Inward/files','','');?>"><div class="col-md-12" id="data"><p>学习资料</p></div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>