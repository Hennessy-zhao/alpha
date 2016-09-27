<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/alpha/Public/Admin/Manage/css/deltetfiles.css" rel="stylesheet">
	<link href="/alpha/Public/Admin/Login/css/icons/icons.css"  rel="stylesheet" media="screen" />
</head>
<body>
	<div class="row" style="padding-left:20px;padding-right:20px;">
		<div class="col-md-12" id="topnumber">
			<div class="col-md-3" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/masteruser.jpg" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">用户删除文件(files)</span><br/><span class="spanvalue"><?php echo ($count); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1" id="desc">
				<div class="row">
					<div class="col-md-12" id="desc-top">
						<p><a href="#" class="mws-i-24 i-list-images" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>用户已删除文件管理说明</p>
					</div>
					<div class="col-md-12" id="desc-main">
						<div class="com-md-12 main">
							<ul>
								<li>该处存放的是用户在用户中心自行删除的文件。</li>
								<li>管理员在接到用户的求助需要之后可以在此将被删除的文件进行恢复。</li>
								<li>当数据比较大时，管理员可以清理被删除的无用的文件。</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10" id="content">
			<div class="row">
				<div class="col-md-12" id="content-top">
					<p><a href="#" class="mws-i-24 i-user" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>已删除文件</p>
				</div>
				<div class="col-md-12" id="content-main">
					<div class="col-md-12 main">
						<table class="mws-table" id="table1">
							<thead>
								<tr>
									<th>文件名</th>
									<th style="width:30%">文件描述</th>
									<th>上传文件者</th>
									<th>操作</th>
									<th>上传时间</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($data)): foreach($data as $key=>$data): ?><tr class="rank<?php echo ($data["id"]); ?>">
									<td><?php echo ($data["filename"]); ?></td>
									<td><?php echo ($data["filedesc"]); ?></td>
									<td><?php echo ($data["user"]); ?></td>
									<td>
										<div class="btn-group">
										   <button type="button" class="btn btn-default btn-sm">审核管理</button>
										   <button type="button" class="btn btn-default dropdown-toggle btn-sm" 
										      data-toggle="dropdown">
										      <span class="caret"></span>
										      <span class="sr-only"></span>
										   </button>
										   <ul class="dropdown-menu" role="menu" alt="<?php echo ($data["id"]); ?>">
										      <li><a href="#" class="recoverbtn" alt="<?php echo U('Admin/Manage/recoverfiles','','');?>">恢复文件</a></li>
										      <li><a href="#" class="deltetbtn" alt="<?php echo U('Admin/Manage/throughdeletefiles','','');?>">彻底删除</a></li>
										   </ul>
										</div>
									</td>
									<td><?php echo ($data["uploadtime"]); ?></td>
								</tr><?php endforeach; endif; ?>
							</tbody>
						</table>
						<br/><br/><center> <?php echo ($page); ?><center>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
	<script src="/alpha/Public/Common/js/bootstrap.js" ></script>
	<script src="/alpha/Public/Admin/Manage/js/deletefiles.js"></script>
	

	
</body>
</html>