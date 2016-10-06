$(document).ready(function(){
	$(".reply").click(function(e){
		$temp = $(this).parent().parent().parent().find(".invisible_item");
		if($temp.css("display")=="none"){
			$temp.css("display","block");
			$temp.animate({opacity:"1"},500);
		}else{
			$temp.animate({opacity:"0"},500,function(){
				$temp.css("display","none");
			});
		}
		
	})

})