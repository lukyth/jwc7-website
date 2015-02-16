$(document).ready(function(){

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

	var move = function(target, dir){
		var current = $(target).closest('.stepitem');
		current.hide();
		var next = current[dir ? 'next' : 'prev']().show();
		$('html,body').animate({scrollTop: '300px'});
		$('.goto.active').removeClass('active');
		$('.goto').eq(next.data('step')-1).addClass('active');

		if(dir){
			tmp_submit();
		}
	};

	$('.nextbtn').click(function(){
		move(this, true);
	});
	$('.prevbtn').click(function(){
		move(this, false);
	});
	$('.stepitem:gt(0)').hide();
	$('.goto:eq(0)').addClass('active');
	$('.goto').each(function(index){
		$(this).on('click', function(){
			$('.stepitem:visible').hide();
			$('.stepitem').eq(index).show();
			$('.goto.active').removeClass('active');
			$('.goto').eq(index).addClass('active');
		});
	});

	$("#error_log p:not(:first)").hide();
	$("#error_log p.show").show();

	$('.hascounter[maxlength]').each(function(){
		var maxlength = this.getAttribute('maxlength');
		var el = $('<div class="lengthcounter"></div>').text(maxlength - this.value.length).insertAfter(this);
		$(this).on('keyup', function(){
			el.text(Math.max(0, maxlength - this.value.length));
		});
	});

});

function show_log( txt ) {
	$(".log").html( txt ).show();
	setTimeout( function() {
		$(".log").hide();
	}, 3000 );
}

function real_submit() {
	if(!confirm('หากกดตกลงจะไม่สามารถแก้ไขใบสมัครได้อีก')){
		return;
	}
	var raw = $("#mainform").attr("action");
	var base = raw.split("/");
	base[ base.length-1 ] = "submit";
	$("#mainform").attr("action",base.join("/"));
	console.log( base.join("/") );
	$("#mainform").submit();
}

function init( can_edit,redirect,data ) {
	for( var i=0; i<data.length; i++ ) {
		if( ["inputAddress","inputQ1","inputQ2","inputQ3","inputQ4","inputQ5"].indexOf(data[i][0]) != -1 ) {
			var el = $("#"+data[i][0]).val( data[i][1].split("\\n").join("\n") );

			if(el.hasClass('hascounter')){
				el.trigger('keyup');
			}
		} else if( data[i][0] == "inputKnowFrom" ) {
			if( !( new RegExp("Facebook|Twitter|PR|Friend").test( data[i][1] ) ) ) {
				$("#inputKnowFrom").val("etc");
				$("#inputKnowFromEtc").val( data[i][1] );
			} else {
				$("#inputKnowFrom").val( data[i][1] );
			}
		} else {
			$("#"+data[i][0]).val( data[i][1] );
		}
	}

	if( !can_edit ) {
		for( var i=0; i<data.length; i++ ) {
			if( ["inputQ1","inputQ2","inputQ3","inputQ4","inputQ5"].indexOf(data[i][0]) == -1 ) {
				$("#"+data[i][0]).prop('disabled', 'disabled');
			}
		}
		$("#inputKnowFromEtc").prop("disabled",'disabled');
		$("#goto3").click();
		$(".tmp_saved_btn").hide();
	} else {
		$(".cant_edit_message").hide();
	}

	if( redirect != "" ) {
		if( redirect == "5" ) {
			$('.stepitem:visible').hide();
			$('#step5').show();
			$('.goto.active').removeClass('active');
		} else {
			$("#goto"+redirect).click();
		}
	}

	if( $.trim($("#error_log").text()).length != 0 ) {
		$("#step5 .show_validation").show();
		$("#step5 .show_info").hide();
	} else {
		$("#step5 .show_validation").hide();
		$("#step5 .show_info").show();
	}
}