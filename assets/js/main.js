var Fold = (function() {
	var ret = {};
	var isShow = false;
	var $folded;
	var h;

	ret.init = function() {

		h = $("#qa-page .folded").height();

		$folded = new OriDomi( $("#qa-page .folded")[0],{
			hPanels: 10,
			shading: false,
			ripper : true,
			touchEnabled : false
		});
		
		
		console.log( h );

		isShow = true;
		ret.up();
	}

	ret.up = function() {
		console.log( 555 );
		if( isShow ) {
			$folded.reveal( -90,1 );
			$("#qa-page .folded-container").animate({
				"height" : h/10 - 5
			});
		} else {
			$folded.reveal( 0,1 );
			$("#qa-page .folded-container").animate({
				"height" : h
			},{
				"easing" : "linear"
			});
		}
		isShow = !isShow;
	}

	return ret;
})();

var Animate = (function() {

	var boatx;
	var $boat = $("#about-page .boat");
	var ret = {};

	ret.init = function() {
		boatx = $(window).outerWidth() + 10;
	};

	ret.moveBoat = function() {
		$boat.css("left",boatx);
		boatx += 4;
		if( boatx > $(window).outerWidth() + 10 ) {
			boatx = -$boat.width() - 10;
		}
	};

	return ret;
})();

$(function() {
	$(".navbar").hide();

	$(window).scroll( function() {
		if( $(this).scrollTop() > 100 ) {
			$(".navbar").fadeIn();
		} else {
			$(".navbar").fadeOut();
		}
	});

	$(window).load(function () {
		Fold.init();
	});
	Animate.init();

	setInterval( Animate.moveBoat,1000/30 );

	$('a.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
});

