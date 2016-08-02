<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<script src="/alpha/Public/Common/js/jquery-2.1.4.min.js" ></script>
	<link href="/alpha/Public/Outward/Inward/css/index.css" rel="stylesheet" >
	<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">
	<script src="/alpha/Public/Common/js/bootstrap.js" ></script>

</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div class="dropdown">
			   <p class="btn dropdown-toggle" id="dropdownMenu1" 
			      data-toggle="dropdown">
			      <?php echo ($_SESSION['user']); ?>
			      <span class="caret"></span>
			   </p>
			   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			      <li role="presentation">
			         <a role="menuitem" tabindex="-1" href="<?php echo U('Home/User/index','','');?>">个人中心</a>
			      </li>
			      <li role="presentation">
			         <a id="signout" role="menuitem" tabindex="-1" href="#">退出</a>
			      </li>
			   </ul>
			</div>
		</div>
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



	<script>
		$(function(){
            $("#signout").click(function(){
                if (confirm("确定退出管理界面？？")) {
                     $.post("<?php echo U('Home/Inward/signout','','');?>",{
                          
                      },function(data){
                        if (data==1) {
                            window.location.href="<?php echo U('Home/Main/index','','');?>";
                        }
                        else{
                            alert("服务器正忙");
                        }
                    })
                };
                return false;
            })
        })
	</script>
</body>
</html>