<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="YWC PROFILE TEAM BLUE">
	<meta name="keywords" content="">
	<meta name="author" content="Moshikub Programmer">
	<title>YWC TEAMBLUE</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="src/cropper.css" rel="stylesheet">
	<link href="css/docs.css" rel="stylesheet">
	<style type="text/css">
		.step {
			width: 880px;
			margin: 0 auto 15px;
			display: block;
			padding: 10px;
			background-color: #f7f7f7;
			border: 1px solid #eee;
			box-shadow: inset 0 0 3px #f7f7f7;
			text-align: center;
		}
		.step h2 {
			font-size: 24px;
		}
	</style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container-fluid eg-container" id="basic-example">
		<div class="step">
			<h2>Step 1 เลือกไฟล์</h2>
			<label class="btn btn-primary" for="inputImage" title="Upload image file">
				<input class="hide" id="inputImage" name="file" type="file" accept="image/*">
				Upload
			</label>
		</div>
		<div class="step">
			<h2>Step 2 เลือกส่วนที่ต้องการนำเป็นรูปโปรไฟล์</h2>
			<div class="eg-wrapper">
				<img class="cropper" src="img/picture-1.jpg" alt="Picture">
			</div>
		</div>

		<div class="step">
			<h2>Step 3 ดูตัวอย่าง</h2>
			<div class="eg-preview clearfix">
				<div id="get_preview">
					<div class="preview preview-lg"></div>
					<div class="ywc"></div>
				</div>
			</div>
		</div>

		<div class="step">
			<h2>Step 4 กดเสร็จสิ้นเพื่อ บันทึกภาพ</h2>
			<a class="btn btn-primary" id="btnsuccess" type="button">เสร็จสิ้น</a>
		</div>
	</div>
	<div style="width:0px; height:0px; overflow:hidden;"><img src="./img/kyp.png"></div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="src/cropper.js"></script>
	<script src="js/docs.js"></script>
</body>
</html>
