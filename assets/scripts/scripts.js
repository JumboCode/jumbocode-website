$(document).ready(function() {
	
	if (! ($('.navigation').hasClass('open-nav'))) {
		$("a").hover(function() {
			$(this).animate({
			    color: "#64DDBB"
	  		}, 200 );
		}, function() {
			$(this).animate({
				color: "white"
			}, 200)
		});
	}
	$("#ham").click(function(){
    	$(".navigation").toggleClass("open-nav");
	});

	$('.overlay').hover(function() {
		$(this).stop().animate({
			opacity: 1
		}, 200);
	}, function() {
		$(this).stop().animate({
			opacity: 0
		}, 200)
	});
	
});
