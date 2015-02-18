<!doctype html>
<html>
<head>
	<title>Junior Webmaster Camp #7 | สมัครสมาชิก</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url()."assets/" ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/" ?>css/jwc7register.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/" ?>fonts/csprajad.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/" ?>fonts/wdb_bangna.css">
	<script src="<?php echo base_url()."assets/" ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url()."assets/" ?>js/jwc7register.js"></script>
	<link rel="icon" type="image/png" href="<?php echo base_url()."assets/" ?>img/favicon.png">
</head>
<body>
	<div class="row" id="head">
		<div class="container-fluid txt-center">
			<div class="col-xs-12">
				<img class="hidden-xs" src="<?php echo base_url()."assets/" ?>img/mascot_mkt.svg">
				<a href="http://jwc.in.th"><img src="<?php echo base_url()."assets/" ?>img/logo.svg" alt="logo" id="logo"></a>
			</div>
		</div>
	</div>
	<div class="row" id="body">
		<div class="container-fluid txt-center">
			<div class="col-xs-12">
			<div class="row marketing" id="form-head">
				<div class="col-xs-10 col-xs-offset-1">
					<h1>สมัครเข้าค่าย JWC7</h1>
					<hr>
					<h2>Web Marketing</h2>
				</div>
			</div>
			<div class="row" id="loginspace">
				<h2>สมัครเสร็จสิ้น!</h2>
				<div>ขอบคุณที่เข้ามาร่วมสมัครค่าย JWC7 นะ<br>อย่าลืมลากเพื่อนมากันเยอะๆด้วยน้า~<div>
				<br>
				<a id="share" href="#" class="btn btn-primary btn-lg">แชร์ลง Facebook</a>
				<a href="http://jwc.in.th" class="btn btn-success btn-lg">กลับหน้าแรก</a>
			</div>

		</div>
		</div>
	</div>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-59770266-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script>
$('#share').on('click', function(e){
	e.preventDefault();
	var left = (screen.width/2)-270;
	var top = (screen.height/2)-150;
	window.open('https://www.facebook.com/dialog/feed?app_id=1540852432838036&link=http%3A%2F%2Fwww.jwc.in.th%2Fjwc7%2F&redirect_uri=http%3A%2F%2Fwww.jwc.in.th%2Fjwc7%2Fassets%2Fclose.html&display=popup&description=' + <?=json_encode($register)?> + '%20%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%84%E0%B8%B1%E0%B8%94%E0%B9%80%E0%B8%A5%E0%B8%B7%E0%B8%AD%E0%B8%81%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%8A%E0%B8%B2%E0%B8%A7%20%23SiamWebster%20%E0%B8%93%20%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B8%A2%20Junior%20Webmaster%20Camp%20%E0%B8%84%E0%B8%A3%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B8%97%E0%B8%B5%E0%B9%88%207%20%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7%20%E0%B9%83%E0%B8%84%E0%B8%A3%E0%B9%83%E0%B8%84%E0%B8%A3%E0%B9%88%E0%B8%88%E0%B8%B0%E0%B8%A1%E0%B8%B2%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A3%E0%B9%88%E0%B8%A7%E0%B8%A1%20%23JWC7%20%E0%B8%88%E0%B8%87%E0%B9%80%E0%B8%A3%E0%B9%88%E0%B8%87%E0%B8%95%E0%B8%B2%E0%B8%A1%E0%B8%A1%E0%B8%B2%E0%B9%80%E0%B8%96%E0%B8%B4%E0%B8%94', 'share_wnd', 'width=540,height=320,menubar=no,toolbar=no,status=no,centerscreen=yes,top='+top+',left='+left);
});
	</script>
</body>
</html>