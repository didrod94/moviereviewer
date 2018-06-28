$(document).ready(function(){
	
	var ht = $(window).height();

	$(".window").height(ht);

	$(".window").on("resize", function() {
		var ht = $(window).height();
		$(".window").height(ht);
	});
	
	$(".window").on("mousewheel", function(event,delta) {
		if(delta>0) {
			var prev = $(this).prev().offset().top;
			$("html,body").stop().animate({"scrollTop":prev}, 500);
		}
		else if(delta<0) {
			var next = $(this).next().offset().top;
			$("html,body").stop().animate({"scrollTop":next}, 500);
		}
		});
	
	/* $(".btnMenu").on("click", function() {
		$(".fix").fadeOut();
		$(".sec").addClass("on");
		$("nav").addClass("on");
	});
	
	$("nav li").on("click", function() {
		$(".fix").fadeIn();
		$(".sec").removeClass("on");
		$("nav").removeClass("on");
		var i = $(this).index();
		$(".sec>div").removeClass("on");
		$(".sec>div").eq(i).addClass("on");
	}); */
	
});