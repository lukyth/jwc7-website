<!DOCTYPE html>
<html>
<head>

	<title>Junior Webmaster Camp #7</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="มาจะกล่าวบทไป.. ฤกษ์งามยามดีนี้ไซร้ จักนำมาให้ชมอีกคำรบหนึ่ง ขอป่าวประกาศลั่น! ค่ายปั้นนักพัฒนาเว็บระดับมัธยม กำลังทำการลงเสาเอก ก่อกำแพงเมือง ให้ปวงประชาจักได้สัมผัสถึงความยิ่งใหญ่ มินานเพียงชั่วเคี้ยวหมากแหลกแล้วไซร้ อันกาลใกล้จักใกล้ได้เชยชม !!">
  <meta name="keywords" content="webmaster,ค่ายไอที,ค่ายคอม,jwc,jwc7,jwc#7,junior webmaster camp,ค่ายทำเว็บ,ค่ายเว็บ">
  <meta property="og:title" content="Junior Webmaster Camp #7">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= base_url()?>">
  <meta property="og:image" content="<?= base_url()?>assets/img/fb-og.jpg">
  <meta property="og:image" content="<?= base_url()?>assets/img/fb-og-large.jpg">
  <meta property="og:image" content="<?= base_url()?>assets/img/fb-og-large-2.jpg">
  <meta property="og:image" content="<?= base_url()?>assets/img/fb-og-large-3.jpg">
  <meta property="og:image" content="<?= base_url()?>assets/img/fb-og-large-4.jpg">
  <meta property="og:site_name" content="Junior Webmaster Camp #7">
  <meta property="og:description" content="มาจะกล่าวบทไป.. ฤกษ์งามยามดีนี้ไซร้ จักนำมาให้ชมอีกคำรบหนึ่ง ขอป่าวประกาศลั่น! ค่ายปั้นนักพัฒนาเว็บระดับมัธยม กำลังทำการลงเสาเอก ก่อกำแพงเมือง ให้ปวงประชาจักได้สัมผัสถึงความยิ่งใหญ่ มินานเพียงชั่วเคี้ยวหมากแหลกแล้วไซร้ อันกาลใกล้จักใกล้ได้เชยชม !!">
  <link rel="icon" type="image/png" href="<?php echo base_url()."assets/" ?>img/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url()."assets/" ?>css/default_global.css"/>
	<link rel="stylesheet" href="<?= base_url()."assets/" ?>css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= base_url()."assets/" ?>fonts/CSPraJad.css" />
	<link rel="stylesheet" href="<?= base_url()."assets/" ?>fonts/wdb_bangna.css" />
	<link rel="stylesheet" href="<?= base_url()."assets/" ?>css/main.css" />
	<link rel="stylesheet" href="<?= base_url()."assets/" ?>css/main2.css" />

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<img class="free" src="<?=base_url()?>assets/img/main/new/free.svg" />
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-content">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="text-center">
				<div class="collapse navbar-collapse" id="navbar-content">
					<ul class="nav navbar-nav">
						<li class="home-small"><a class="page-scroll" class="page scroll" href="#page-top">หน้าหลัก</a></li>
						<li><a class="page-scroll" href="#about-page">รายละเอียดที่สมัคร</a></li>
						<li><a class="page-scroll" href="#category-page">สาขาที่สมัคร</a></li>
						<li class="home-large"><a class="page-scroll" href="#page-top"><img src="<?=base_url()?>assets/img/main/logo_2.png" style="height:20px;"></a></li>
						<li><a class="page-scroll" href="#timeline-page">กำหนดการ</a></li>
						<li><a class="page-scroll" href="#picture-page">ติดตามข่าวสาร</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="header-page">
		<div class="top-corner">
			<img class="pull-left" src="<?= base_url() ?>assets/img/main/topleft.png"/>
			<img class="pull-right" src="<?= base_url() ?>assets/img/main/topright.png"/>
		</div>
		<div class="town">
			<div class="town-back">
				<div class="back-left"></div>
				<div class="back-center"></div>
				<div class="back-right"></div>
			</div>
			<div class="town-front"></div>
		</div>
		<div class="cover-img">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2 text-center col-logo">
						<img class="img-center img-responsive logo-img" src="<?= base_url() ?>assets/img/main/new/logo.svg" />
						<div class="row">
							<div class="col-xs-12">
								<div class="sponsor-top"><img src="<?= base_url() ?>assets/img/main/new/sponsor_1.svg"></div>
								<div class="sponsor-top"><img src="<?= base_url() ?>assets/img/main/new/sponsor_2.svg"></div>
							</div>
						</div>
						<a class="page-scroll" href="#category-page">
							<div class="jumpto-register img-center img-responsive register">สมัครเลย!</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="about-page" class="page">
		<img class="boat-station" src="<?= base_url() ?>assets/img/main/new/boat_station.svg" />
		<div class="river">
			<div class="river-wave"></div>
		</div>
		<div class="boat"></div>
		<!-- <img src="<?= base_url() ?>assets/img/main/rivertop.png" style="width:100%;" /> -->
		<div class="img-rivercenter">
			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<div>
							<div class="img-center text-center">
								<img src="<?= base_url() ?>assets/img/main/looknam.png" class="looknum img-responsive" />
								<h1 class="text-center big-text">รายละเอียด</h1>
								<img src="<?= base_url() ?>assets/img/main/looknam.png" class="looknum img-responsive" />
							</div>
							<div class="img-center img-detailtext text-center">
								<h1 class="title-text">อะไรคือ JWC7</h1>
								<img class="img-center img-responsive" src="<?= base_url() ?>assets/img/main/hr_1.png" />
								<br>
								<p class="img-center normal-text desciption" style="line-height:2; margin-bottom:30px;">
								ค่ายสร้างเว็บที่จะพาน้องๆ ม.ปลาย มาเรียนรู้เทคนิคการสร้างสรรค์อย่างบรรเจิด สัมผัสประสบการณ์พิเศษผ่านกิจกรรมสนุกๆ และ Workshop จากสาขาต่างๆ พร้อมทั้งการนำเสนอผลงานกับกูรูใจดี แห่งวงการเว็บไทยมากมาย
								</p>
							</div>
							<div class="plata-2"></div>
							<img src="<?= base_url() ?>assets/img/main/plata_1.png" class="plata-1" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<img src="<?= base_url() ?>assets/img/main/riverbottom.png" style="width:100%;"></div>
	</div>

	<div id="category-page" class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<h1 class="text-center big-text">สาขา</h1>
					<img class="title img-center img-responsive" src="<?= base_url() ?>assets/img/main/hr_1.png" />
					<div class="row">
						<div class="col-md-4 text-center">
							<img src="<?= base_url() ?>assets/img/main/new/web_design.svg" class="head img-center img-responsive" />
							<div class="cat-text" style="color:#732777;">Web Design</div>
							<p class="text-center description">
								เนรมิตหน้าเว็บ โชว์สเต็ปดีไซน์ ไฉไลสไตล์เว็บสเตอร์สู่การเป็นเว็บ Design อย่างแท้จริง
							</p>
							<div class="count-box" style="background:#732777;"><?= $amount_d; ?></div>
							<a href="register/index/2"><img src="<?= base_url() ?>assets/img/main/regis.png" class="img-center img-responsive register" /></a>
						</div>
						<div class="col-md-4 text-center">
							<img src="<?= base_url() ?>assets/img/main/new/web_content.svg" class="head img-center img-responsive" />
							<div class="cat-text" style="color:#07908C;">Web Content</div>
							<p class="text-center description">
								สื่อสารถูกจริตผู้ชม ร่วมสร้างสรรค์การทำ Contenให้เฉือดเฉือนประโยคเด็ด Content ชนะใจ
							</p>
							<div class="count-box" style="background:#07908C;"><?= $amount_c; ?></div>
							<a href="register/index/1"><img src="<?= base_url() ?>assets/img/main/regis.png" class="img-center img-responsive register" /></a>
						</div>
						<div class="col-md-4 text-center">
							<img src="<?= base_url() ?>assets/img/main/new/web_marketing.svg" class="head img-center img-responsive" />
							<div class="cat-text" style="color:#E64C24;">Web Marketing</div>
							<p class="text-center description">
								เรียนรู้ศาสตร์การตลาดยุทธศาสตร์ การสร้างชื่อให้เว็บเลื่องลือระบือไกล
							</p>
							<div class="count-box" style="background:#E64C24;"><?= $amount_m; ?></div>
							<a href="register/index/3"><img src="<?= base_url() ?>assets/img/main/regis.png" class="img-center img-responsive register" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-gradient">
		<div id="sponsor-page" class="page">
			<div class="img-sponsorhead" style="width:100%;">
				<h1 class="text-center big-text">ผู้สนับสนุน</h1>
				<img style="padding-bottom:20px;" class="title img-center img-responsive" src="<?= base_url() ?>assets/img/main/hr_1.png" />
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-1 text-center">
							</div>
							<div class="col-md-5 col-xs-6 text-center">
								<img class="img-center img-responsive" src="<?= base_url() ?>assets/img/main/sponsor_large.png" />
							</div>
							<div class="col-md-5 col-xs-6 text-center">
								<img class="img-center img-responsive" src="<?= base_url() ?>assets/img/main/sponsor_large.png" />
							</div>
							<div class="col-md-1 text-center">
							</div>
							<div class="col-md-3 col-xs-4 text-center">
								<img class="img-center img-responsive" src="<?= base_url() ?>assets/img/main/sponsor_small.png" />
							</div>
							<div class="col-md-3 col-xs-4 text-center">
								<img class="img-center img-responsive" src="<?= base_url() ?>assets/img/main/sponsor_small.png" />
							</div>
							<div class="col-md-3 col-xs-4 text-center">
								<img class="img-center img-responsive" src="<?= base_url() ?>assets/img/main/sponsor_small.png" />
							</div>
							<div class="col-md-3 col-xs-4 text-center">
								<img class="img-center img-responsive" src="<?= base_url() ?>assets/img/main/sponsor_small.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="qa-page" class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">

						<div class="sentence text-center WDB_Bangna head big-text" onclick="Fold.up()" >
							<div>ถาม - ตอบ</div>
						</div>
						<div class="folded-container">
							<div class="folded">
								<div id="qa-content">
									<div class="sentence">
										<div class="chat-box text-left">
											<div><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_boy.png"><img class="arrow arrow-boy" src="<?= base_url() ?>assets/img/main/faq_boy_arrow.png"></div>
											<div class="blue">ทำไมต้องมีการเก็บค่ามัดจำ ทั้งๆ ที่ฟรีไม่เสียค่าใช้จ่าย?</div>
										</div>
										<div class="chat-box text-right">
											<div class="white text-center">เก็บเงินค่ามัดจำเพื่อเป็นการยืนยันว่าน้องๆ จะมาค่ายจริง หลังจากเข้าค่ายเสร็จจะมีการคืนเงินมัดจำครบเต็มจำนวน</div>
											<div><img class="arrow arrow-girl" src="<?= base_url() ?>assets/img/main/faq_girl_arrow.png"><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_girl.png"></div>
										</div>
									</div>
									<div class="sentence">
										<div class="chat-box text-left">
											<div><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_boy.png"><img class="arrow arrow-boy" src="<?= base_url() ?>assets/img/main/faq_boy_arrow.png"></div>
											<div class="blue">ค่ายมีการค้างคืน หรือไม่?</div>
										</div>
										<div class="chat-box text-right">
											<div class="white text-center">มีการค้างคืนที่ มหาวิทยาลัยราชภัฏจันทรเกษม 2 คืน ในวันที่ 3 และ 4 เมษายน</div>
											<div><img class="arrow arrow-girl" src="<?= base_url() ?>assets/img/main/faq_girl_arrow.png"><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_girl.png"></div>
										</div>
									</div>
									<div class="sentence">
										<div class="chat-box text-left">
											<div><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_boy.png"><img class="arrow arrow-boy" src="<?= base_url() ?>assets/img/main/faq_boy_arrow.png"></div>
											<div class="blue">ไม่มี Facebook สมัครได้ไหม?</div>
										</div>
										<div class="chat-box text-right">
											<div class="white text-center">ไม่สามารถสมัครได้ เพราะเราจะมีกลุ่มที่ใช้ในการติดต่อสื่อสารระหว่างก่อนค่ายและหลังค่าย และยังมีกลุ่มลับ JWC ซึ่งเป็นเอกลักษณ์สืบทอดกันมา ไม่มีค่ายไหนเหมือน หรือเป็นได้อย่างครอบครัว JWC</div>
											<div><img class="arrow arrow-girl" src="<?= base_url() ?>assets/img/main/faq_girl_arrow.png"><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_girl.png"></div>
										</div>
									</div>
									<div class="sentence">
										<div class="chat-box text-left">
											<div><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_boy.png"><img class="arrow arrow-boy" src="<?= base_url() ?>assets/img/main/faq_boy_arrow.png"></div>
											<div class="blue">ไม่ได้เรียน ม.ปลาย แต่เรียนอยู่ ปวช. หรือเทียบเท่าสมัครได้ไหม?</div>
										</div>
										<div class="chat-box text-right">
											<div class="white text-center">สมัครได้ ขอเพียงมีใจรัก และความตั้งใจ ลองแสดงความตั้งใจของน้องให้พี่ๆ เห็นด้วยการตอบคำถามให้ดีที่สุด เพื่อมาเป็นส่วนหนึ่งในครอบครัว JWC</div>
											<div><img class="arrow arrow-girl" src="<?= base_url() ?>assets/img/main/faq_girl_arrow.png"><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_girl.png"></div>
										</div>
									</div>
									<div class="sentence">
										<div class="chat-box text-left">
											<div><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_boy.png"><img class="arrow arrow-boy" src="<?= base_url() ?>assets/img/main/faq_boy_arrow.png"></div>
											<div class="blue">ไม่เคยทำเว็บ ทำเว็บไม่เป็น ไม่เก่งเรื่องคอม สมัครได้ไหม?</div>
										</div>
										<div class="chat-box text-right">
											<div class="white text-center">ทุกคนย่อมฝึกฝนกันได้ ขอแค่มีความพยายามที่จะเรียนรู้ พัฒนาตัวเองก่อนเข้าค่าย ควรฝึกพื้นฐานมาเล็กน้อย ก็สามารถสมัครค่ายนี้ได้แล้ว</div>
											<div><img class="arrow arrow-girl" src="<?= base_url() ?>assets/img/main/faq_girl_arrow.png"><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_girl.png"></div>
										</div>
									</div>
									<div class="sentence">
										<div class="chat-box text-left">
											<div><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_boy.png"><img class="arrow arrow-boy" src="<?= base_url() ?>assets/img/main/faq_boy_arrow.png"></div>
											<div class="blue">เมื่อไรจะประกาศผล แล้วจะทราบได้อย่างไรว่าเข้ารอบ?</div>
										</div>
										<div class="chat-box text-right">
											<div class="white text-center">จะมีรายชื่อผู้ที่ผ่านเข้าค่ายประกาศที่หน้าเว็บไซต์ และ น้องๆ สามารถเข้าสู่ระบบเพื่ออัพโหลดเอกสารยืนยันตนได้ หรืออีกช่องทางหนึ่งระบบจะทำการประกาศผลที่หน้า Wall Facebook ของน้องๆ เอง</div>
											<div><img class="arrow arrow-girl" src="<?= base_url() ?>assets/img/main/faq_girl_arrow.png"><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_girl.png"></div>
										</div>
									</div>
									<div class="sentence">
										<div class="chat-box text-left">
											<div><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_boy.png"><img class="arrow arrow-boy" src="<?= base_url() ?>assets/img/main/faq_boy_arrow.png"></div>
											<div class="blue">อยากช่วยโปรโมทค่าย ต้องทำอย่างไร?</div>
										</div>
										<div class="chat-box text-right">
											<div class="white text-center">สามารถเข้าที่หน้า Media เพื่อนำแบนเนอร์ไปโปรโมท หรือ ใช้ Hashtag #jwcth บน Social Network</div>
											<div><img class="arrow arrow-girl" src="<?= base_url() ?>assets/img/main/faq_girl_arrow.png"><img class="img-responsive icon" src="<?= base_url() ?>assets/img/main/faq_girl.png"></div>
										</div>
									</div>

									<div class="big-text sentence tail" onclick="Fold.up()" >
										<div>ถาม - ตอบ</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<img src="<?= base_url() ?>assets/img/main/timeline_top.png" style="width:100%;" />
		</div>


		<div id="timeline-page" class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h1 class="text-center big-text">กำหนดการ</h1>
						<img class="title img-center img-responsive" src="<?= base_url() ?>assets/img/main/hr_1.png" />
					</div>
				</div>
				<div class="row">
					<!-- <img class="img-center img-responsive timeline-img" src="<?= base_url() ?>assets/img/main/timeline_item.png" alt="" /> -->
					<div class="timeline">
						<div class="timeline-item">
							14 ก.พ. - 14 มี.ค. 2558
							<br>
							รับสมัคร
						</div>
						<div class="timeline-item">
							21 มี.ค. 2558
							<br>
							ประกาศผลผู้เข้ารอบ
						</div>
						<div class="timeline-item">
							22 - 28 มี.ค. 2558
							<br>
							โอนเงินค่ามัดจำ
						</div>
						<div class="timeline-item">
							3 - 5 เม.ย. 2558
							<br>
							วันค่าย JWC#7
						</div>
						<img class="timeline-fish" src="<?= base_url() ?>assets/img/main/timeline-fish.png" alt="ปลาตะเพียนสาน">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="picture-page" class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<h1 class="big-text text-center">ภาพจากปีเก่า</h1>
					<img class="title img-center img-responsive" src="<?= base_url() ?>assets/img/main/hr_1.png" />
					<div class="row">
						<div class="table-picture col-xs-12">
							<div class="row">
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/1.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/2.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/3.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/4.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/5.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/6.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/7.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/8.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/9.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/10.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/11.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/12.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/13.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/14.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/15.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/16.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/17.jpg" class="img-center img-responsive" />
								</div>
								<div class="col-lg-2 col-sm-3 col-xs-4">
									<img src="<?= base_url() ?>assets/img/main/activity/18.jpg" class="img-center img-responsive" />
								</div>
							</div>
							<div class="social text-center">
								<p>Follow JWCTH on</p>
								<a href="http://www.facebook.com/jwcth" class="shadowlink" title="JWC on Facebook" target="_blank"><img src="<?php echo base_url()."assets/" ?>img/social/fb.svg" alt="fb"></a>
								<a href="http://www.twitter.com/jwcth" class="shadowlink" title="JWC on Twitter" target="_blank"><img src="<?php echo base_url()."assets/" ?>img/social/tw.svg" alt="tw"></a>
								<a href="http://www.instagram.com/jwcth" class="shadowlink" title="JWC on Instagram" target="_blank"><img src="<?php echo base_url()."assets/" ?>img/social/ig.svg" alt="ig"></a>
								<a href="https://www.youtube.com/channel/UCvoljJxOdeqTlguPsh9nHVg" class="shadowlink" title="YWC YouTube Channel" target="_blank"><img src="<?php echo base_url()."assets/" ?>img/social/yt.svg" alt="yt"></a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/oridomi.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/main.js"></script>
</body>
</html>
