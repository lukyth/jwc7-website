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
				<img class="hidden-xs" src="<?php echo base_url()."assets/" ?>img/mascot_ct.svg">
				<a href="http://jwc.in.th"><img src="<?php echo base_url()."assets/" ?>img/logo.svg" alt="logo" id="logo"></a>
			</div>
		</div>
	</div>
	<div class="row" id="body">
		<div class="container-fluid txt-center">
			<div class="col-xs-12">
			<div class="row content" id="form-head">
				<div class="col-xs-10 col-xs-offset-1">
					<h1>สมัครเข้าค่าย JWC7</h1>
					<hr>
					<h2>Web Content</h2>
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
window.fbAsyncInit = function() {
	FB.init({
		appId: '1540852432838036',
		version: 'v2.1'
	});
	$('#share').on('click', function(e){
		e.preventDefault();
		FB.ui({
			method: 'feed',
			link: 'http://www.jwc.in.th/jwc7/',
			name: 'Junior Webmaster Camp 7',
			description : <?=json_encode($register)?> + ' ได้สมัครเข้าคัดเลือกเป็นชาว #SiamWebster ณ ค่าย Junior Webmaster Camp ครั้งที่ 7 แล้ว ใครใคร่จะมาเข้าร่วม #JWC7 จงเร่งตามมาเถิด',
			redirect_uri: 'http://www.jwc.in.th/jwc7/'
		}, function(){});
	});
};

(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	</script>
</body>
</html>