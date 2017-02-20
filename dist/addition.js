function ScrollDown(){
	var ScrollPos = 143,
		ScrollNow = $(this).scrollTop();
			
	if (ScrollPos < ScrollNow){
		$("#navbar").css({
			"position": "fixed",
			"top": "0px",
			"width": "100%",
			"z-index": "10"
		});
	} else {
		$("#navbar").css({
			"position": "relative"
		});
	}
}

$(document).ready(function(){
	$(window).on("load", function(){
		ScrollDown();
	});

	$(window).on("scroll", function(){
		ScrollDown();
	});
});