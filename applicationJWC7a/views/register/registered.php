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
			<div class="col-sm-12">
				<a href="http://jwc.in.th"><img src="<?php echo base_url()."assets/" ?>img/logo.svg" alt="logo" id="logo"></a>
			</div>
		</div>
	</div>
	<div class="row" id="body">
		<div class="container-fluid txt-center">
			<div class="col-xs-12">
			<div class="row content" id="form-head">
				<div class="col-sm-10 col-sm-offset-1">
					<h1 style="margin-bottom:30px;">สมัครเข้าค่าย JWC7</h1>
				</div>
			</div>
			<div class="row" id="loginspace">
				<h2>ขออภัยน้า</h2>
				<p>Facebook <?=html_escape($user['name'])?> ได้สมัคร JWC7 สาขา <?=$major?> ไปแล้วจ้า~</p>
				<p>ต้องการแก้ไขอะไร ติดต่อพี่ๆ ที่เพจ <a href="https://www.facebook.com/jwcth">Junior Webmaster Camp</a> ได้เลย</p>
				<br>
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
</body>
</html>