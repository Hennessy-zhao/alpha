
$(function(){
	$(".mws-table").find("tr:even").addClass("odd");
	$(".mws-table").find("tr:odd").addClass("even");
})

//manage the ranks of members

$(function(){
	$(".managebtn").on("click",function(){
		var managemsg=parseInt($(this).attr("alt"));
		var parent=$(this).parent().parent(".dropdown-menu").attr("alt");
		
		var parentarr=parent.split("|");
		var userid=parseInt(parentarr[0]);
		var url=parentarr[1];

		if (managemsg>0&&managemsg<=5) {
			var manage=managemsg;
		}
		else if(managemsg==6){
			var manage=-1;
		}
		else if (managemsg==7){
			var manage=-2;
		}
		else{
			alert("系统出现错误，请稍后再试。");
			return;
		}

		var managearr=new Array();
		managearr[5]="设置该成员为主席";
		managearr[4]="设置该成员为管理员";
		managearr[3]="设置该成员为学长";
		managearr[2]="设置该成员为大二成员";
		managearr[1]="设置该成员为大一成员";
		managearr[6]="将该成员禁言";
		managearr[7]="将该成员删除";

		if (confirm("您的操作是："+managearr[managemsg])) {
			$.post(url,{
				userid : userid,
				manage : manage
			},function(data){
				if (data==2) {
					alert("对不起，您不能对级别大与您的用户进行操作");
				}
				else if (data==1) {
					location.reload();
				}
				else{
					alert("系统错误");
				}
			})
		}

	})
})	