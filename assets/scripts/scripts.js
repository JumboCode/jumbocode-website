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


function openPopup() {
	document.getElementById("services-popup").style.display = "block";
}

function closePopup() {
	document.getElementById("services-popup").style.display = "none";
}

function openthePopup() {
	document.getElementById("services-popup-web").style.display = "block";
}

function closethePopup() {
	document.getElementById("services-popup-web").style.display = "none";
}

function openelPopup() {
	document.getElementById("services-popup-digital").style.display = "block";
}

function closeelPopup() {
	document.getElementById("services-popup-digital").style.display = "none";
}