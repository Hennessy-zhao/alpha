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
			<div id="content">
            	<h4><img src="/alpha/Public/Outward/Inward/images/templatemo_list.png" >&nbsp;&nbsp;文件列表
                <div class="btn_more" data-toggle="modal" data-target="#myModal">上传新文件</div>
                </h4>
                <!-- 模态框（Modal） -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
                       aria-labelledby="myModalLabel" aria-hidden="true">
                       <div class="modal-dialog">
                          <div class="modal-content">
                             <div class="modal-header">
                                <button type="button" class="close" 
                                   data-dismiss="modal" aria-hidden="true">
                                      &times;
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                   模态框（Modal）标题
                                </h4>
                             </div>
                             <div class="modal-body">
                                在这里添加一些文本
                             </div>
                             <div class="modal-footer">
                                <button type="button" class="btn btn-default" 
                                   data-dismiss="modal">关闭
                                </button>
                                <button type="button" class="btn btn-primary">
                                   提交更改
                                </button>
                             </div>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal -->
                    </div>
                <div class="hr_divider"></div>
                <div class="boxes">
                    <div class="grid_4">
                        <figure>
                            <div><img src="/alpha/Public/Outward/Inward/images/templatemo_slide03.jpg" alt=""></div>
                             <figcaption>  
                                        <p class="p1">传智播客PHP从入门到精通，非常好的学习PHP的内容视频教程。</p>  
                                        <p class="p2">上传者：赵益石</p>  
                                        <a href="#" class="btn">下载</a>                
                            </figcaption>
                        </figure>
                        <p class="p3">PHP从入门到精通</p>
                    </div>
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

</body>
</html>