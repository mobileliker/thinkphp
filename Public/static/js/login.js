$(document).ready(function(){
	$(".user_item").click(function(e){
		if($(this).hasClass("user_off")){
			var temp=$(".user_on");
			temp.removeClass("user_on");
			temp.addClass("user_off");
			$(this).removeClass("user_off");
			$(this).addClass("user_on");
		}
	})
})