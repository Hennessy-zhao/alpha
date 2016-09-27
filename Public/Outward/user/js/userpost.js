//user deletes a post 
$(function(){
	$(".deletepost").on("click",function(){
		if (confirm("确认删除该帖子吗？？")) {
			var alt=$(this).attr("alt");
			var message=alt.split("|");
			var postid=parseInt(message[0]);
			var url=message[1];
			var $thisone=$(this);
			$.post(url,{
				postid : postid
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
})z