<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文件共享中心</title>
<link href="/alpha/Public/Outward/Inward/css/files.css" rel="stylesheet" />
<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div id="templatemo_wrapper_outer">
	<div id="templatemo_wrapper">
    
    	<div id="templatemo_header">
			<div id="site_title">
				<h1>PC System Discuss Center</h1>
                <br/>
                <p>计算机系统研发中心</p>
			</div> <!-- end of site_title -->

				
			
			<div class="cleaner"></div>
		</div>
        
        <div id="templatemo_menu">
            <ul>
                <li><a href="<?php echo U('Home/Inward/index','','');?>">主页</a></li>
                <li><a href="<?php echo U('Home/Inward/chat','','');?>">聊天室</a></li>
                <li><a href="<?php echo U('Home/Inward/posts','','');?>">发帖区</a></li>
                <li><a href="#" class="current">学习文件</a></li>
                <li><a href="<?php echo U('Home/Inward/membercenter','','');?>">成员中心</a></li>
                <li style="float:right;"><a href="#">建议/投诉</a></li>
                <li style="float:right;"><a href="<?php echo U('Home/Main/index','','');?>">外网页</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        
        
        <div id="templatemo_content_wrapper">
			<div id="content" ng-app="myapp">
            	<h4><img src="/alpha/Public/Outward/Inward/images/templatemo_list.png" >&nbsp;&nbsp;文件列表
                <div class="btn_more" data-toggle="modal" data-target="#myModal">上传新文件</div>
                </h4>
                <!-- 模态框（Modal） -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
                       aria-labelledby="myModalLabel" aria-hidden="true">
                       <div class="modal-dialog">
                          <div class="modal-content">
                                <br>
                                <button type="button" class="close" 
                                   data-dismiss="modal"> &times;  &nbsp;&nbsp;
                                </button>
                                <br>  
                                
                             <div class="modal-body" ng-controller="firstController">
                                <form action="<?php echo U('Home/Inward/addnewfiles');?>" name="myForm" enctype="multipart/form-data" method="post" onsubmit="alert('您的文件已上传，此文件将在1周内进行审核，并在审核完成后显示')">
                                  上传者： <?php echo ($_SESSION['user']); ?>
                                  <div class="uploader white">
                                      <input type="text" class="filename" readonly/>
                                      <input  type="button" name="file" class="button" value="上传..."/>
                                      <input name="newfile" type="file" id="newfile" ng-required="true" size="30"/>
                                    </div>
                                   <input name="newfiletitle" ng-required="true" type="text" class="form-control" placeholder="请填写文件名">
                                   <br>
                                   <textarea ng-required="true" name="newfiledesc" class="form-control" rows="3" maxlength="30" placeholder="请对该文件进行描述，不超过30字"></textarea>
                                   <br>
                                  <input type="submit" id="uploadnewfile" class="btn btn-success" value="确定上传" ng-disabled="myForm.$invalid">
                                </form>
                                  

                             </div>
                             
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal -->
                    </div>
                <div class="hr_divider"></div>
                <p class="ps">提示：下载图片文件、txt文件和pdf文件会在页面中打开，需另存</p>
                <br>
                <div class="boxes">
                    <?php if(is_array($select)): foreach($select as $key=>$data): ?><div class="grid_4">
                        <figure>
                            <div><img src="/alpha/Public/Outward/Inward/images/files.jpg" alt=""></div>
                             <figcaption>  
                                        <p class="p1"><?php echo ($data["filedesc"]); ?></p>  
                                        <p class="p2"><?php echo ($data["user"]); ?></p>  
                                        <a href="/alpha/Public/files/<?php echo ($data["filesrc"]); ?>" class="btn">下载</a>                
                            </figcaption>
                        </figure>
                        <p class="p3"><?php echo ($data["filename"]); ?></p>
                    </div><?php endforeach; endif; ?>
                </div>
            </div>
            <div class="cleaner"></div>        
        
		</div>
		
		<div id="templatemo_content_wrapper_bottm"></div>
   
		<div id="templatemo_footer">
		
             版权信息
			 
       </div>
        
	</div> <!-- end of wrapper -->
</div> <!-- end of wrapper_outer -->

    <script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
    <script src="/alpha/Public/Common/js/bootstrap.min.js"></script>
    <script type="text/javascript">
$(function(){

  $("input[type=file]").change(function(){
    $(this).parents(".uploader").find(".filename").val($(this).val());
  });
  
  $("input[type=file]").each(function(){
    if($(this).val()==""){
      $(this).parents(".uploader").find(".filename").val("请选择文件...");
    }
  });
  
});
</script>


<script src="/alpha/Public/Common/js/angular.min.js"></script>
<script>
  angular.module("myapp",[])
  .controller("firstController",['$scope',function($scope){
      $scope.names="aaa"
  }])
</script>
</body>
</html>