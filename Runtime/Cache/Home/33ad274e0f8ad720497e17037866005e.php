<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user_home</title>
	<link href="/alpha/Public/Outward/user/css/userset.css" rel="stylesheet"/>
	<link href="/alpha/Public/Common/css/bootstrap.min.css" rel="stylesheet">
	<link href="/alpha/Public/Common/css/font-awesome.min.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="/alpha/Public/Outward/user/css/cropper.min.css">
    <link rel="stylesheet" type="text/css" href="/alpha/Public/Outward/user/css/mui.min.css">
</head>
<body style="background-color: rgba(239,239,239,1);" ng-app="myapp">
	
	<div class="col-xs-12" id="userform" ng-controller="firstController">
		<form action="#" onsubmit="return false">
			<div class="row" id="oneterm">
				<div class="col-xs-2" id="termname">
					头像
				</div>
				<div class="col-xs-10" id="termdesc">
					<div id="showResult" class="col-xs-12">
						<div id="changeAvatar">
				            <img src="/alpha/Public/userimg/<?php echo ($user[0]['userimg']); ?>" id="userimg">
				            <input id="image" type="file" accept="image/*" capture="camera" />
				        </div>
				         	
				        
				    </div>
				    <div id="showEdit">
				        <div style="width:100%;position: absolute;top:10px;left:0px;">
				            <button class="mui-btn" data-mui-style="fab" id='cancleBtn' style="margin-left: 10px;">取消</button>
				            <button class="mui-btn" data-mui-style="fab" data-mui-color="primary" id='confirmBtn' style="float:right;margin-right: 10px;">确定</button>
				        </div>
				        <div id="report">
				          <img src="image/mei.jpg" style="width: 300px;height:300px"> 
				      	</div>
				        
				    </div>
				</div>
			</div>
			<div class="row" id="oneterm">
				<div class="col-xs-2" id="termname">
					用户名
				</div>
				<div class="col-xs-10" id="termdesc">
					<input type="text" class="form-control" value="<?php echo ($user[0]['username']); ?>">
				</div>
			</div>
			<div class="row" id="oneterm">
				<div class="col-xs-2" id="termname">
					密码修改
				</div>
				<div class="col-xs-10" id="termdesc">
					<input type="password" class="form-control" >
				</div>
			</div>
			<div class="row" id="oneterm">
				<div class="col-xs-2" id="termname">
					密码重复
				</div>
				<div class="col-xs-10" id="termdesc">
					<input type="password" class="form-control">
				</div>
			</div>
			<div class="row" id="oneterm">
				<div class="col-xs-2" id="termname">
					入学年份
				</div>
				<div class="col-xs-10" id="termdesc">
					<select name="" id="">
						<option value="0" ng-selected="startyear==2012?true;false">入学年份选择</option>
						<option value="2012" ng-selected="startyear==2012?true:false">2012</option>
						<option value="2013" ng-selected="startyear==2013?true:false">2013</option>
						<option value="2014" ng-selected="startyear==2014?true:false">2014</option>
						<option value="2015" ng-selected="startyear==2015?true:false">2015</option>
						<option value="2016" ng-selected="startyear==2016?true:false">2016</option>
					</select>
				</div>
			</div>
			<div class="row" id="oneterm">
				<div class="col-xs-2" id="termname">
					联系电话
				</div>
				<div class="col-xs-10" id="termdesc">
					<input type="text" class="form-control" value="13912345678">
				</div>
			</div>
			<div class="row" id="oneterm">
				<div class="col-xs-2" id="termname">
					性别
				</div>
				<div class="col-xs-10" style="font-size:1.2em;margin-top:5px;" id="termdesc">
					&nbsp;&nbsp;
					<input type="radio" value="1">男&nbsp;&nbsp;&nbsp;<input type="radio" value="0">女

				</div>
			</div>
			<div class="row" id="oneterm">
				<div class="col-xs-2" id="termname">
					自我介绍
				</div>
				<div class="col-xs-10" id="termdesc">
					<textarea class="form-control" rows="3"></textarea>

				</div>
			</div>
			<div class="col-xs-10">
				<button class="btn btn-success" id="alterbtn">修改个人信息</button>
			</div>

		</form>
	</div>

	<script src="/alpha/Public/Common/js/jquery-2.1.4.min.js"></script>
	<script src="/alpha/Public/Common/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/alpha/Public/Outward/user/dist/lrz.all.bundle.js"></script>
    <script type="text/javascript" src="/alpha/Public/Outward/user/js/cropper.min.js"></script>
    <script type="text/javascript">
    $(function() {

        function toFixed2(num) {
            return parseFloat(+num.toFixed(2));
        }
		
        $('#cancleBtn').on('click', function() {
            $("#showEdit").fadeOut();
            $('#showResult').fadeIn();
        });

        $('#confirmBtn').on('click', function() {
            $("#showEdit").fadeOut();

            var $image = $('#report > img');
            var dataURL = $image.cropper("getCroppedCanvas");
            var imgurl = dataURL.toDataURL("image/jpeg", 0.5);
            $("#changeAvatar > img").attr("src", imgurl);
            $('#showResult').fadeIn();

        });

        function cutImg() {
            $('#showResult').fadeOut();
            $("#showEdit").fadeIn();
            var $image = $('#report > img');
            $image.cropper({
                aspectRatio: 1 / 1,
                autoCropArea: 0.7,
                strict: true,
                guides: false,
                center: true,
                highlight: false,
                dragCrop: false,
                cropBoxMovable: false,
                cropBoxResizable: false,
                zoom: -0.2,
                checkImageOrigin: true,
                background: false,
                minContainerHeight: 400,
                minContainerWidth: 300
            });
        }

        function doFinish(startTimestamp, sSize, rst) {
            var finishTimestamp = (new Date()).valueOf();
            var elapsedTime = (finishTimestamp - startTimestamp);
            //$('#elapsedTime').text('压缩耗时： ' + elapsedTime + 'ms');

            var sourceSize = toFixed2(sSize / 1024),
                resultSize = toFixed2(rst.base64Len / 1024),
                scale = parseInt(100 - (resultSize / sourceSize * 100));
            $("#report").html('<img src="' + rst.base64 + '" style="width: 100%;height:100%">');
            cutImg();
        }

        $('#image').on('change', function() {
            var startTimestamp = (new Date()).valueOf();
            var that = this;
            lrz(this.files[0], {
                    width: 800,
                    height: 800,
                    quality: 0.7
                })
                .then(function(rst) {
                    //console.log(rst);
                    doFinish(startTimestamp, that.files[0].size, rst);
                    return rst;
                })
                .then(function(rst) {
                    // 这里该上传给后端啦
                    // 伪代码：ajax(rst.base64)..

                    return rst;
                })
                .then(function(rst) {
                    // 如果您需要，一直then下去都行
                    // 因为是Promise对象，可以很方便组织代码 \(^o^)/~
                })
                .catch(function(err) {
                    // 万一出错了，这里可以捕捉到错误信息
                    // 而且以上的then都不会执行

                    alert(err);
                })
                .always(function() {
                    // 不管是成功失败，这里都会执行
                });
        });

    });
    </script>

	<script src="/alpha/Public/Common/js/angular.min.js"></script>
	<script>
	  angular.module("myapp",[])
	  .controller("firstController",['$scope',function($scope){
	    $scope.startyear=<?php echo ($user[0]['start_year']); ?>;
	  }])
	</script>
	
</body>
</html>