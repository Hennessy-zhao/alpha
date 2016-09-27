//tables diferent background-color

$(function(){
	$(".mws-table").find("tr:even").addClass("odd");
	$(".mws-table").find("tr:odd").addClass("even");
})


//manage files

$(function(){
	// recover files
	$(".recoverbtn").on("click",function(){
		var url=$(this).attr("alt");
		var fileid=$(this).parent().parent(".dropdown-menu").attr("alt");

		if (confirm("确认回复此文件吗？？")) {
			$.post(url,{
				fileid : fileid
			},function(data){
				if (data==1) {
					$(".rank"+fileid).remove();
				}
				else{
					alert("系统出现错误，请稍后再试");
				}
			})
		}
	})


	//delete files forever
	$(".deltetbtn").on("click",function(){
		var url=$(this).attr("alt");
		var fileid=$(this).parent().parent(".dropdown-menu").attr("alt");
		if (confirm("确认永久删除此文件吗？？")) {
			$.post(url,{
				fileid : fileid
			},function(data){
				if (data==1) {
					$(".rank"+fileid).remove();
				}
				else{
					alert("系统出现错误，请稍后再试");
				}
			})
		}

		
	})
})