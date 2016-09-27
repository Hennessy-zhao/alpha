<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user_post</title>
	<link href="/alpha/Public/Outward/user/css/userpost.css" rel="stylesheet"/>
	<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">
	<link href="/alpha/Public/Common/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background-color: rgba(239,239,239,1);">
	<div id="container">
		<div id="top">
			<p>MY POSTS</p>
		</div>
		<div id="content">
			<div id="one">
				<div id="title" class="nav">标题</div>
				<div id="msg" class="nav">内容摘要</div>
				<div id="look" class="nav">查看</div>
				<div id="reply" class="nav">回复</div>
				<div id="delete" class="nav">删除</div>
				<div id="time" class="nav">发帖时间</div>
			</div>
			<?php if(is_array($data)): foreach($data as $key=>$data): ?><div id="one" class="odd">
				<div id="title"><?php echo ($data["title"]); ?></div>
				<div id="msg">&nbsp;&nbsp;<?php echo ($data["messages"]); ?>&nbsp;&nbsp;</div>
				<div id="look">
					<a href="<?php echo U('Home/Inward/postmessages',array('postid'=>$data['id']));?>" target="_blank" class="btn btn-success btn-xs">查看</a>
				</div>
				<div id="reply"><?php echo ($data["replycount"]); ?></div>
				<div id="delete">
					<a class="btn btn-danger btn-xs deletepost" alt="<?php echo ($data["id"]); ?>|<?php echo U('Home/User/deleteposts','','');?>">删除</a>
				</div>
				<div id="time"><?php echo ($data["postdate"]); ?></div>
			</div><?php endforeach; endif; ?>
		</div>
	</div>



	<script src="/alpha/Public/Common/js/jquery-2.1.4.min.js">    m  </script>
	<script src="/alpha/Public/Common/js/bootstrap.min.js"></script>
	<script src="/alpha/Public/Outward/user/js/userpost.js"></script>
    
</body>
</html>