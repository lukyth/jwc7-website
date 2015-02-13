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
				<img src="<?php echo base_url()."assets/" ?>img/mascot_ds.svg">
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
					<div id="goto1">1. ข้อมูลส่วนตัว</div><div id="goto2">2. ข้อมูลเกี่ยวกับค่าย</div><div id="goto3">3. คำถามคัดเลือก</div><div id="goto4">4. คำถามประจำสาขา</div><!-- <div id="goto5">5. ตรวจสอบข้อมูล</div> -->
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
								<label for="name">ชื่อ*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputName" class="form-control" placeholder="ชื่อ นามสกุล" name="inputName" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">นามสกุล*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputSurname" class="form-control" placeholder="ชื่อ นามสกุล" name="inputSurname" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="nickname">ชื่อเล่น*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputNickname" class="form-control" placeholder="ชื่อเล่น" name="inputNickname" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">เพศ*</label>
							</div>
							<div class="col-sm-9">
								<select id="level" class="form-control" id="inputSex" name="inputSex">
									<option>เลือกเพศ</option>
									<option value="1">ชาย</option>
									<option value="2">หญิง</option>
								</select>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">รหัสประจำตัวประชาชน*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputNational_ID" class="form-control" placeholder="xxxxxxxxxxxxx" name="inputNational_ID" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">สถานศึกษา*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputSchool" class="form-control" placeholder="โรงเรียน....."  name="inputSchool" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ระดับการศึกษา*</label>
							</div>
							<div class="col-sm-9">
								<select id="level" class="form-control" id="inputGrade" name="inputGrade">
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
								<input type="text" id="inputPhone" class="form-control" placeholder="08x-xxx-xxxx" name="inputPhone"></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ที่อยู่*</label>
							</div>
							<div class="col-sm-9">
								<textarea id="inputAddress" class="form-control"  placeholder="ที่อยู่" name="inputAddress"></textarea>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">จังหวัด*</label>
							</div>
							<div class="col-sm-9">
								<select id="level" class="form-control" id="inputProvince" name="inputProvince">
									<option>เลือกจังหวัด</option>
									<option>กรุงเทพมหานคร</option>
								</select>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">รหัสไปรษณีย์*</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputPostalCode" class="form-control" placeholder="xxxxx" name="inputPostalCode"></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">e-mail</label>
							</div>
							<div class="col-sm-9">
								<input type="email" id="inputEmail" class="form-control" placeholder="jwc7@example.com" name="inputEmail"></input>
							</div>
						</div>

						<br>
						<div class="txt-center">
							<div type = 'submit' class="btn btn-primary btn-lg"id="next1">บันทึกและไปต่อ &raquo;</div>
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
								<select class="form-control" id="inputKnowFrom" name="inputKnowFrom">
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
								<input type="text" id="inputSizeShirt" class="form-control" name="inputSizeShirt"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name" placeholder="ประเภทอาหารพิเศษ เช่น อาหารฮาลาล มังสวิรัติ เจ ฯลฯ">ประเภทอาหาร</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputSpecialFood" class="form-control" placeholder="ประเภทอาหารพิเศษ เช่น อาหารฮาลาล มังสวิรัติ เจ ฯลฯ" name="inputSpecialFood"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">อาหารที่แพ้</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputFoodAllergy" class="form-control" placeholder="อาหารที่แพ้" name="inputFoodAllergy"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">โรคประจำตัว</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputDisease" class="form-control" placeholder="โรคประจำตัว"   name="inputDisease">  </input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ยาที่แพ้</label>
							</div>
							<div class="col-sm-9">
								<input type="text" id="inputDrugAllergy" class="form-control" placeholder="ยาที่แพ้" name="inputDrugAllergy"></input>
							</div>
						</div>



						<br>
						<div class="txt-center">
							<div class="btn btn-primary btn-lg" id="prev2">&laquo; หน้าที่แล้ว</div>&nbsp;&nbsp;
							<div class="btn btn-primary btn-lg" id="next2">บันทึกและไปต่อ &raquo;</div>
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
							<textarea id="inputQ1" class="form-control" rows="7" name="inputQ1"></textarea>
						</div>

						<div class="row form-field txt-left">
							<label for="name">2. ในปัจจุบันนี้ น้องคิดว่าเว็บไซต์มีอิทธิพลต่อคนไทยอย่างไร และเว็บไซต์ที่เหมาะสมสำหรับคนไทยควรเป็นอย่างไร?</label>
							<textarea id="inputQ2" class="form-control" rows="7" name="inputQ2"></textarea>
						</div>

						<br>
						<div class="txt-center">
							<div class="btn btn-primary btn-lg" id="prev3">&laquo; หน้าที่แล้ว</div>&nbsp;&nbsp;
							<div class="btn btn-primary btn-lg" id="next3">บันทึกและไปต่อ &raquo;</div>
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
							<textarea id="inputQ3" class="form-control" rows="7" name="inputQ3"></textarea>
						</div>

						<div class="row form-field txt-left">
							<label for="name">2. หากมีโครงการจากรัฐ ต้องการสนับสนุนให้สินค้าไทย ส่งออกนอก จะทำอย่างไร ที่จะตีตลาด ให้ทั่วโลก รู้จักความเป็นไทย น้องคิดว่า มีสิ่งใดเป็นจุดขาย อย่างแท้จริง และจะโปรโมทให้ชาวต่างชาติรู้ ด้วยวิธีไหนบ้าง</label>
							<textarea id="inputQ4" class="form-control" rows="7" name="inputQ4"></textarea>
						</div>

						<br>
						<div class="txt-center">
							<!-- <div class="btn btn-primary btn-lg" id="prev4">&laquo; หน้าที่แล้ว</div>&nbsp;&nbsp;
							<div class="btn btn-primary btn-lg" id="next4">บันทึกและไปต่อ &raquo;</div> -->
							<div class="btn btn-primary btn-lg" id="prev5">&laquo; หน้าที่แล้ว</div>&nbsp;&nbsp;
							<button type="submit" class="btn btn-success btn-lg" id="finished">เสร็จสิ้น</button>
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

					</div>
				</div> -->

			</div>
			</form>
		</div>
	</div>
</body>
</html>
