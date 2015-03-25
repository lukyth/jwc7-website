var isMobile = false;

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

		isShow = true;
		ret.up();
	}

	ret.up = function() {

		h = $("#qa-page .folded").height();

		if( isShow ) {
			$folded.accordion( 90, 1 );
			if( isMobile ) {
				setTimeout( function() {
					$("#qa-page .folded-container").css("height",0);
				},800);
			} else {
				$("#qa-page .folded-container").animate({
					"height" : 0
				},1200);
			}
			$("#qa-page .head").css("background-image",'url(assets/img/main/faq_show.png)');
		} else {
			$folded.accordion( 0,1 );
			if( isMobile ) {
				$("#qa-page .folded-container").css("height",h);
			} else {
				$("#qa-page .folded-container").animate({
					"height" : h
				},600);
			}
			$("#qa-page .head").css("background-image",'url(assets/img/main/faq_hide.png)');
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
		boatx = $(window).outerWidth()*0.2 + 10;
	};

	ret.moveBoat = function() {
		$boat.css("background-position",boatx+"px 50%");
		boatx += 20;
		if( boatx > $(window).outerWidth() + 10 ) {
			boatx = -$boat.width()*0.2 - 10;
		}
	};

	return ret;
})();

$(function() {

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		isMobile = true;
	}

	setTimeout(function() {
		$('.popup a').trigger('click');
	},2000);

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
	// Animate.init();

	// setInterval( Animate.moveBoat,1000/5 );
	setInterval( function() {
		var end = new Date("March 29, 2015 00:00:00 GMT+0700").getTime();
		var time = end - new Date().getTime();
		time = Math.floor(Math.max(0,time)/1000);
		$(".counter .days").text( Math.floor(time/(24*60*60)) );
		time %= (24*60*60);
		$(".counter .hours").text( Math.floor(time/(60*60)) );
		time %= (60*60);
		$(".counter .minutes").text( Math.floor(time/60) );
		time %= 60;
		$(".counter .seconds").text( time );
	}, 1000);

	$('a.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
});
