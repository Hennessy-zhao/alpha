<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script src="/alpha/Public/js/jquery-2.1.4.min.js" ></script>
	<link  rel="stylesheet" href="/alpha/Public/css/bootstrap.min.css"/>
	<script src="/alpha/Public/js/bootstrap.js" ></script>
	<style type="text/css">
		body{
			background-color: rgb(239,239,239);
		}

		#logo{
			height: 70px;
		}

				#biglogo{
					width: 350px;
					height: 100px;
					margin-top: 50px;
				}

		#content{
			background-color: white;
			border: 1px solid rgba(0,0,0,0.2);
			border-radius: 5px;
			box-shadow: 3px 3px 5px 4px rgba(0,0,0,0.1);
			margin-bottom: 50px;
			padding-left:30px;
			padding-right:30px;
			padding-bottom: 20px;
		}

				#title{
					border-bottom: 2px dotted rgba(0,0,0,0.3);
					font-family: 微软雅黑;
					font-weight: bold;
					font-size: 1.2em;
					padding-top: 20px;
					padding-bottom: 0px;
					padding-left: 0px;
					color: rgba(51, 51, 51, 0.93);
					margin-bottom: 20px;
				}


		#message{
			padding: 0px;
			font-family: 微软雅黑;
			font-size: 1.15em;
			font-weight: bold;
			color: #333;

		}

	#footer{
		background-color: white;
		border-top: 1px solid rgba(0,0,0,0.2);
		font-family: 微软雅黑;
		font-size: 0.9em;
		text-align: center;
		padding-top: 20px;
		padding-bottom: 10px;
	}

				#form-left{
					text-align: right;
					padding-right:20px; 
					padding-top:5px;
					padding-bottom:5px;
				}

				#form-middle{
					text-align: left;
				}

				#form-right{
					padding-left: 20px;
					padding-top:5px;
					padding-bottom:5px;
				}

	a.a1{
		font-size: 0.95em;
		font-weight: normal;
	}

	#p_user{
		color: red;
		font-size: 0.9em;
	}

	#p_num{
		color: red;
		font-size: 0.9em;
	}

	#p_password{
		color: red;
		font-size: 0.9em;
	}

	#p_password2{
		color: red;
		font-size: 0.9em;
	}

	#p_email{
		color: red;
		font-size: 0.9em;
	}

	p.attention{
		margin-top: 50px;
		color: red;
		font-weight: 微软雅黑;
		padding-left: 20px;
		padding-top: 10px;
		font-size: 1.1em;
	}

	select{
		font-weight: normal;
		font-size: 0.8em;

	}

	input{
		font-weight: normal;
	}
	 	
	</style>
	
