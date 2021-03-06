<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>users</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/alpha/Public/Admin/User/css/user.css" rel="stylesheet">
	<link href="/alpha/Public/Admin/Login/css/icons/icons.css" media="screen" rel="stylesheet" />
</head>
<body>
	<div class="row" style="padding-left:20px;padding-right:20px;">
		<div class="col-md-12" id="topnumber">
			<div class="col-md-3" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/User/images/masteruser.jpg" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">管理员(masters)</span><br/><span class="spanvalue"><?php echo ($masternum); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1" id="top-2">
				<div class="row">
					<div class="col-md-4" id="top-2-left">
						<center><br/><img src="/alpha/Public/Admin/User/images/normaluser.jpg" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-2-right">
						<span class="spantitle">普通成员(members)</span><br/><span class="spanvalue"><?php echo ($membernum); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6" id="desc">
			<div class="row">
				<div class="col-md-12" id="desc-top">
					<p><a href="#" class="mws-i-24 i-list-images" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>现有成员管理说明</p>
				</div>
				<div class="col-md-12" id="desc-main">
					<div class="com-md-12 main">
						<ul>
							<li>成员按照级别划分为：5级(主席)；4级(管理员)；3级(社团学长)；2级(大二同学)；1级(大一同学)；0级(提交加入社团申请但未批准)。-1级为禁言。其中，主席一名，管理员若干。</li>
							<li>仅主席和管理员可以进入管理页面对人员进行操作，在管理页面，主席拥有对所有成员的管理权，管理员不可以对主席进行管理，也不可以彼此互相更改权限。</li>
							<li>以下列表将显示所有已通过申请的成员的信息，可以进行操作。</li>
							<li>点击不良记录在下方则会弹出该成员被举报和禁言的不良记录。</li>
							<li>通过下表的管理下拉按钮可以进行成员管理操作。</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10" id="content">
			<div class="row">
				<div class="col-md-12" id="content-top">
					<p><a href="#" class="mws-i-24 i-user" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>现有成员</p>
				</div>
				<div class="col-md-12" id="content-main">
					<div class="col-md-12 main">
						<table class="mws-table">
							<thead>
								<tr>
									<th>用户名</th>
									<th>姓名</th>
									<th>级别</th>
									<th>审核人</th>
									<th>不良记录</th>
									<th>管理</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($select)): foreach($select as $key=>$data): ?><tr class="delete<?php echo ($data["id"]); ?>">
									<td><?php echo ($data["username"]); ?></td>
									<td><?php echo ($data["truename"]); ?></td>
									<td class="rank<?php echo ($data["id"]); ?>">
										<?php echo ($data["rank"]); ?>
										<?php if(($data["rank"] == 5)): ?>（主席）
										<?php elseif($data["rank"] == 4): ?>（管理员）
										<?php elseif($data["rank"] == 3): ?>（学长）
										<?php elseif($data["rank"] == 2): ?>（大二成员）
										<?php elseif($data["rank"] == 1): ?>（大一成员）
										<?php elseif($data["rank"] == -1): ?>（禁言）<?php endif; ?>
									</td>
									<td class="judger<?php echo ($data["id"]); ?>"><?php echo ($data["judger"]); ?></td>
									<td><button class="btn btn-sm btn-success">查看</button></td>
									<td>
										<div class="btn-group">
										   <button type="button" class="btn btn-default btn-sm">管理</button>
										   <button type="button" class="btn btn-default dropdown-toggle btn-sm" 
										      data-toggle="dropdown">
										      <span class="caret"></span>
										      <span class="sr-only"></span>
										   </button>
										   <ul class="dropdown-menu" role="menu" alt="<?php echo ($data["id"]); ?>|<?php echo U('Admin/User/manage','','');?>">
										      <li><a href="#">查看具体信息(暂无功能)</a></li>
										      <li><a href="#" class="managebtn" alt="5">设置为主席</a></li>
										      <li><a href="#" class="managebtn" alt="4">设置为管理员</a></li>
										      <li><a href="#" class="managebtn" alt="3">设置为学长级别</a></li>
										      <li><a href="#" class="managebtn" alt="2">设置为大二级别</a></li>
										      <li><a href="#" class="managebtn" alt="1">设置为大一级别</a></li>
										      <li><a href="#" class="managebtn" alt="6">禁言</a></li>
										      <li><a href="#" class="managebtn" alt="7">删除用户</a></li>
										   </ul>
										</div>
									</td>
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
	<script src="/alpha/Public/Admin/User/js/user.js"></script>

	
</body>
</html>