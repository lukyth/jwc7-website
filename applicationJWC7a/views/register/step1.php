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
	<!--<script src="js/jwc7register.js"></script> -->
	<script src="<?php echo base_url()."assets/" ?>js/jwc7register_quick.js"></script>
	<link rel="icon" type="image/png" href="<?php echo base_url()."assets/" ?>img/favicon.png">
</head>
<body>
	<div class="row" id="head">
		<div class="container-fluid txt-center">
			<div class="col-sm-12">
				<!-- <img src="img/mascot_mkt.svg" class="hidden-xs" id="mascot-marketing"> -->
				<!-- <img src="img/mascot_ct.svg" class="hidden-xs" id="mascot-content"> -->
				<img src="<?php echo base_url()."assets/" ?>img/mascot_ds.svg" class="hidden-xs" id="mascot-design">
				<a href="http://jwc.in.th"><img src="<?php echo base_url()."assets/" ?>img/logo.svg" alt="logo" id="logo"></a>
			</div>
		</div>
	</div>
	<div class="row" id="body">
		<div class="container-fluid txt-center">
			<div class="row design" id="form-head">
				<div class="col-sm-10 col-sm-offset-1">
					<h1>สมัครเข้าค่าย JWC7</h1>
					<hr>
					<h2>Web Design</h2>
				</div>
			</div>
			<div class="row" id="form-progress">
				<div class="col-sm-12">
					<div id="goto1">1. ข้อมูลส่วนตัว</div><div id="goto2">2. ข้อมูลเกี่ยวกับค่าย</div><div id="goto3">3. คำถามคัดเลือก</div><div id="goto4">4. คำถามประจำสาขา</div><div id="goto5">5. ตรวจสอบข้อมูล</div>
				</div>
			</div>
			<?php echo form_open('register/step1/'.$type) ?>
			<div class="row" id="regisform">

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step1">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>ข้อมูลส่วนตัว</h2>
						<hr>
						<!-- <div class="row fbprofile">
							<div class="fbpic"></div>
							<h2>Thanawit Tae Prasongpongchai</h2>
						</div> -->
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ชื่อ-นามสกุล*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="ชื่อ นามสกุล" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="nickname">ชื่อเล่น*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="nickname" class="form-control" placeholder="ชื่อเล่น" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">เพศ*</label>
							</div>
							<div class="col-sm-9">
								<select id="level" class="form-control">
									<option>เลือกเพศ</option>
									<option>ชาย</option>
									<option>หญิง</option>
								</select>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">รหัสประจำตัวประชาชน*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="xxxxxxxxxxxxx" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">สถานศึกษา*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="โรงเรียน....." required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ระดับการศึกษา*</label>
							</div>
							<div class="col-sm-9">
								<select id="level" class="form-control">
									<option>เลือกระดับชั้น</option>
									<option>ม.4</option>
									<option>ม.5</option>
									<option>ม.6</option>
								</select>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">เบอร์โทรศัพท์*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="08x-xxx-xxxx"></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ที่อยู่*</label>
							</div>
							<div class="col-sm-9">
								<textarea id="name" class="form-control"  placeholder="ที่อยู่"></textarea>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">จังหวัด*</label>
							</div>
							<div class="col-sm-9">
								<select id="level" class="form-control">
									<option>เลือกจังหวัด</option>
									<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
						      <option value="กระบี่">กระบี่ </option>
						      <option value="กาญจนบุรี">กาญจนบุรี </option>
						      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
						      <option value="กำแพงเพชร">กำแพงเพชร </option>
						      <option value="ขอนแก่น">ขอนแก่น</option>
						      <option value="จันทบุรี">จันทบุรี</option>
						      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
						      <option value="ชัยนาท">ชัยนาท </option>
						      <option value="ชัยภูมิ">ชัยภูมิ </option>
						      <option value="ชุมพร">ชุมพร </option>
						      <option value="ชลบุรี">ชลบุรี </option>
						      <option value="เชียงใหม่">เชียงใหม่ </option>
						      <option value="เชียงราย">เชียงราย </option>
						      <option value="ตรัง">ตรัง </option>
						      <option value="ตราด">ตราด </option>
						      <option value="ตาก">ตาก </option>
						      <option value="นครนายก">นครนายก </option>
						      <option value="นครปฐม">นครปฐม </option>
						      <option value="นครพนม">นครพนม </option>
						      <option value="นครราชสีมา">นครราชสีมา </option>
						      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
						      <option value="นครสวรรค์">นครสวรรค์ </option>
						      <option value="นราธิวาส">นราธิวาส </option>
						      <option value="น่าน">น่าน </option>
						      <option value="นนทบุรี">นนทบุรี </option>
						      <option value="บึงกาฬ">บึงกาฬ</option>
						      <option value="บุรีรัมย์">บุรีรัมย์</option>
						      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
						      <option value="ปทุมธานี">ปทุมธานี </option>
						      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
						      <option value="ปัตตานี">ปัตตานี </option>
						      <option value="พะเยา">พะเยา </option>
						      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
						      <option value="พังงา">พังงา </option>
						      <option value="พิจิตร">พิจิตร </option>
						      <option value="พิษณุโลก">พิษณุโลก </option>
						      <option value="เพชรบุรี">เพชรบุรี </option>
						      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
						      <option value="แพร่">แพร่ </option>
						      <option value="พัทลุง">พัทลุง </option>
						      <option value="ภูเก็ต">ภูเก็ต </option>
						      <option value="มหาสารคาม">มหาสารคาม </option>
						      <option value="มุกดาหาร">มุกดาหาร </option>
						      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
						      <option value="ยโสธร">ยโสธร </option>
						      <option value="ยะลา">ยะลา </option>
						      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
						      <option value="ระนอง">ระนอง </option>
						      <option value="ระยอง">ระยอง </option>
						      <option value="ราชบุรี">ราชบุรี</option>
						      <option value="ลพบุรี">ลพบุรี </option>
						      <option value="ลำปาง">ลำปาง </option>
						      <option value="ลำพูน">ลำพูน </option>
						      <option value="เลย">เลย </option>
						      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
						      <option value="สกลนคร">สกลนคร</option>
						      <option value="สงขลา">สงขลา </option>
						      <option value="สมุทรสาคร">สมุทรสาคร </option>
						      <option value="สมุทรปราการ">สมุทรปราการ </option>
						      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
						      <option value="สระแก้ว">สระแก้ว </option>
						      <option value="สระบุรี">สระบุรี </option>
						      <option value="สิงห์บุรี">สิงห์บุรี </option>
						      <option value="สุโขทัย">สุโขทัย </option>
						      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
						      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
						      <option value="สุรินทร์">สุรินทร์ </option>
						      <option value="สตูล">สตูล </option>
						      <option value="หนองคาย">หนองคาย </option>
						      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
						      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
						      <option value="อุดรธานี">อุดรธานี </option>
						      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
						      <option value="อุทัยธานี">อุทัยธานี </option>
						      <option value="อุบลราชธานี">อุบลราชธานี</option>
						      <option value="อ่างทอง">อ่างทอง </option>
						      <option value="อื่นๆ">อื่นๆ</option>
								</select>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">รหัสไปรษณีย์*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="xxxxx"></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">e-mail*</label>
							</div>
							<div class="col-sm-9">
								<input type="email" id="name" class="form-control" placeholder="jwc7@example.com"></input>
							</div>
						</div>

						<br>
						<div class="txt-center">
							<div class="btn btn-design btn-lg"id="next1">บันทึกและไปต่อ &raquo;</div>
						</div>
					</div>
				</div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step2">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>ข้อมูลเกี่ยวกับค่าย</h2>
						<hr>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">รู้จักค่ายจากที่ไหน?*</label>
							</div>
							<div class="col-sm-9">
								<select class="form-control">
									<option>กรุณาเลือก</option>
									<option>Facebook</option>
									<option>Twitter</option>
									<option>โปสเตอร์ประชาสัมพันธ์</option>
									<option>เพื่อน/คนรู้จัก</option>
									<option>อื่นๆ (โปรดระบุ)</option>
								</select>
								<input type="text" id="name" class="form-control"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ไซส์เสื้อ*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name" placeholder="ประเภทอาหารพิเศษ เช่น อาหารฮาลาล มังสวิรัติ เจ ฯลฯ">ประเภทอาหาร</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="ประเภทอาหารพิเศษ เช่น อาหารฮาลาล มังสวิรัติ เจ ฯลฯ"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">อาหารที่แพ้</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="อาหารที่แพ้"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">โรคประจำตัว</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="โรคประจำตัว"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ยาที่แพ้</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="name" class="form-control" placeholder="ยาที่แพ้"></input>
							</div>
						</div>

						<br>
						<div class="txt-center">
							<div class="btn btn-design btn-lg" id="prev2">&laquo; หน้าที่แล้ว</div>
							<div class="btn btn-design btn-lg" id="next2">บันทึกและไปต่อ &raquo;</div>
						</div>
					</div>
				</div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step3">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>คำถามคัดเลือก</h2>
						<hr>
						<div class="row form-field txt-left">
							<label for="name">1. ในมุมมองของน้อง เว็บไซต์คืออะไร และเว็บไซต์ที่ดีควรมีลักษณะอย่างไร?</label>
							<textarea id="name" class="form-control" rows="7"></textarea>
						</div>

						<div class="row form-field txt-left">
							<label for="name">2. ในปัจจุบันนี้ น้องคิดว่าเว็บไซต์มีอิทธิพลต่อคนไทยอย่างไร และเว็บไซต์ที่เหมาะสมสำหรับคนไทยควรเป็นอย่างไร?</label>
							<textarea id="name" class="form-control" rows="7"></textarea>
						</div>

						<br>
						<div class="txt-center">
							<div class="btn btn-design btn-lg" id="prev3">&laquo; หน้าที่แล้ว</div>
							<div class="btn btn-design btn-lg" id="next3">บันทึกและไปต่อ &raquo;</div>
						</div>
					</div>
				</div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step4">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>คำถามประจำสาขา</h2>
						<hr>
						<div class="row form-field txt-left">
							<label for="name">1. หากน้องถูกจ้างให้เค้าไปเป็นตำแหน่ง ดูแลการขาย ในสภาวะการเงินของบริษัทย่ำแย่ น้องคิดว่า จะช่วยดึงดูดลูกค้า และชนะคู่แข่งได้โดยวิธีใดบ้าง (สามารถเลือกประเภทธุรกิจเองได้)</label>
							<textarea id="name" class="form-control" rows="7"></textarea>
						</div>

						<div class="row form-field txt-left">
							<label for="name">2. หากมีโครงการจากรัฐ ต้องการสนับสนุนให้สินค้าไทย ส่งออกนอก จะทำอย่างไร ที่จะตีตลาด ให้ทั่วโลก รู้จักความเป็นไทย น้องคิดว่า มีสิ่งใดเป็นจุดขาย อย่างแท้จริง และจะโปรโมทให้ชาวต่างชาติรู้ ด้วยวิธีไหนบ้าง</label>
							<textarea id="name" class="form-control" rows="7"></textarea>
						</div>

						<br>
						<div class="txt-center">
							<div class="btn btn-design btn-lg" id="prev4">&laquo; หน้าที่แล้ว</div>
							<!-- <div class="btn btn-design btn-lg" id="next4">บันทึกและไปต่อ &raquo;</div> -->
							<button type="submit" class="btn btn-finished btn-lg" id="finished">เสร็จสิ้น</button>
							<?php
									echo validation_errors();
									if(isset($result)) echo $result;
							?>
						</div>
					</div>
				</div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<!-- <div id="step5">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>ตรวจสอบข้อมูล</h2>
						<hr>
						<h3>ข้อมูลส่วนตัว</h3>
						<table class="table txt-center">
							<tr>
								<th>ชื่อ-นามสกุล</th>
								<td>นายสมมติ ไม่ทราบนามสกุล</td>
							</tr>
							<tr>
								<th>ชื่อเล่น</th>
								<td>ซัพโพส</td>
							</tr>
							<tr>
								<th>รหัสประจำตัวประชาชน</th>
								<td>1234567890123</td>
							</tr>
							<tr>
								<th>สถานศึกษา</th>
								<td>โรงเรียนสมมติวิทยา ฝ่ายมัธยม</td>
							</tr>
							<tr>
								<th>ระดับศึกษา</th>
								<td>ม.4</td>
							</tr>
							<tr>
								<th>เบอร์โทรศัพท์</th>
								<td>081-234-5678</td>
							</tr>
							<tr>
								<th>ที่อยู่</th>
								<td>123 ถนนสมมติโร้ด แขวงสมมติแขวง ไม่ทราบเขต</td>
							</tr>
							<tr>
								<th>จังหวัด</th>
								<td>กรุงเทพมหานคร</td>
							</tr>
							<tr>
								<th>รหัสไปรษณีย์</th>
								<td>12345</td>
							</tr>
						</table>
						<hr>
						<h3>ข้อมูลเกี่ยวกับค่าย</h3>
						<table class="table txt-center">
							<tr>
								<th>รู้จักค่ายจาก</th>
								<td>เพจ facebook</td>
							</tr>
							<tr>
								<th>ไซส์เสื้อ</th>
								<td>L</td>
							</tr>
							<tr>
								<th>ประเภทอาหาร</th>
								<td>ทั่วไป</td>
							</tr>
							<tr>
								<th>อาหารที่แพ้</th>
								<td>-</td>
							</tr>
							<tr>
								<th>โรคประจำตัว</th>
								<td>-</td>
							</tr>
							<tr>
								<th>ยาทีแพ้</th>
								<td>-</td>
							</tr>
						</table>
						<hr>
						<h3>คำถามคัดเลือก</h3>
						<br>
						<div class="txt-left">
							<b>1. ในมุมมองของน้อง เว็บไซต์คืออะไร และเว็บไซต์ที่ดีควรมีลักษณะอย่างไร?</b>
							<br>
							<br>
							<p>ไรเฟิลเอฟเฟ็กต์แฟนซีแทงกั๊กโกลด์ สโลว์ เคลมแจ๊กพ็อตวาไรตี้คีตปฏิภาณอุเทน แรงดูดเทรลเลอร์ รีไทร์แฟนซี ว้อดก้าวิลล์ สปิริต ทาวน์โต๊ะจีน ภูมิทัศน์แมคเคอเรลทัวร์ รากหญ้า ธรรมา เอ๋อลีเมอร์จิ๊กโก๋ ซี้ นรีแพทย์หมิง เปปเปอร์มินต์อิเลียดติ่มซำ สเตริโอ</p>
							<br>
							<b>2. ในปัจจุบันนี้ น้องคิดว่าเว็บไซต์มีอิทธิพลต่อคนไทยอย่างไร และเว็บไซต์ที่เหมาะสมสำหรับคนไทยควรเป็นอย่างไร?</b>
							<br>
							<br>
							<p>ไรเฟิลเอฟเฟ็กต์แฟนซีแทงกั๊กโกลด์ สโลว์ เคลมแจ๊กพ็อตวาไรตี้คีตปฏิภาณอุเทน แรงดูดเทรลเลอร์ รีไทร์แฟนซี ว้อดก้าวิลล์ สปิริต ทาวน์โต๊ะจีน ภูมิทัศน์แมคเคอเรลทัวร์ รากหญ้า ธรรมา เอ๋อลีเมอร์จิ๊กโก๋ ซี้ นรีแพทย์หมิง เปปเปอร์มินต์อิเลียดติ่มซำ สเตริโอ</p>
						</div>
						<hr>
						<h3>คำถามประจำสาขา</h3>
						<br>
						<div class="txt-left">
							<b>1. หากน้องถูกจ้างให้เค้าไปเป็นตำแหน่ง ดูแลการขาย ในสภาวะการเงินของบริษัทย่ำแย่ น้องคิดว่า จะช่วยดึงดูดลูกค้า และชนะคู่แข่งได้โดยวิธีใดบ้าง (สามารถเลือกประเภทธุรกิจเองได้)</b>
							<br>
							<br>
							<p>ไรเฟิลเอฟเฟ็กต์แฟนซีแทงกั๊กโกลด์ สโลว์ เคลมแจ๊กพ็อตวาไรตี้คีตปฏิภาณอุเทน แรงดูดเทรลเลอร์ รีไทร์แฟนซี ว้อดก้าวิลล์ สปิริต ทาวน์โต๊ะจีน ภูมิทัศน์แมคเคอเรลทัวร์ รากหญ้า ธรรมา เอ๋อลีเมอร์จิ๊กโก๋ ซี้ นรีแพทย์หมิง เปปเปอร์มินต์อิเลียดติ่มซำ สเตริโอ</p>
							<br>
							<b>2. หากมีโครงการจากรัฐ ต้องการสนับสนุนให้สินค้าไทย ส่งออกนอก จะทำอย่างไร ที่จะตีตลาด ให้ทั่วโลก รู้จักความเป็นไทย น้องคิดว่า มีสิ่งใดเป็นจุดขาย อย่างแท้จริง และจะโปรโมทให้ชาวต่างชาติรู้ ด้วยวิธีไหนบ้าง</b>
							<br>
							<br>
							<p>ไรเฟิลเอฟเฟ็กต์แฟนซีแทงกั๊กโกลด์ สโลว์ เคลมแจ๊กพ็อตวาไรตี้คีตปฏิภาณอุเทน แรงดูดเทรลเลอร์ รีไทร์แฟนซี ว้อดก้าวิลล์ สปิริต ทาวน์โต๊ะจีน ภูมิทัศน์แมคเคอเรลทัวร์ รากหญ้า ธรรมา เอ๋อลีเมอร์จิ๊กโก๋ ซี้ นรีแพทย์หมิง เปปเปอร์มินต์อิเลียดติ่มซำ สเตริโอ</p>
						</div>
					</div>
					<br>
					<div class="txt-center">
						<div class="btn btn-design btn-lg" id="prev5">&laquo; หน้าที่แล้ว</div>
						<button type="submit" class="btn btn-finished btn-lg" id="finished">เสร็จสิ้น</button>
					</div>
				</div> -->

			</div>
			</form>
		</div>
	</div>
</body>
</html>