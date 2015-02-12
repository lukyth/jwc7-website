$(function() {
	$(".navbar").hide();

	$(window).scroll( function() {
		if( $(this).scrollTop() > 100 ) {
			$(".navbar").fadeIn();
		} else {
			$(".navbar").fadeOut();
		}
	});

	$('a.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
});