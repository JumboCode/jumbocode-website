$( document ).ready(function() {
	$('.round').hover(function() {
		$( this ).stop().animate({height: "350px", width: "350px"});
	}, function() {
	    $( this ).stop().animate({height: "250px", width: "250px"});
	    $('.round').css("position", "relative");
	});
	$('.overlay').hover(function() {
		$( this ).stop().animate({opacity: 1});
	}, function() {
    $( this ).stop().animate({opacity: 0});
	});
});