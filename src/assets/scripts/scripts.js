$(document).ready(function() {

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
