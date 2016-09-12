<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>计算机系统研发中心</title>
	<meta name="description" content="计算机系统研发中心网站" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/alpha/Public/Outward/main/css/templatemo_style.css" rel="stylesheet">
    <link href="/alpha/Public/Outward/main/css/nivo-slider.css" rel="stylesheet">
    <link href="/alpha/Public/Outward/main/css/onestyle.css" rel="stylesheet">
    <link href="/alpha/Public/Outward/main/css/twostyle.css" rel="stylesheet"/>
    <link href="/alpha/Public/Outward/main/css/threestyle.css" rel="stylesheet" />
    <script src="/alpha/Public/Outward/main/js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="min-width:1110px !important;">
    <header id="templatemo_top" style="margin-bottom:0px !important;">
      	<div id="slider" class="nivoSlider">
            <a href="#"><img src="/alpha/Public/Outward/main/images/slider/img_1.jpg" alt="slide 1" /></a>
            <a href="#"><img src="/alpha/Public/Outward/main/images/slider/img_2.jpg" alt="slide 2" /></a>
            <a href="#"><img src="/alpha/Public/Outward/main/images/slider/img_3.jpg" alt="slide 3" /></a>
    	</div>
    </header>

    <div class="mWrapper">
        <div class="row">
          <div class="col-xs-12 col-md-8 col-xs-offset-0 col-md-offset-3">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="#templatemo_top">主&nbsp;页</a></li>
                <li><a href="#templatemo_introduce">社&nbsp;团&nbsp;简&nbsp;介</a></li>
                <li><a href="#templatemo_number">社&nbsp;团&nbsp;成&nbsp;员</a></li>
                <li><a href="#templatemo_achieve">社&nbsp;团&nbsp;成&nbsp;果</a></li>
                <li><a href="#templatemo_contact">联&nbsp;系&nbsp;我&nbsp;们</a></li>
                <li>
                  <?php if($_SESSION['user'] == NULL): ?><a data-toggle="modal" data-target="#myModal" >社&nbsp;团&nbsp;内&nbsp;网</a>
                  <?php else: ?>
                    <a href="<?php echo U('Home/Inward/index','','');?>" >社&nbsp;团&nbsp;内&nbsp;网</a><?php endif; ?>
                  
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- 模态框（Modal） -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
                 aria-labelledby="myModalLabel" aria-hidden="true"> 
                 <div class="modal-dialog" style="width:300px;">
                    <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                           aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                           用户登录
                        </h4>
                     </div>
                     <form action="#" method="post">
                       <div class="modal-body">

                          <div class="form-group">
                            <input id="user" name="user"  class="form-control" type="text" placeholder="请输入用户名/姓名/邮箱"> 
                          </div>
                          <div class="form-group">
                            <input id="pasd" name="pasd"  class="form-control" type="password" placeholder="请输入密码"> 
                          </div>
                       </div>
                       <div class="modal-footer">
                          <a class="btn btn-default" target="_blank" 
                              href="<?php echo U('Home/User/register','','');?>">
                             注册
                          </a>
                          <input type="button" id="login"  class="btn btn-primary" value="登陆">
                       </div>
                      </form>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            
      </div>
    </div>

    <div id="templatemo_introduce" class="section1" style="margin-top:0px  !important;">
      <center><h5>Introduction of the club</h5>
      <p>以下为社团简介，你可以通过点击两侧图片的方式翻转查看介绍信息。</p>
      <p>The following for corporate profile, the way you can by clicking on both sides of the image to flip to view information. </p></center>
      <br/><br/>
      <div class="poster-main A_Demo">
        <div class="poster-btn poster-prev-btn"></div>
        <ul class="poster-list">
          <li class="poster-item"><a href="#"><img src="/alpha/Public/Outward/main/images/one/1.jpg" width="100%" ></a></li>
          <li class="poster-item"><a href="#"><img src="/alpha/Public/Outward/main/images/one/2.jpg" width="100%" ></a></li>
          <li class="poster-item"><a href="#"><img src="/alpha/Public/Outward/main/images/one/3.jpg" width="100%" ></a></li>
          <li class="poster-item"><a href="#"><img src="/alpha/Public/Outward/main/images/one/4.jpg" width="100%" ></a></li>
          <li class="poster-item"><a href="#"><img src="/alpha/Public/Outward/main/images/one/5.jpg" width="100%" ></a></li>
          <li class="poster-item"><a href="#"><img src="/alpha/Public/Outward/main/images/one/6.jpg" width="100%" ></a></li>
          <li class="poster-item"><a href="#"><img src="/alpha/Public/Outward/main/images/one/7.jpg" width="100%" ></a></li>
        </ul>
        <div class="poster-btn poster-next-btn"></div>
      </div>
    </div> <!-- e/o section1 -->
    <div id="templatemo_number" class="section2">
        <div class="main">
        <div class="wrap">
          <div class="content"><!-- start content -->
            <h5>Members of the club</h5>
            <h6 style="color:#4B4949;">计算机系统研发中心成员由江苏师范大学智慧与教育学院计算机专业各各年级成员组成。下列展示大三各成员。</h6>
            <h6>Members of the computer system research and development center by the wisdom and jiangsu normal university education of college computer professional grade are members. The following show junior members.</h6>
            <ul class="hover_pack right">
              <li>
                 <a href="#" class="b_btn"><span > <h4>Main</h4><h4> Members</h4></span> </a>
              </li>        
              <li>
                <a href="#" class="b-link-stripe b-animate-go  thickbox">
                  <img src="/alpha/Public/Outward/main/images/two/h_pic1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                  <p class="b-animate b-from-right    b-delay03 ">武杲<br><span class="m_4" style="font-size:0.7em;">计算机系统研发中心主席，大三成员。座右铭：技术不是别人教就会的，而是自己找出来的。</span></p></div></a>
              </li>   
              <li>
                <a href="#" class="b-link-stripe b-animate-go  thickbox">
                      <img src="/alpha/Public/Outward/main/images/two/h_pic2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                <p class="b-animate b-from-right    b-delay03 ">陆阳<br><span class="m_4" style="font-size:0.7em;">计算机系统研发中心大三成员。座右铭：生活是一场赌博，但程序不是。</span></p></div></a>
              </li> 
              <div class="clear"></div> 
            </ul>
            <ul class="hover_pack left">
              <li>
                <a href="#" class="b-link-stripe b-animate-go  thickbox">
                      <img src="/alpha/Public/Outward/main/images/two/h_pic7.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                <p class="b-animate b-from-right    b-delay03 ">陈海涛<br><span class="m_4" style="font-size:0.7em;">计算机系统研发中心大三成员。座右铭：if you really want it.</span></p></div></a>
              </li>       
              <li>
                <a href="#" class="b-link-stripe b-animate-go  thickbox">
                      <img src="/alpha/Public/Outward/main/images/two/h_pic4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                <p class="b-animate b-from-right    b-delay03 ">张功廷<br><span class="m_4" style="font-size:0.7em;">计算机系统研发中心大三成员。座右铭：顺其自然 随遇而安</span></p></div></a>
              </li> 
              <li>
                 <a href="#" class="b_btn"><span > <h4>Main</h4><h4> Members</h4></span> </a>
              </li> 
              <div class="clear"></div>                                                                           
            </ul>
            <ul class="hover_pack left right">
              <li>
                 <a href="#" class="b_btn"><span > <h4>Main</h4><h4> Members</h4></span> </a>
              </li>   
              <li>
                <a href="#" class="b-link-stripe b-animate-go  thickbox">
                      <img src="/alpha/Public/Outward/main/images/two/h_pic5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                <p class="b-animate b-from-right    b-delay03 ">赵益石<br><span class="m_4"  style="font-size:0.7em;">计算机系统研发中心大三成员。座右铭：心中迷茫的时候，就看看天空。</span></p></div></a>
              </li>       
              <li>
                <a href="#" class="b-link-stripe b-animate-go  thickbox">
                      <img src="/alpha/Public/Outward/main/images/two/h_pic6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                <p class="b-animate b-from-right    b-delay03 ">张伊伦<br><span class="m_4" style="font-size:0.7em;">计算机系统研发中心大三成员。座右铭：时光不会为任何人快一秒，或者慢一秒</span></p></div></a>
              </li>
              <div class="clear"></div>                                                                           
            </ul>
            <ul class="hover_pack left">
              <li>
                <a href="#" class="b-link-stripe b-animate-go  thickbox">
                      <img src="/alpha/Public/Outward/main/images/two/h_pic9.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                <p class="b-animate b-from-right    b-delay03 ">范茹<br><span class="m_4"  style="font-size:0.7em;">计算机系统研发中心大三成员。座右铭：迅速专注，长期保持</span></p></div></a>
              </li> 
              <li>
                 <a href="#" class="b_btn"><span > <h4>Main</h4><h4> Members</h4></span> </a>
              </li> 
              <li>
                <a href="#" class="b-link-stripe b-animate-go  thickbox">
                      <img src="/alpha/Public/Outward/main/images/two/h_pic3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2>
                <p class="b-animate b-from-right    b-delay03 ">张万云<br><span class="m_4" style="font-size:0.7em;">计算机系统研发中心大三成员。座右铭： Follow your brain. Your heart is stupid as shit.</span></p></div></a>
              </li> 
              <div class="clear"></div>                                                                           
            </ul>
            <div class="clear"></div> 
          </div><!-- end content -->
        </div>
        </div>
    </div> <!-- e/o section2 -->
    <div id="templatemo_achieve" class="section3" style="margin-top:0px;">
      <center><h5>Achievements of the club</h5>
      <p>以下为社团部分成果，将鼠标放在图片上可放大图片观看具体信息。</p>
      <p>The following part for corporate achievements, put the mouse on the image to enlarge pictures to watch the specific information . </p></center>
      <br/><br/><br/>
      <div class="achievement">
          <img src="/alpha/Public/Outward/main/images/three/img01.jpg"/>
          <img src="/alpha/Public/Outward/main/images/three/img02.jpg"/>
          <img src="/alpha/Public/Outward/main/images/three/img03.jpg"/>
          <img src="/alpha/Public/Outward/main/images/three/img04.jpg"/>
          <img src="/alpha/Public/Outward/main/images/three/img05.jpg"/>
          <img src="/alpha/Public/Outward/main/images/three/img06.jpg"/>
      </div>
    </div> <!-- e/o section3 -->
    <div id="templatemo_contact" class="section4">
      <center><h5>Contact Us</h5>
      <p>如果你对我们社团有更多的兴趣，或者有建议和不满，可以通过发送邮件的方式告知我们。</p>
      <p>If you have more interest to our community, or any Suggestions and discontent, can let us know by email.  </p></center>
      <br/><br/><br/>
      <div class="row" style="padding:0px;margin:0px;">
        <form id="adviseform">
        <div class="col-xs-3 col-sm-offset-1" id="contact-left">
             <div class="form-group">
                <input type="text" class="form-control" id="username" 
                   placeholder="Please input your name">
             </div>
             <div class="form-group">
                <input type="text" class="form-control" id="phone" 
                   placeholder=" Please input your phone">
             </div>
             <div class="form-group">
                <input type="text" class="form-control" id="email" 
                   placeholder=" Please input your email">
             </div>
             <input type="submit" class="btn btn-success" style="width:40%;" id="send" value="Send Message">
        </div>
        <div class="col-xs-5" id="contact-middle">
            <div class="form-group">
                <textarea class="form-control" rows="10" id="message" placeholder=" Please input the messages"></textarea>
             </div>
        </div>
        </form>
        <div class="col-xs-2" id="contact-right">
          <br/><br/>
          <p>左侧信息中，电子邮件和信息内容为必填，姓名和联系电话不做要求。在您提交信息后，我们会在一周内回复。</p>
          <br/>
          <span class="glyphicon glyphicon-road" style="color: rgb(0,172,233);"></span><span class="span1">江苏师范大学9号楼606</span>
          <br/>
          <span class="glyphicon glyphicon-envelope" style="color: rgb(0,172,233);"></span><span class="span1">xxxxxxxxxx@qq.com</span>
        </div>

      </div>
    </div> <!-- e/o section4 -->
    <div class="footer">
      <p>Copyright © 2016 计算机系统研发中心</p>
    </div>
    <div id="newnember"  data-toggle="modal" data-target="#newpeople">
      <img src="/alpha/Public/Outward/main/images/new.png" id="newimages" width="100%">
    </div>
    <!-- 模态框（Modal） -->
    <div class="modal fade" id="newpeople" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:100%;">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="width:10%;color:white !important;font-size:5em;">
                <p style="color:white !important;">&times;</p>
              </button>
              <div id="msg">
                <h3>各位16届的学弟学妹们大家好！</h3>
                <p>今天我要向大家介绍下，我们的社团----计算机系统研发中心。计算机系统研发中心是我们学院的社团之一，成员由我们学院的学生组成，受到我们学院的大力支持，每届我们都可以招收到很多的成员。我们社团在最高的楼21世纪大楼有供我们学习工作的地方，那里环境好，有网络，空调，你们可以不用挤图书馆，不用到处找空的自习室，很方便你们学习。我们的社团，主要从事的是web开发，就是网页的设计，后台的搭建等，它的前景还是非常好的。正所谓技多不压身，对于我们学计算机专业的同学来说，懂一点web开发还是有必要的。</p>
                <p>在我们社团，每周会有学长学姐给你们上课，教给你们新的技术，而这些技术，你们在学校的课程里是学不到的，例如前端使用的html、css、javascript、jquery、angularJS、bootstrap技术，还有后端使用的php、python、ruby等技术。我们社团的学长学姐们，利用这些技术，还为我们学校开做了不少贡献，我们经常帮其他院做一些网站，或者合作参加比赛，而且很多比赛你们也是可以参加的，这些东西都会成为你们以后面试的资本。</p>
                <p>当你们的技术娴熟的时候，我们社团还会有大量的项目让你们来练手，根据我自己这一年以来的感受和从学长学姐们那得来的经验，我们专业是非常注重你的动手能力，也就是编程能力，我们不是文科生，熟读背诵课本考试考高分就可以的，而且在一定程度上，考试成绩的高低，不一定可以反映你的编程能力，你的技术水平。你必须要有很坚实的编程能力，才能在未来的竞争中脱颖而出。而在我们计算机研发中心，我们就是要大力培养你们的编程能力，让你们成为真正的编程大神、技术大牛。你们毕业以后，在填写简历的时候，写上你所开发过的项目，那样的话肯定比你的成绩单更具有说服力。更能展现你的技术，你的能力。如果是想考研的同学，你开发的项目和你开发项目的经历也一定会给你们的面试加分。</p>
                <p>
                  我们社团还有很多优秀的学长学姐。在已经毕业的社团成员中，他们很多都在北京、上海找到了满意的工作，如新浪、七牛等。在14届的社团成员中，虽然尚未毕业就职，但是已经开发出很多很多好的网站。不仅如此，我们社团还与生科院合作IGEM大赛，各行各业都离不开计算机技术的应用。
                </p>
                <p>
                  有的同学可能担心，加入我们社团，会影响到自己的学业。我可以告诉你们，并不会，我们不会占用你们的上课时间，每周我们只上一次课，每次二到三个小时，我们只会在你们的周末，为你们上课，教你们技术。与你们学习其他课程的时间完全不会冲突，只要你们愿意学，我们就把自己会的全教给你们。编程思想是相通的，你们在大一专业课C/C++中所学习到的东西，对于学习我们社团技术也是有所帮助的。
                </p>
                <p>
                  最后，我希望不管大家是不是加入我们的计算机研发中心，大家都要认真的学习，学习各种技术，做自己想做的人，坚持下去，在最好的年纪，千万别辜负了自己。更不要沉迷于游戏，不要堕落在宿舍，不要轻易的放纵着自己。努力去完成自己的梦想。毕竟某人说过：“梦想还是要有的，万一实现了呢！”
                </p>
                <p><a href="/alpha/Public/files/new.rar" style="font-size:1.2em;">招新PPT,招新报名表下载</a></p>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
    <script src="/alpha/Public/Common/js/bootstrap.min.js"></script>
    <script src="/alpha/Public/Outward/main/js/jquery.nivo.slider.pack.js"></script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
   
     

      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="/alpha/Public/Outward/main/js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
      <script src="/alpha/Public/Outward/main/js/hover_pack.js"></script>
      <script src="/alpha/Public/Outward/main/js/PicCarousel.js"></script>
      <script type="text/javascript">
        $(".A_Demo").PicCarousel("init");

      </script>

      <script type="text/javascript">
        $(function(){
          $("#login").click(function(){
            var user=$("#user").val();
            var pasd=$("#pasd").val();
            $.post("<?php echo U('Home/Main/login','','');?>",{
                  user : user,
                  pasd : pasd
              },function(data){
                if (data==1) {
                    window.location.href="<?php echo U('Home/Inward/index','','');?>";
                }
                else if (data==2) {
                  alert("用户名或密码错误");
                }
                else if (data==3){
                  alert("对不起，用户名不存在或正在审核");
                }
                else{
                  alert("服务器忙");
                }
            })


          })
        })
      </script>
      <script type="text/javascript">
        $("#adviseform").submit(function(){
          var username=$("#username").val();
          var phone=$("#phone").val();
          var email=$("#email").val();
          var message=$("#message").val();
          if (email==''||message=='') {
            alert("邮箱和信息不可以为空!!");
          }
          else if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/)){
            alert("邮箱格式错误");
          }
          else{
              $.post("<?php echo U('Home/Main/doadvise','','');?>",{
                    username : username,
                    phone : phone,
                    email : email,
                    message : message
                },function(data){
                  if (data==1) {
                     
                      alert("您的投诉/建议提交成功，社团有关成员将尽快查阅并通过邮件方式答复");
                      $("#adviseform").reset();
                  }
                  else
                  {
                      alert("/建议提交失败，请稍后再试");

                  }
              })
          }
          return false;

        })
      </script>
</body>
</html>