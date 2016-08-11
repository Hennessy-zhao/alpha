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
						<span class="spantitle">已有帖子(posts)</span><br/><span class="spanvalue"><?php echo ($count); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1" id="desc">
				<div class="row">
					<div class="col-md-12" id="desc-top">
						<p><a href="#" class="mws-i-24 i-list-images" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>已有帖子管理说明</p>
					</div>
					<div class="col-md-12" id="desc-main">
						<div class="com-md-12 main">
							<ul>
								<li>现有帖子即为在前台显示的帖子</li>
								<li>管理员可以依据情况对过期帖子或者后来发现有问题的帖子进行删除管理，帖子被删除后不会在前台页面中显示，但是不会从数据库中消失，如果管理员想从数据库中彻底删除这条数据，需要在左侧的被删除帖子中继续进行删除操作。</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-11" id="content">
			<div class="row">
				<div class="col-md-12" id="content-top">
					<p><a href="#" class="mws-i-24 i-user" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>已有帖子</p>
				</div>
				<div class="col-md-12" id="content-main">
					<div class="col-md-12 main">
						<table class="mws-table" id="table1">
							<thead>
								<tr>
									<th>帖子名</th>
									<th style="width:30%">首贴内容</th>
									<th>发帖者</th>
									<th>操作</th>
									<th>发帖时间</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($select)): foreach($select as $key=>$data): ?><tr class="rank<?php echo ($data["id"]); ?>">
									<td><?php echo ($data["title"]); ?></td>
									<td><?php echo ($data["messages"]); ?></td>
									<td><?php echo ($data["username"]); ?></td>
									<td>
										<div class="btn-group">
										   <button type="button" class="btn btn-default btn-sm">审核管理</button>
										   <button type="button" class="btn btn-default dropdown-toggle btn-sm" 
										      data-toggle="dropdown">
										      <span class="caret"></span>
										      <span class="sr-only"></span>
										   </button>
										   <ul class="dropdown-menu" role="menu">
										   	  <li><a href="<?php echo U('Home/Inward/postmessages',array('postid'=>$data['id']));?>" target="_blank" >查看该贴</a></li>
										      <li><a href="#" class="managebtn" alt="<?php echo ($data["id"]); ?>">删除该贴(数据库仍存)</a></li>
										   </ul>
										</div>
									</td>
									<td><?php echo ($data["date"]); ?></td>
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
				titleid=$(this).attr("alt");

				if (confirm("确定将本贴从前台页面移除吗？（虽然数据库中仍保存，但是不可以在前台再恢复）")) {
					$.post("<?php echo U('Admin/Manage/manageposts','','');?>",{
	                    titleid : titleid,
	                    rank : 1
	                	},function(data){
	                    	if (data==1) {
	                        	$(".rank"+titleid).css("display","none");
	                    	}
	                    	else{
	                        	alert("对不起，服务器正忙或出现错误");
	                    	}
	            	})
				};
				

			})
		})
	</script>
	
</body>
</html>