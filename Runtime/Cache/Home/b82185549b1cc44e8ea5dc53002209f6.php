<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>计算机系统研发中心欢迎您</title>
<link rel="stylesheet" href="/alpha/Public/css/Index/style.css" />

</head>
<body>
<a href="<?php echo U('Home/Main/index','','');?>" id="a1" style="float:right;margin-top:10px;color:white;">跳过动画</a>
<!-- <div id="click">
  请点击
  <br/>
 <img src="/alpha/Public/images/Index/click.jpg" width="7%">
</div> -->
<main>
  <div class="label" style="position:absolute;top:45%;">
    <a href="#" class=" js-trigger-reset" style="display:none;">
      <center><img src="/alpha/Public/images/Index/title.jpg"></center>
    </a>
  </div>
  <div class="-content -index">
    <div>
      <div class="bounce-wrap">
        <div class="bounce">
          <div class="-shadow"></div>
          <div class="-box-wrap js-box-wrap">
            <div class="-box">
              <div class="front wall"></div>
              <div class="back wall"></div>
              <div class="right wall"></div>
              <div class="left wall"></div>

              <div class="front-right wall"></div>
              <div class="front-left wall"></div>
              <div class="back-right wall"></div>
              <div class="back-left wall"></div>  
            </div>
          </div>
          <div id="emitter"></div>
          <div class="explode">
            <span class="cloud -one js-cloud-1"></span>
            <span class="cloud -two js-cloud-2"></span>
            <span class="cloud -three js-cloud-3"></span>
          </div>
          <svg class="icon js-icon-logo" viewBox="0 0 162.5 47">
            <use  xlink:href="#logo_technology"></use>
          </svg>
        </div>
      </div>
      </div>
  </div>
</main>

<script src="/alpha/Public/js/Index/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src='/alpha/Public/js/Index/TweenMax.min.js'></script>
<script src="/alpha/Public/js/bootstrap.js" ></script>
<script src="/alpha/Public/js/Index/index.js"></script>
<script type="text/javascript">
</script>
</body>
</html>