<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user_post</title>
	<link href="/alpha/Public/Outward/user/css/userfiles.css" rel="stylesheet"/>
	<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">
	<link href="/alpha/Public/Common/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background-color: rgba(239,239,239,1);">
	<div id="container">
		<div id="top">
			<p>MY FILES</p>
		</div>
		<div id="content">
			<div id="one">
				<div id="title" class="nav">标题</div>
				<div id="msg" class="nav">内容介绍</div>
				<div id="look" class="nav">下载</div>
				<div id="delete" class="nav">删除</div>
				<div id="time" class="nav">上传时间</div>
			</div>
			<?php if(is_array($data)): foreach($data as $key=>$data): ?><div id="one" class="odd">
				<div id="title"><?php echo ($data["filename"]); ?></div>
				<div id="msg">&nbsp;&nbsp;<?php echo ($data["filedesc"]); ?>&nbsp;&nbsp;</div>
				<div id="look">
					<a target="_blank" href="/alpha/Public/files/<?php echo ($data["filesrc"]); ?>" class="btn btn-success btn-xs">下载</a>
				</div>
				<div id="delete">
					<a class="btn btn-danger btn-xs deletefile" alt="<?php echo ($data["id"]); ?>|<?php echo U('Home/User/deletefiles','','');?>">删除</a>
				</div>
				<div id="time"><?php echo ($data["uploadtime"]); ?></div>
			</div><?php endforeach; endif; ?>
		</div>
	</div>



	<script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
	<script src="/alpha/Public/Common/js/bootstrap.min.js"></script>
	<script src="/alpha/Public/Outward/user/js/userfiles.js"></script>
    
</body>
</html>