$(document).ready(function() {
	
	// $("a").hover(function() {
	// 	$(this).animate({
	// 	    color: "#64DDBB"
 //  		}, 200 );
	// }, function() {
	// 	$(this).animate({
	// 		color: "white"
	// 	}, 200)
	// });

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