</head>
<body>
	<div class="row" style="padding:0px;">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2" id="logo">
				<h3>计算机系统研发中心会员注册</h3>
				
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-2" style="padding:0px;">
				<p class="attention">*注意：进入计算机系统研发中心内网需进行用户实名注册，本网站仅接受社团内部成员注册，信息提交后，将进行审核，在一周内通过邮箱方式进行回复。</p>
			</div>
			<div class="col-md-8"style="padding-left:30px;padding-right:30px;" style="padding:0px;">
				<div class="row">
					<div class="col-md-12" id="content">
						<div class="column">
							<div class="col-md-12" id="title">
								<p>欢迎注册计算机系统研发中心会员，请填写以下内容，其中标注*为必填。<span style="float:right;"><a href="<?php echo U('Home/Main/index','','');?>" class="a1">回主页</a></span></p>
							</div>
							<div class="col-md-12" id="message">
								<form autocomplete="off" id="form1" action="<?php echo U('Home/Index/doregister','','');?>" method="post">
									<div class="row">
										<div class="col-md-3" id="form-left">
											*&nbsp;用&nbsp;户&nbsp;名&nbsp;:
										</div>
										<div class="col-md-5" id="form-middle">
											<div class="form-group">
												<input type="text" id="username" name="username" class="form-control" placeholder="请输入用户名">
											</div>
										</div>
										<div class="col-md-4" id="form-right">
											<p id="p_user"></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" id="form-left">
											*&nbsp;姓&nbsp;名&nbsp;:
										</div>
										<div class="col-md-5" id="form-middle">
											<div class="form-group">
												<input type="text" id="username" name="username" class="form-control" placeholder="请输入真实姓名">
											</div>
										</div>
										<div class="col-md-4" id="form-right">
											<p id="p_user"></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" id="form-left">
											*&nbsp;密&nbsp;码&nbsp;:
										</div>
										<div class="col-md-5" id="form-middle">
											<div class="form-group">
												<input type="password" id="password" name="password" class="form-control" placeholder="请输入密码">
											</div>
										</div>
										<div class="col-md-4" id="form-right">
											<p id="p_password"></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" id="form-left">
											*&nbsp;重&nbsp;复&nbsp;密&nbsp;码&nbsp;:
										</div>
										<div class="col-md-5" id="form-middle">
											<div class="form-group">
												<input type="password" id="password2" name="password2" class="form-control" placeholder="请再次输入密码">
											</div>
										</div>
										<div class="col-md-4" id="form-right">
											<p id="p_password2"></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" id="form-left">
											*&nbsp;邮&nbsp;箱&nbsp;:
										</div>
										<div class="col-md-5" id="form-middle">
											<div class="form-group">
												<input type="text" id="password2" name="password2" class="form-control" placeholder="请输入邮箱">
											</div>
										</div>
										<div class="col-md-4" id="form-right">
											<p id="p_identity"></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" id="form-left">
											&nbsp;联&nbsp;系&nbsp;电&nbsp;话&nbsp;:
										</div>
										<div class="col-md-5" id="form-middle">
											<div class="form-group">
												<input type="text" name="phone" class="form-control" placeholder="请输入联系电话">
											</div>
										</div>
										<div class="col-md-4" id="form-right">
											
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" id="form-left">
											&nbsp;性&nbsp;别&nbsp;:
										</div>
										<div class="col-md-5" id="form-middle">
											<div class="form-group">
												<select name="sex">
													<option value="0">--请选择--</option>
													<option value="男">男</option>
													<option value="女">女</option>
												</select>
											</div>
										</div>
										<div class="col-md-4" id="form-right">
											
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" id="form-left">
											&nbsp;入&nbsp;学&nbsp;年&nbsp;份&nbsp;:
										</div>
										<div class="col-md-5" id="form-middle">
											<div class="form-group">
												<select>
													<option value="0">--请选择入学年份--</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
												</select>
											</div>
										</div>
										<div class="col-md-4" id="form-right">
											
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" id="form-left">
											&nbsp;自&nbsp;我&nbsp;介&nbsp;绍&nbsp;:
										</div>
										<div class="col-md-8" id="form-middle">
											<div class="form-group">
												<textarea class="form-control" rows="5"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" style="margin-top:20px;">
											<center>
												<input type="reset" class="btn btn-default">&nbsp;&nbsp;
												<input type="submit" class="btn btn-success" value="注册">
											</center>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12" id="footer">
			<p> 版权所有：江苏师范大学计算机系统研发中心&nbsp;&nbsp;&nbsp;2016-2020</p>
			<!-- <p> 地址：江苏省徐州市泉山区江苏师范大学二十一世纪大楼606&nbsp;&nbsp;&nbsp;</p> -->
		</div>
	</div>

	 <script type="text/javascript">
	// 	$(function(){
	// 		$("#usernum").blur(function(){
 //    			$.post("<?php echo U('Home/Index/repeatnum','','');?>",{
	// 			          usernum : $("#usernum").val()
	// 			      },function(data){
	// 			        if (data==1) {
				           
	// 			            $("#p_num").text("");
	// 			        }
	// 			        else if(data==2){
	// 			            $("#p_num").text("该学号、工号已被注册");
	// 			        }
	// 			        else
	// 			        {
	// 			          	$("#p_num").text("系统异常，请稍后再试");
	// 			        }
	// 			      })

 //  			});

 //  			$("#password2").blur(function(){
	// 		 	var password1 = $("#password").val();
	// 		 	var password2 = $("#password2").val();
 //    			if (password1!=password2)
 //    			{
 //    				$("#p_password2").text("*两次输入密码不一致！！");
 //    			}
 //    			else
 //    			{
 //    				$("#p_password2").text("");
 //    			}
 //  			});



 //  			$("#form1").submit(function(){
 //  				var user = $("#username").val();
 //  				var user = $("#usernum").val();
 //  				var password = $("#password").val();
 //  				var password2 = $("#password2").val();
 //  				var identity = $("#identity").val();
 //  				if (user!=''&&password!=''&&password2!=''&&identity!='0') 
 //  				{
 //  					var puser= $("#p_user").text();
 //  					var pnum=$("#p_num").text();
	//   				var ppassword= $("#p_password").text();
	//   				var ppassword2= $("#p_password2").text();
	//   				if (puser==''&&ppassword==''&&ppassword2=='') 
	//   				{
	//   					return true;
	//   				}
	//   				else
	//   				{
	//   					alert("注册信息不完善或有错误！！")
	//   					return false;
	//   				}
 //  				}
 //  				else
 //  				{
 //  					alert("注册信息不完善或有错误！！")
	//   				return false;
 //  				}

  				
 //  			})
	// 	})
	 </script>


</body>
</html>


<!-- create table user(
id int not null primary key auto_increment,
name varchar(32) not null,
number varchar(32) not null,
password varchar(64) not null,
identity varchar(10) not null,
phone int,
sex varchar(10),
home text
)default charset=utf8; -->