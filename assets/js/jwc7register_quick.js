$(document).ready(function(){
	console.log("!")

	active1();

	$('#step2').hide();
	$('#step3').hide();
	$('#step4').hide();
	$('#step5').hide();
	
	// $('#step2').css('opacity','0');
	// $('#step3').css('opacity','0');
	// $('#step4').css('opacity','0');
	// $('#step5').css('opacity','0');

	// $('#step1').css("transform","translateX(-100px)");​

	if($(window).width() < 900){
		$('#goto1').html('1');
		$('#goto2').html('2');
		$('#goto3').html('3');
		$('#goto4').html('4');
		$('#goto5').html('5');
	}

	$(window).resize(function(){
		if($(window).width() < 900){
			$('#goto1').html('1');
			$('#goto2').html('2');
			$('#goto3').html('3');
			$('#goto4').html('4');
			$('#goto5').html('5');
		}
		else{
			$('#goto1').html('1. ข้อมูลส่วนตัว');
			$('#goto2').html('2. ข้อมูลเกี่ยวกับค่าย');
			$('#goto3').html('3. คำถามคัดเลือก');
			$('#goto4').html('4. คำถามประจำสาขา');
			$('#goto5').html('5. ตรวจสอบข้อมูล');
		}
	});

	$('#next1').click(function(){active2(); $('#step1').hide(); $('#step2').show(); $('html,body').animate({scrollTop: '300px'});});
	$('#next2').click(function(){active3(); $('#step2').hide(); $('#step3').show(); $('html,body').animate({scrollTop: '300px'});});
	$('#next3').click(function(){active4(); $('#step3').hide(); $('#step4').show(); $('html,body').animate({scrollTop: '300px'});});
	$('#next4').click(function(){active5(); $('#step4').hide(); $('#step5').show(); $('html,body').animate({scrollTop: '300px'});});
	$('#prev2').click(function(){active1(); $('#step1').show(); $('#step2').hide(); $('html,body').animate({scrollTop: '300px'});});
	$('#prev3').click(function(){active2(); $('#step2').show(); $('#step3').hide(); $('html,body').animate({scrollTop: '300px'});});
	$('#prev4').click(function(){active3(); $('#step3').show(); $('#step4').hide(); $('html,body').animate({scrollTop: '300px'});});
	$('#prev5').click(function(){active4(); $('#step4').show(); $('#step5').hide(); $('html,body').animate({scrollTop: '300px'});});

	$('#goto1').click(function(){active1(); $('#step1').show(); $('#step2').hide(); $('#step3').hide(); $('#step4').hide(); $('#step5').hide();});	
	$('#goto2').click(function(){active2(); $('#step1').hide(); $('#step2').show(); $('#step3').hide(); $('#step4').hide(); $('#step5').hide();});	
	$('#goto3').click(function(){active3(); $('#step1').hide(); $('#step2').hide(); $('#step3').show(); $('#step4').hide(); $('#step5').hide();});	
	$('#goto4').click(function(){active4(); $('#step1').hide(); $('#step2').hide(); $('#step3').hide(); $('#step4').show(); $('#step5').hide();});	
	$('#goto5').click(function(){active5(); $('#step1').hide(); $('#step2').hide(); $('#step3').hide(); $('#step4').hide(); $('#step5').show();});		

	$("#error_log p:not(:first)").hide();

});

function active1(){
	$('#goto1').addClass("active");

	$('#goto2').removeClass("active");
	$('#goto3').removeClass("active");
	$('#goto4').removeClass("active");
	$('#goto5').removeClass("active");
}

function active2(){
	$('#goto2').addClass("active");

	$('#goto1').removeClass("active");
	$('#goto3').removeClass("active");
	$('#goto4').removeClass("active");
	$('#goto5').removeClass("active");
}

function active3(){
	$('#goto3').addClass("active");

	$('#goto2').removeClass("active");
	$('#goto1').removeClass("active");
	$('#goto4').removeClass("active");
	$('#goto5').removeClass("active");
}

function active4(){
	$('#goto4').addClass("active");

	$('#goto2').removeClass("active");
	$('#goto3').removeClass("active");
	$('#goto1').removeClass("active");
	$('#goto5').removeClass("active");
}

function active5(){
	$('#goto5').addClass("active");

	$('#goto2').removeClass("active");
	$('#goto3').removeClass("active");
	$('#goto4').removeClass("active");
	$('#goto1').removeClass("active");
}