<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/alpha/Public/Admin/User/css/examine.css" rel="stylesheet">
	<link href="/alpha/Public/Admin/Login/css/icons/icons.css"  rel="stylesheet" media="screen" />
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
						<span class="spantitle">未审核成员(masters)</span><br/><span class="spanvalue"><?php echo ($count); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1" id="desc">
				<div class="row">
					<div class="col-md-12" id="desc-top">
						<p><a href="#" class="mws-i-24 i-list-images" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>未审核成员管理说明</p>
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
			</div>
		</div>
		<div class="col-md-10" id="content">
			<div class="row">
				<div class="col-md-12" id="content-top">
					<p><a href="#" class="mws-i-24 i-user" alt="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>未审核成员</p>
				</div>
				<div class="col-md-12" id="content-main">
					<div class="col-md-12 main">
						<table class="mws-table" id="table1">
							<thead>
								<tr>
									<th>用户名</th>
									<th>姓名</th>
									<th>邮箱</th>
									<th>入学年份</th>
									<th>操作</th>
									<th>申请时间</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($select)): foreach($select as $key=>$data): ?><tr class="rank<?php echo ($data["id"]); ?>">
									<td><?php echo ($data["username"]); ?></td>
									<td><?php echo ($data["truename"]); ?></td>
									<td><?php echo ($data["email"]); ?></td>
									<td><?php echo ($data["start_year"]); ?></td>
									<td>
										<div class="btn-group">
										   <button type="button" class="btn btn-default btn-sm">审核管理</button>
										   <button type="button" class="btn btn-default dropdown-toggle btn-sm" 
										      data-toggle="dropdown">
										      <span class="caret"></span>
										      <span class="sr-only"></span>
										   </button>
										   <ul class="dropdown-menu" role="menu" alt="<?php echo ($data["id"]); ?>|<?php echo U('Admin/User/manage','','');?>">
										      <li><a href="#" class="managebtn" alt="4">设置为管理员</a></li>
										      <li><a href="#" class="managebtn" alt="3">设置为学长级别</a></li>
										      <li><a href="#" class="managebtn" alt="2">设置为大二级别</a></li>
										      <li><a href="#" class="managebtn" alt="1">设置为大一级别</a></li>
										      <li><a href="#" class="managebtn" alt="5">删除用户</a></li>
										   </ul>
										</div>
									</td>
									<td><?php echo ($data["start_time"]); ?></td>
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

	<script src="/alpha/Public/Admin/User/js/examine.js"></script>

	
	<script type="text/javascript">
		$(function(){
			$(".managebtn").on("click",function(){
				var manage=$(this).attr("alt");
				var parent=$(this).parent().parent(".dropdown-menu").attr("alt");
				var managearr=new Array();
				managearr[4]="管理员";
				managearr[3]="学长";
				managearr[2]="大二成员";
				managearr[1]="大一成员";
				managearr[0]="删除";
				if (manage>0) {
					if(confirm("确认将成员设置为"+managearr[manage]+"吗？")){
						$.post("<?php echo U('Admin/Manage/managerank','','');?>",{
				          	userid : parent,
				          	manage : manage
					      },function(data){
					        if (data==1) {
					        	$(".rank"+parent).css("display","none");
					        }
					        else{
					        	alert("不能重复设置或系统出现问题");
					        }
					    })
					}
				}
				else
				{
					if(confirm("确认删除该成员吗？")){
						$.post("<?php echo U('Admin/Manage/deletemember','','');?>",{
				          	userid : parent,
					      },function(data){
					        if (data==1) {
					        	$(".rank"+parent).css("display","none");
					        }
					        else if (data==2) {
					        	alert("对不起，您不能删除级别比您高的或者和您同一级别的成员");
					        }
					        else{
					        	alert("不能重复设置或系统出现问题");
					        }
					    })
					}
				}
			})
		})
	</script>
</body>
</html>