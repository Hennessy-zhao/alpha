<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/alpha/Public/Admin/Login/css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/alpha/Public/Admin/Login/css/mws.style.css" media="screen" />
<title></title>
</head>

<body>

	<div id="mws-login">
    	<h1>Login</h1>
        <div class="mws-login-lock"><img src="/alpha/Public/Admin/Login/css/icons/24/locked-2.png" alt="" /></div>
    	<div id="mws-login-form">
        	<form id="form1" class="mws-form" action="#" method="post">
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input type="text" id="user" class="mws-login-username mws-textinput" placeholder="username/name/email" />
                    </div>
                </div>
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input type="password" id="pasd" class="mws-login-password mws-textinput" placeholder="password" />
                    </div>
                </div>
                <div class="mws-form-row">
                	<input type="submit" value="Login" class="mws-button green mws-login-button" />
                </div>
            </form>
        </div>
    </div>
    <script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#form1").submit(function(){
                var user=$("#user").val();
                var pasd=$("#pasd").val();

                $.post("<?php echo U('Admin/Index/login','','');?>",{
                      user : user,
                      pasd : pasd
                  },function(data){
                    if (data==1) {
                        window.location.href="<?php echo U('Admin/Manage/index','','');?>";
                    }
                    else if (data==2) {
                      alert("用户名或密码错误");
                    }
                    else if (data==3){
                      alert("对不起，用户名不存在");
                    }
                    else if (data==4) {
                        alert("对不起，用户级别过低，无法进入管理页面");
                    }
                    else{
                      alert("服务器忙");
                    }
                })


                return false;
            })
        })
    </script>
</body>
</html>