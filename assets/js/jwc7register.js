$(document).ready(function(){
	console.log("!")

	$('#step2').hide();	$('#step3').hide();	$('#step4').hide();	$('#step5').hide();
	
	// $('#step2').css('opacity','0');
	// $('#step3').css('opacity','0');
	// $('#step4').css('opacity','0');
	// $('#step5').css('opacity','0');

	// $('#step1').css("transform","translateX(-100px)");​

	$('#next1').click(function(){$('#step2').addClass("active"); /*$('#step1').hide();*/ $('#step2').show(); /*$('html,body').animate({scrollTop: '300px'});*/ $('#step1').css('transform','translateX(100%)');});
	$('#next2').click(function(){$('#step3').addClass("active"); /*$('#step2').hide();*/ $('#step3').show(); /*$('html,body').animate({scrollTop: '300px'});*/ $('#step2').css('transform','translateX(100%)');});
	$('#next3').click(function(){$('#step4').addClass("active"); /*$('#step3').hide();*/ $('#step4').show(); /*$('html,body').animate({scrollTop: '300px'});*/ $('#step3').css('transform','translateX(100%)');});
	$('#next4').click(function(){$('#step5').addClass("active"); /*$('#step4').hide();*/ $('#step5').show(); /*$('html,body').animate({scrollTop: '300px'});*/ $('#step4').css('transform','translateX(100%)');});
	$('#prev2').click(function(){$('#step1').addClass("active"); $('#step1').show(); /*$('#step2').hide();*/ /*$('html,body').animate({scrollTop: '300px'});*/ $('#step2').css('transform','translateX(-100%)');});
	$('#prev3').click(function(){$('#step1').addClass("active"); $('#step2').show(); /*$('#step3').hide();*/ /*$('html,body').animate({scrollTop: '300px'});*/ $('#step3').css('transform','translateX(-100%)');});
	$('#prev4').click(function(){$('#step2').addClass("active"); $('#step3').show(); /*$('#step4').hide();*/ /*$('html,body').animate({scrollTop: '300px'});*/ $('#step4').css('transform','translateX(-100%)');});
	$('#prev5').click(function(){$('#step1').addClass("active"); $('#step4').show(); /*$('#step5').hide();*/ /*$('html,body').animate({scrollTop: '300px'});*/ $('#step5').css('transform','translateX(-100%)');});

	$('#goto1').click(function(){$('#step1').show(); $('#step2').hide(); $('#step3').hide(); $('#step4').hide(); $('#step5').hide();});	
	$('#goto2').click(function(){$('#step1').hide(); $('#step2').show(); $('#step3').hide(); $('#step4').hide(); $('#step5').hide();});	
	$('#goto3').click(function(){$('#step1').hide(); $('#step2').hide(); $('#step3').show(); $('#step4').hide(); $('#step5').hide();});	
	$('#goto4').click(function(){$('#step1').hide(); $('#step2').hide(); $('#step3').hide(); $('#step4').show(); $('#step5').hide();});	
	$('#goto5').click(function(){$('#step1').hide(); $('#step2').hide(); $('#step3').hide(); $('#step4').hide(); $('#step5').show();});		

});