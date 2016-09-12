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
<body style="min-width: 1110px !important;" ng-app="myapp">
	<div class="row" ng-controller="firstController">
		<div class="col-xs-12">
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
		<div class="col-xs-10 col-xs-offset-1" id="contain">
			<div class="row">
				<div class="col-xs-4" id="left">
					<div class="col-xs-12" style="padding:5px;">
						<a href="<?php echo U('Home/Main/index','','');?>"><div class="col-xs-12" id="outward"><p>外网页</p></div></a>
					</div>
					<div class="col-xs-6" style="padding:5px;">
						<a href="<?php echo U('Home/User/index','','');?>">
						<div class="col-xs-12" id="user">
							<span class="glyphicon glyphicon-user"></span>
							<br/><br/>个人中心
						</div>
						</a>
					</div>
					<div class="col-xs-6" style="padding:5px;">
						<a href="#" data-toggle="modal" data-target="#adviseModal">
						<div class="col-xs-12" id="advise">
							<span class="glyphicon glyphicon-envelope"></span>
							<br/><br/>建议/投诉
						</div>
						</a>
					</div>
					<!-- 建议投诉的模态框（Modal） -->
					<div class="modal fade" id="adviseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title" id="myModalLabel">
										请在下方填写您的建议或者投诉内容
									</h4>
								</div>
								<div class="modal-body">
									<textarea id="advisemessage"  ng-model="advisemessage" class="form-control" placeholder=" 请在此处输入您的建议或者投诉内容..." rows="3"></textarea>
									<p class="usertag">发表人：<?php echo ($_SESSION['user']); ?></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭
									</button>
									<button type="button" id="advisebutton" class="btn btn-primary" ng-disabled="!advisemessage">
										提交
									</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal -->
					</div>
					<!--膜态框结束-->
					<div class="col-xs-12" style="padding:5px;">
						<a href="#" data-toggle="modal" data-target="#demandModal"><div class="col-xs-12" id="demand"><p>要求/规定</p></div></a>
					</div>
					<!-- 模态框（Modal） -->
					<div class="modal fade" id="demandModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="border-bottom:0px solid white !important">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
								</div>
								<div class="modal-body">
									<h4>规定如下</h4>
									<ul class="onedemands" style="font-size: 1.15em !important;">
										<li>
											本网站依旧在建设中，一些功能尚未完善，请成员们见谅。
										</li>
										<li>
											本网站为社团交流群，请非社团人员不要进入，如有发现，立即删号
										</li>
										<li>
											文明交流，不得辱骂他，如有发现，会根据情节严重程度进行处理。
										</li>
									</ul>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal -->
					</div>
					<!--膜态框结束-->
				</div>
				<div class="col-xs-8" id="right">
					<a href="<?php echo U('Home/Inward/chat','','');?>"><div class="col-xs-12" id="chat"><p>在线聊天室</p></div></a>
					<div class="col-xs-6" style="padding-left:0px;">
						<a href="<?php echo U('Home/Inward/posts','','');?>"><div class="col-xs-12" id="post"><p>发帖区</p></div></a>
						<a href="#"><div class="col-xs-12" id="other">其他（暂不开放）</div></a>
					</div>
					<div class="col-xs-6" style="padding-left:0px;padding-right:0px;">
						<a href="<?php echo U('Home/Inward/membercenter','','');?>"><div class="col-xs-12" id="member"></div></a>
						<a href="<?php echo U('Home/Inward/files','','');?>"><div class="col-xs-12" id="data"><p>学习资料</p></div></a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="/alpha/Public/Common/js/angular.min.js"></script>
	<script>
	  angular.module("myapp",[])
	  .controller("firstController",['$scope',function($scope){
	     $scope.advisemessage='';
	  }])
	</script>

	<script>

		//退出
		$(function(){
            $("#signout").click(function(){
                if (confirm("确定退出当前界面？？")) {
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


        //提交建议和意见

        $(function(){
        	$("#advisebutton").click(function(){
        		message=$("#advisemessage").val();
        		$.post("<?php echo U('Home/Inward/inwardadvise','','');?>",{
        			message : message
        		},function(data){
        			if (data==1) {
        				alert("您的建议/投诉已成功提交，管理员会在1周内进行回复");
        				location.reload();
        			}
        			else
        			{
        				alert("服务器忙，请稍后操作");
        			}
        		})

        	})
        })
	</script>
</body>
</html>