$(document).ready(function() {
	
	$("a").hover(function() {
		$(this).animate({
		    color: "#64DDBB"
  		}, 200 );
	}, function() {
		$(this).animate({
			color: "white"
		}, 200)
	});

	$('.img-overlay').hover(function() {
		$(this).fadeTo(200, 1)
	}, function() {
		$(this).fadeTo(200, 0);
	});

	$('.img-overlay').hover(function() {
		$(this).fadeTo(200, 1)
	}, function() {
		$(this).fadeTo(200, 0);
	});
	
	$('.img-circle').css("top", "+=50")
	
});