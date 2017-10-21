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

	
});