<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
	<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="/alpha/Public/Common/js/bootstrap.js" ></script>
	<link href="/alpha/Public/Admin/Manage/css/existfiles.css" rel="stylesheet">
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
						<span class="spantitle">已有文件(files)</span><br/><span class="spanvalue"><?php echo ($count); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1" id="desc">
				<div class="row">
					<div class="col-md-12" id="desc-top">
						<p><a href="#" class="mws-i-24 i-list-images" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>已有文件管理说明</p>
					</div>
					<div class="col-md-12" id="desc-main">
						<div class="com-md-12 main">
							<ul>
								<li>现有文件即为已通过审核的可以在前台展现并且被下载的页面</li>
								<li>管理员可以依据情况对过期文件或者后来发现有问题的文件进行删除管理</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-11" id="content">
			<div class="row">
				<div class="col-md-12" id="content-top">
					<p><a href="#" class="mws-i-24 i-user" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>已有文件</p>
				</div>
				<div class="col-md-12" id="content-main">
					<div class="col-md-12 main">
						<table class="mws-table" id="table1">
							<thead>
								<tr>
									<th>文件名</th>
									<th style="width:30%">文件描述</th>
									<th>上传文件者</th>
									<th>审核人</th>
									<th>操作</th>
									<th>上传时间</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($select)): foreach($select as $key=>$data): ?><tr class="rank<?php echo ($data["id"]); ?>">
									<td><?php echo ($data["filename"]); ?></td>
									<td><?php echo ($data["filedesc"]); ?></td>
									<td><?php echo ($data["user"]); ?></td>
									<td><?php echo ($data["master"]); ?></td>
									<td>
										<div class="btn-group">
										   <button type="button" class="btn btn-default btn-sm">审核管理</button>
										   <button type="button" class="btn btn-default dropdown-toggle btn-sm" 
										      data-toggle="dropdown">
										      <span class="caret"></span>
										      <span class="sr-only"></span>
										   </button>
										   <ul class="dropdown-menu" role="menu" alt="<?php echo ($data["id"]); ?>">
										      <li><a href="#" class="managebtn" alt="-1">不在页面中显示</a></li>
										      <li><a href="#" class="managebtn" alt="0">删除</a></li>
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


	<script type="text/javascript">
		$(function(){
			$(".mws-table").find("tr:even").addClass("odd");
			$(".mws-table").find("tr:odd").addClass("even");
		})
	</script>
	<script>
		$(function(){
			$(".managebtn").on("click",function(){
				var manage=$(this).attr("alt");
				var fileid=$(this).parent().parent(".dropdown-menu").attr("alt");

				if (manage==0) alertmessage="确定删除此文件吗";
				else alertmessage="确定此文件不被显示吗（即再次划分为未审核文件）";

				if (confirm(alertmessage)) {
					$.post("<?php echo U('Admin/Manage/managefiles','','');?>",{
					          	fileid : fileid,
					          	manage : manage
					},function(data){
						if (data==1) {
						    $(".rank"+fileid).css("display","none");
						}
						else{
						    alert("系统出现问题");
						}
					})
				};
				
			})
		})
	</script>
	
</body>
</html>