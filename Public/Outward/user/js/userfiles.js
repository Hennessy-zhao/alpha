//user deletes a post 
$(function(){
	$(".deletefile").on("click",function(){
		if (confirm("确认删除该文件吗？？")) {
			var alt=$(this).attr("alt");
			var message=alt.split("|");
			var fileid=parseInt(message[0]);
			var url=message[1];
			var $thisone=$(this);
			$.post(url,{
				fileid : fileid
			},function(data){
				if (data==1) {
					$thisone.parent().parent().remove();
				}
				else{
					alert("系统错误，请稍后再试");
				}
			})
		}
		
	})
})