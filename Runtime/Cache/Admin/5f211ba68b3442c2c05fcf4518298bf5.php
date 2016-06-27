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
</head>
<body>
	<div class="row" style="padding-left:20px;padding-right:20px;">
		<div class="col-md-12" id="topnumber">
			<div class="col-md-3" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/email_edit.png" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">未回复信件</span><br/><span class="spanvalue"><?php echo ($count1); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1" id="top-1">
				<div class="row">
					<div class="col-md-4" id="top-1-left">
						<center><br/><img src="/alpha/Public/Admin/Manage/images/email_link.png" width="60%"></center>
					</div>
					<div class="col-md-6" id="top-1-right">
						<span class="spantitle">投诉/建议信件总数量</span><br/><span class="spanvalue"><?php echo ($count); ?></span>
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
				<div class="col-md-12" id="content-top">
					<p><a href="#" class="mws-i-24 i-mail" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>外网投诉/建议信件</p>
				</div>
				<div class="col-md-12" id="content-main">
					<div class="col-md-12 main">
						<table class="mws-table" id="table1">
							<thead>
								<tr>
									<th>邮箱</th>
									<th>姓名</th>
									<th>电话</th>
									<th style="width:30%">信件内容</th>
									<th>回复内容</th>
									<th>操作</th>
									<th>时间</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($select)): foreach($select as $key=>$data): ?><tr class="delete<?php echo ($data["id"]); ?>">
									<td><?php echo ($data["email"]); ?></td>
									<td><?php echo ($data["username"]); ?></td>
									<td><?php echo ($data["phone"]); ?></td>
									<td><?php echo ($data["message"]); ?></td>
									<td>
										<?php if(($data["reply"] == NULL)): ?><button class="btn btn-primary btn-xs">回复</button>
									    <?php else: ?>
									    	<p><?php echo ($data["reply"]); ?></p>
									    	<button class="btn btn-warning btn-xs">重新回复</button><?php endif; ?>
									</td>
									<td><button class="btn btn-danger btn-xs deltetbtn" alt="<?php echo ($data["id"]); ?>">删除</button></td>
									<td><?php echo ($data["start_time"]); ?></td>
								</tr><?php endforeach; endif; ?>
							</tbody>
						</table>
						<br/><br/><center>

							 <?php echo ($page); ?><center>
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
			$(".deltetbtn").on("click",function(){
				adviseid=$(this).attr("alt");
				if (confirm("确认删除此条信息？")) {
					$.post("<?php echo U('Admin/Manage/deleteadvise','','');?>",{
				          	adviseid : adviseid
					      },function(data){
					        if (data==1) {
					        	$(".delete"+adviseid).css("display","none");
					        }
					        else{
					        	alert("不能删除或系统出现问题");
					        }
					    })
				};
			})
		})
	</script>
</body>
</html>