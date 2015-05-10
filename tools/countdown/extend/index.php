<!doctype html>
<html>
<head>
	<title>Junior Webmaster Camp #7 – Coming Soon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/jwc7_countdown.css">
	<link rel="stylesheet" type="text/css" href="../fonts/wdb_bangna.css">
	<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.downCount_hms.js"></script>
	<link rel="icon" type="image/png" href="../img/favicon.png">
</head>
<body>
	<div style="display:table-cell;vertical-align:middle;width:100vw;height:100vh;">
		<div style="margin:0 auto;" class="txt-center">
			<img src="../img/logo.svg" alt="logo" class="txt-center" id="logo" style="width:200px">
			<br>
			<ul class="countdown">
				<!-- <li>
					<span class="days">00</span>
					<p>วัน</p>
				</li>
					<li class="seperator">.</li> -->
				<li>
					<span class="hours">00</span>
					<p>ชั่วโมง</p>
				</li>
				<li class="seperator">:</li>
				<li>
					<span class="minutes">00</span>
					<p>นาที</p>
				</li>
					<li class="seperator">:</li>
				<li>
					<span class="seconds">00</span>
					<p>วินาที</p>
				</li>
			</ul>
			<h1 class="hidden" id="timesup">-หมดเวลา-</h1>
		</div>
	</div>

	<script class="source" type="text/javascript">
		$('.countdown').downCount({
			date: '05/03/2015 18:15:00',
			// date: '4/29/2015 23:47:35',
			offset: +7
		},
			function () {
				$('#timesup').removeClass('hidden');
				$('.countdown').addClass('hidden');
		});
	</script>
</body>
</html>