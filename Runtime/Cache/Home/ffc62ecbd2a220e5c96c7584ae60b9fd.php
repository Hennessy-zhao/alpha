<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线聊天室</title>
<link href="/alpha/Public/Inward/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="/alpha/Public/Inward/css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />

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
                <li><a href="#" class="current">聊天室</a></li>
                <li><a href="<?php echo U('Home/Inward/posts','','');?>">发帖区</a></li>
                <li><a href="<?php echo U('Home/Inward/files','','');?>">学习文件</a></li>
                <li><a href="<?php echo U('Home/Inward/membercenter','','');?>">成员中心</a></li>
                <li style="float:right;"><a href="#">建议/投诉</a></li>
                <li style="float:right;"><a href="<?php echo U('Home/Main/index','','');?>">外网页</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_slider_wrapper">
        
        	<div id="templatemo_slider">
            
				<div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">
                        
                            <div class="cs_article">
                            	<div class="slider_content_wrapper">
									
									<div class="slider_image">
										<img src="/alpha/Public/Inward/images/chat/slider/templatemo_slide01.jpg" alt="Mauris quis eros arcu" />
									</div>
									
									<div class="slider_content">
                                        <h2>Online communication </h2>
                                        <h3>在线聊天</h3>
                                        <p>可以通过此平台在线聊天，分享学习成果,和不同年级的学长互动。</p>
                                        <p>Online chat through this platform, we can share learning outcomes, and different grade of senior interaction. </p>
									</div>
                                
								</div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            	<div class="slider_content_wrapper">
									
									<div class="slider_image">
										<img src="/alpha/Public/Inward/images/chat/slider/templatemo_slide02.jpg" alt="Cras porta porta turpis" />
									</div>
                     			
									<div class="slider_content">
                                        <h2>Any content </h2>
                                        <h3>内容不限</h3>
                                        <p>发帖区禁止灌水，想发发牢骚或者抱怨这里欢迎你~~</p>
                                        <p>prohibit publishing has nothing to do with learning content, here you can chat~~ </p>
                                    </div>
                                
								</div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            	<div class="slider_content_wrapper">
									
									<div class="slider_image">
										<img src="/alpha/Public/Inward/images/chat/slider/templatemo_slide03.jpg" alt="Nullam ac mi id massa consectetur" />
									</div>
									
									<div class="slider_content">
                                        <h2>Polite communication</h2>
                                        <h3>礼貌交流</h3>
                                        <p>交流内容不限，但是不可以发布对他人具有侮辱性质或者攻击性质的信息</p>
                                        <p>Unlimited communication content, but can not be issued with insulting or aggressive qualitative information to others </p>
                                    </div>
                                
								</div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            	<div class="slider_content_wrapper">
									
									<div class="slider_image">
										<img src="/alpha/Public/Inward/images/chat/slider/templatemo_slide04.jpg" alt="Maecenas venenatis viverra nisi" />
									</div>
									
									<div class="slider_content">
                                        <h2>Chat record instructions </h2>
                                        <h3>聊天记录说明</h3>
                                        <p>你可以通过下方按钮查看一周内聊天记录，每周一定期删除本周所有记录</p>
                                        <p>You can use the button below to check the chat records within a week, every Monday to delete all records this week on a regular basis </p>
                                    </div>
                                
								</div>
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                
                <!-- Site JavaScript -->
                <script type="text/javascript" src="/alpha/Public/Inward/js/jquery-2.1.4.min.js"></script>
                <script type="text/javascript" src="/alpha/Public/Inward/js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="/alpha/Public/Inward/js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '940px',
                    height : '240px',
                    speed : 400,
                    easing : 'easeOutSine'
                    });
                    });
                </script>
                <div class="cleaner"></div>
            	
            </div>
        
        </div>
        
        <div id="templatemo_content_wrapper">
			<div id="content" style="height:500px">
            	<h5>此功能尚未开通</h5>
                
            </div>
			
            <div class="cleaner"></div>        
        
		</div>
		
		<div id="templatemo_content_wrapper_bottm"></div>
   
		<div id="templatemo_footer">
		
             版权信息
			 
       </div>
        
	</div> <!-- end of wrapper -->
</div> <!-- end of wrapper_outer -->



</body>
</html>