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
	<script type="text/javascript">

		var can_edit = <?= ($edit == "1" ? "false" : "true") ?>;
		var redirect = "<?= $redirect ?>";

		var data = [
			["inputPrefix","<?= $form->prefix ?>"],
			["inputName","<?= $form->name ?>"],
			["inputSurname","<?= $form->surname ?>"],
			["inputNickname","<?= $form->nickname ?>"],
			["inputSex","<?= $form->sex ?>"],
			["inputNational_ID","<?= $form->national_ID ?>"],
			["inputSchool","<?= $form->school ?>"],
			["inputGrade","<?= $form->grade ?>"],
			["inputPhone","<?= $form->phone ?>"],
			["inputAddress","<?= $form->address ?>"],
			["inputProvince","<?= $form->province ?>"],
			["inputPostalCode","<?= $form->postalCode ?>"],
			["inputEmail","<?= $form->email ?>"],
			["inputKnowFrom","<?= $form->knowFrom ?>"],
			["inputSizeShirt","<?= $form->sizeshirt ?>"],
			["inputSpecialFood","<?= $form->specialFood ?>"],
			["inputFoodAllergy","<?= $form->foodAllergy ?>"],
			["inputDisease","<?= $form->disease ?>"],
			["inputDrugAllergy","<?= $form->drugAllergy ?>"],
			["inputParentPhone","<?= $form->parentPhone ?>"],
			["inputRelateParent","<?= $form->relateParent ?>"],
			["inputQ1","<?= $formhomework->q1 ?>"],
			["inputQ2","<?= $formhomework->q2 ?>"],
			["inputQ3","<?= $formhomework->q3 ?>"],
			["inputQ4","<?= $formhomework->q4 ?>"],
			["inputQ5","<?= $formhomework->q5 ?>"]
		];

		$( function() {
			init( can_edit,redirect,data );
		});

		function tmp_submit() {
			var url = "";
			if( can_edit ) {
				url = "<?= base_url('register/step1/'.$type.'/tmp') ?>";
			} else {
				url = "<?= base_url('register/edit/update') ?>";
			}
			$.post( url, $("#mainform").serialize(), function(res) {
				show_log("บันทึกเสร็จสมบูรณ์<br><br>");
			} );
		}

	</script>
	<link rel="icon" type="image/png" href="<?php echo base_url()."assets/" ?>img/favicon.png">
</head>
<body>
	<div class="row" id="head">
		<div class="container-fluid txt-center">
			<div class="col-sm-12">
				<img class="hidden-xs" src="<?php echo base_url()."assets/" ?>img/mascot_ds.svg">
				<a href="http://jwc.in.th"><img src="<?php echo base_url()."assets/" ?>img/logo.svg" alt="logo" id="logo"></a>
			</div>
		</div>
	</div>
	<div class="row" id="body">
		<div class="container-fluid txt-center">
			<div class="col-xs-12">
			<div class="row design" id="form-head">
				<div class="col-sm-10 col-sm-offset-1">
					<h1>สมัครเข้าค่าย JWC7</h1>
					<hr>
					<h2>Web Design</h2>

				</div>
			</div>
			<div class="row" id="form-progress">
				<div class="col-sm-12">
					<div id="goto1" class="goto">1. ข้อมูลส่วนตัว</div><div id="goto2" class="goto">2. ข้อมูลเกี่ยวกับค่าย</div><div id="goto3" class="goto">3. คำถามคัดเลือก</div><div id="goto4" class="goto">4. คำถามประจำสาขา</div><!-- <div id="goto5">5. ตรวจสอบข้อมูล</div> -->
				</div>
			</div>
			<?php
				if( $edit == "1" ) {
					print form_open('register/edit/update', array("id"=>"mainform") );
				} else {
					print form_open('register/step1/'.$type."/confirm",array("id"=>"mainform"));
				}
			?>
			<input type="hidden" name="issubmited" value="true"></input>
			<div class="row" id="regisform">

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step1" class="stepitem" data-step="1">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>ข้อมูลส่วนตัว</h2>
						<hr>
						<div class="cant_edit_message">คุณไม่สามารถแก้ไขข้อมูลส่วนนี้ได้อีกแล้ว</div>
						<div id="facebook_img">
							<div class="col-xs-12">
								<img class="img-responsive img-center" src="http://graph.facebook.com/<?= $user_id ?>/picture?type=large" />
							</div>
							<div class="col-xs-12 last">
								<?=html_escape($user_profile['name'])?>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">คำนำหน้าชื่อ*</label>
							</div>
							<div class="col-sm-4">
								<select class="form-control" id="inputPrefix" name="inputPrefix">
									<option value="">เลือกคำนำหน้า</option>
									<option value="เด็กชาย">เด็กชาย</option>
									<option value="เด็กหญิง">เด็กหญิง</option>
									<option value="นาย">นาย</option>
									<option value="นางสาว">นางสาว</option>
									<option value="นาง">นาง</option>
								</select>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ชื่อ*</label>
							</div>
							<div class="col-sm-7">
								<input type="text" id="inputName" class="form-control" placeholder="ชื่อ" name="inputName" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">นามสกุล*</label>
							</div>
							<div class="col-sm-7">
								<input type="text" id="inputSurname" class="form-control" placeholder="นามสกุล" name="inputSurname" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="nickname">ชื่อเล่น*</label>
							</div>
							<div class="col-sm-4">
								<input type="text" id="inputNickname" class="form-control" placeholder="ชื่อเล่น" name="inputNickname" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name" value="<?= $form->sex ?>">เพศ*</label>
							</div>
							<div class="col-sm-4">
								<div class="radio">
									<label>
										<input type="radio" name="inputSex" value="M" checked> ชาย
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="inputSex" value="F"> หญิง
									</label>
								</div>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">รหัสประจำตัวประชาชน*</label>
							</div>
							<div class="col-sm-7">
								<input type="text" id="inputNational_ID" class="form-control" placeholder="xxxxxxxxxxxxx" name="inputNational_ID" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">สถานศึกษา*</label>
							</div>
							<div class="col-sm-7">
								<input type="text" id="inputSchool" class="form-control" placeholder="โรงเรียน....."  name="inputSchool" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ระดับการศึกษา*</label>
							</div>
							<div class="col-sm-4">
								<select class="form-control" id="inputGrade" name="inputGrade" required>
									<option value="">เลือกระดับชั้น</option>
									<option value="ม.3">ม.3</option>
									<option value="ม.4">ม.4</option>
									<option value="ม.5">ม.5</option>
									<option value="ม.6">ม.6</option>
									<option value="ปวช.1">ปวช.1</option>
									<option value="ปวช.2">ปวช.2</option>
									<option value="ปวช.3">ปวช.3</option>
								</select>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">เบอร์โทรศัพท์มือถือ*</label>
							</div>
							<div class="col-sm-7">
								<input type="text" id="inputPhone" class="form-control" placeholder="0xxxxxxxxx" name="inputPhone" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ที่อยู่*</label>
							</div>
							<div class="col-sm-9">
								<textarea id="inputAddress" rows="4" class="form-control"  placeholder="ที่อยู่" name="inputAddress" required></textarea>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">จังหวัด*</label>
							</div>
							<div class="col-sm-7">
								<select class="form-control" id="inputProvince" name="inputProvince" required>
									<option value="">กรุณาเลือกจังหวัด</option>
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
								</select>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">รหัสไปรษณีย์*</label>
							</div>
							<div class="col-sm-4">
								<input type="text" id="inputPostalCode" class="form-control" placeholder="xxxxx" name="inputPostalCode" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">E-mail*</label>
							</div>
							<div class="col-sm-7">
								<input type="email" id="inputEmail" class="form-control" placeholder="jwc7@example.com" name="inputEmail" required></input>
							</div>
						</div>

						<br>
						<div class="log" style="color:red;"></div>
						<div class="txt-center">
							<div class="btn btn-primary btn-lg nextbtn" id="next1">บันทึกและไปต่อ &raquo;</div>
						</div>
					</div>
				</div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step2" class="stepitem" data-step="2">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>ข้อมูลเกี่ยวกับค่าย</h2>
						<hr>
						<div class="cant_edit_message">คุณไม่สามารถแก้ไขข้อมูลส่วนนี้ได้อีกแล้ว</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">รู้จักค่ายจากที่ไหน?*</label>
							</div>
							<div class="col-sm-7">
								<select class="form-control" id="inputKnowFrom" name="inputKnowFrom" required>
									<option value="">กรุณาเลือก</option>
									<option value="Facebook">Facebook</option>
									<option value="Twitter">Twitter</option>
									<option value="PR">โปสเตอร์ประชาสัมพันธ์</option>
									<option value="Friend">เพื่อน/คนรู้จัก</option>
									<option value="etc">อื่นๆ (โปรดระบุ)</option>
								</select>
								<input id="inputKnowFromEtc" name="inputKnowFromEtc" maxlength="50" style="margin-top: 5px;" placeholder="อื่นๆ" type="text" class="form-control"></input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ไซส์เสื้อ*</label>
							</div>
							<div class="col-sm-4">
								<select class="form-control" id="inputSizeShirt" name="inputSizeShirt" required>
									<option value="">เลือกไซส์เสื้อ</option>
									<option value="S">S (รอบอก 34, ยาว 26)</option>
									<option value="M">M (รอบอก 36, ยาว 27)</option>
									<option value="L">L (รอบอก 38, ยาว 28)</option>
									<option value="XL">XL (รอบอก 40, ยาว 29)</option>
									<option value="XXL">XXL (รอบอก 42, ยาว 30)</option>
								</select>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name" >ประเภทอาหาร</label>
							</div>
							<div class="col-sm-9">
								<div class="radio">
									<label>
										<input type="radio" name="inputSpecialFood" value="ปกติ" checked> ปกติ
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="inputSpecialFood" value="ฮาลาล"> ฮาลาล
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="inputSpecialFood" value="มังสวิรัติ"> มังสวิรัติ
									</label>
								</div>
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
							<div class="col-sm-7">
								<input type="text" id="inputDisease" class="form-control" placeholder="โรคประจำตัว"   name="inputDisease">  </input>
							</div>
						</div>

						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ยาที่แพ้</label>
							</div>
							<div class="col-sm-7">
								<input type="text" id="inputDrugAllergy" class="form-control" placeholder="ยาที่แพ้" name="inputDrugAllergy"></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">เบอร์โทรศัพท์ผู้ปกครองที่ติดต่อได้*</label>
							</div>
							<div class="col-sm-7">
								<input type="text" id="inputParentPhone" class="form-control" placeholder="0xxxxxxxxx" name="inputParentPhone" required></input>
							</div>
						</div>
						<div class="row form-field">
							<div class="col-sm-3">
								<label for="name">ผู้ปกครองเกี่ยวข้องเป็น*</label>
							</div>
							<div class="col-sm-7">
								<input type="text" id="inputRelateParent" class="form-control" placeholder="บิดา มารดา" maxlength="10" name="inputRelateParent" required></input>
							</div>
						</div>

						<div class="log" style="color:red;"></div>
						<div class="txt-center">
							<div class="btn btn-primary btn-lg prevbtn" id="prev2">&laquo; หน้าที่แล้ว</div>
							<div class="btn btn-primary btn-lg nextbtn" id="next2">บันทึกและไปต่อ &raquo;</div>
						</div>
					</div>
				</div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step3" class="stepitem" data-step="3">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>คำถามคัดเลือก</h2>
						<hr>
						<div class="row form-field txt-left">
							<label for="name">1. ในมุมมองของน้อง เว็บไซต์คืออะไร และเว็บไซต์ที่ดีควรมีลักษณะอย่างไร?</label>
							<textarea id="inputQ1" class="form-control" rows="7" name="inputQ1" required></textarea>
						</div>

						<div class="row form-field txt-left">
							<label for="name">2. ในปัจจุบันนี้ น้องคิดว่าเว็บไซต์มีอิทธิพลต่อคนไทยอย่างไร และเว็บไซต์ที่เหมาะสมสำหรับคนไทยควรเป็นอย่างไร?</label>
							<textarea id="inputQ2" class="form-control" rows="7" name="inputQ2" required></textarea>
						</div>

						<div class="row form-field txt-left">
							<label for="name">3. หากเปรียบเพื่อนร่วมทีมของน้องเป็นอวัยวะในร่างกาย เมื่ออวัยวะบางส่วนคือเนื้อร้าย น้องจะจัดการอย่างไร เพราะเหตุใด</label>
							<textarea id="inputQ3" class="form-control" rows="7" name="inputQ3" required></textarea>
						</div>

						<br>
						<div class="log" style="color:red;"></div>
						<div class="txt-center">
							<div class="btn btn-primary btn-lg prevbtn" id="prev3">&laquo; หน้าที่แล้ว</div>
							<div class="btn btn-primary btn-lg nextbtn" id="next3">บันทึกและไปต่อ &raquo;</div>
						</div>
					</div>
				</div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step4" class="stepitem" data-step="4">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>คำถามประจำสาขา</h2>
						<hr>
						<div class="row form-field txt-left">
							<label for="name">1. Design มีความสำคัญกับเว็บไซต์อย่างไร รวมถึงการออกแบบเว็บไซต์ที่ดีและไม่ดีมีลักษณะอย่างไร?</label>
							<textarea id="inputQ4" class="form-control" rows="7" name="inputQ4" required></textarea>
						</div>

						<div class="row form-field txt-left">
							<label for="name">2. หากน้องได้ออกแบบเว็บไซต์เพื่อคนไทย น้องจะออกแบบอย่างไรเพื่อให้เข้าถึงคนไทยอย่างแท้จริง พร้อมอธิบายเหตุผล</label>
							<textarea id="inputQ5" class="form-control" rows="7" name="inputQ5" required></textarea>
						</div>

						<br>
						<div class="log" style="color:red;"></div>
						<div class="txt-center">
							<div class="btn btn-primary btn-lg prevbtn" id="prev4">&laquo; หน้าที่แล้ว</div>
							<div class="tmp_saved_btn btn btn-primary btn-lg" onclick="tmp_submit()">บันทึกชั่วคราว</div>
							<button type="submit" class="btn btn-success btn-lg" id="finished">เสร็จสิ้น</button>
						</div>
					</div>
				</div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

				<div id="step5" class="stepitem" data-step="5">
					<div class="col-sm-10 col-sm-offset-1 show_validation">
						<div id="error_log">
						<?php
								echo validation_errors();
								if(isset($error_result)) echo $error_result;
						?>
						</div>
						<br>
						<div onclick="$('#goto1').click()" style="padding: 10px 10px;" class="btn btn-danger btn-lg">กลับไปแก้ไข</div>&nbsp;
					</div>
					<div class="col-sm-10 col-sm-offset-1 show_info">
						<h2>ตรวจสอบข้อมูล</h2>
						<hr>
						<h3>ข้อมูลส่วนตัว</h3>
						<table class="table txt-center">
							<tr>
								<th>ชื่อ-นามสกุล</th>
								<td>
									<?php
										print $form->prefix." ".$form->name." ".$form->surname;
									?>
								</td>
							</tr>
							<tr>
								<th>ชื่อเล่น</th>
								<td><?= $form->nickname ?></td>
							</tr>
							<tr>
								<th>รหัสประจำตัวประชาชน</th>
								<td><?= $form->national_ID ?></td>
							</tr>
							<tr>
								<th>สถานศึกษา</th>
								<td><?= $form->school ?></td>
							</tr>
							<tr>
								<th>ระดับศึกษา</th>
								<td><?= $form->grade ?></td>
							</tr>
							<tr>
								<th>เบอร์โทรศัพท์</th>
								<td><?= $form->phone ?></td>
							</tr>
							<tr>
								<th>ที่อยู่</th>
								<td><?= str_replace("\\n","<br>", $form->address ) ?></td>
							</tr>
							<tr>
								<th>จังหวัด</th>
								<td><?= $form->province ?></td>
							</tr>
							<tr>
								<th>รหัสไปรษณีย์</th>
								<td><?= $form->postalCode ?></td>
							</tr>

						</table>
						<hr>
						<h3>ข้อมูลเกี่ยวกับค่าย</h3>
						<table class="table txt-center">
							<tr>
								<th>รู้จักค่ายจาก</th>
								<td><?= $form->knowFrom ?></td>
							</tr>
							<tr>
								<th>ไซส์เสื้อ</th>
								<td><?= $form->sizeshirt ?></td>
							</tr>
							<tr>
								<th>ประเภทอาหาร</th>
								<td><?= $form->specialFood ?></td>
							</tr>
							<tr>
								<th>อาหารที่แพ้</th>
								<td><?= $form->foodAllergy ?></td>
							</tr>
							<tr>
								<th>โรคประจำตัว</th>
								<td><?= $form->disease ?></td>
							</tr>
							<tr>
								<th>ยาทีแพ้</th>
								<td><?= $form->drugAllergy ?></td>
							</tr>
							<tr>
								<th>เบอร์โทรศัพท์ผู้ปกครอง</th>
								<td><?= $form->parentPhone ?></td>
							</tr>
							<tr>
								<th>ผู้ปกครองเกี่ยวข้องเป็น</th>
								<td><?= $form->relateParent ?></td>
							</tr>
						</table>
						<hr>
						<h3>คำถามคัดเลือก</h3>
						<br>
						<div class="txt-left">
							<b>1. ในมุมมองของน้อง เว็บไซต์คืออะไร และเว็บไซต์ที่ดีควรมีลักษณะอย่างไร?</b>
							<div class="show_homework_answer">
							<?= str_replace("\\\\n","<br>",$formhomework->q1) ?>
							</div>
							<b>2. ในปัจจุบันนี้ น้องคิดว่าเว็บไซต์มีอิทธิพลต่อคนไทยอย่างไร และเว็บไซต์ที่เหมาะสมสำหรับคนไทยควรเป็นอย่างไร?</b>
							<div class="show_homework_answer">
							<?= str_replace("\\\\n","<br>",$formhomework->q2 ) ?>
							</div>
							<b>3. หากเปรียบเพื่อนร่วมทีมของน้องเป็นอวัยวะในร่างกาย เมื่ออวัยวะบางส่วนคือเนื้อร้าย น้องจะจัดการอย่างไร เพราะเหตุใด</b>
							<div class="show_homework_answer">
							<?= str_replace("\\\\n","<br>",$formhomework->q3 ) ?>
							</div>
						</div>
						<hr>
						<h3>คำถามประจำสาขา</h3>
						<br>
						<div class="txt-left">
							<b>1. Design มีความสำคัญกับเว็บไซต์อย่างไร รวมถึงการออกแบบเว็บไซต์ที่ดีและไม่ดีมีลักษณะอย่างไร?</b>
							<div class="show_homework_answer">
							<?= str_replace("\\\\n","<br>",$formhomework->q4 ) ?>
							</div>
							<b>2. หากน้องได้ออกแบบเว็บไซต์เพื่อคนไทย น้องจะออกแบบอย่างไรเพื่อให้เข้าถึงคนไทยอย่างแท้จริง พร้อมอธิบายเหตุผล</b>
							<div class="show_homework_answer">
							<?= str_replace("\\\\n","<br>",$formhomework->q5 ) ?>
							</div>
						</div>

						<br>
						<div class="txt-center" style="margin:10px; color:red;">
							ข้อมูล "ทั้งหมด" จะไม่สามารถแก้ไขได้อีก
						</div>

						<div onclick="$('#goto1').click()" style="padding: 10px 10px;" class="btn btn-primary btn-lg">กลับไปแก้ไข</div>&nbsp;
						<button onclick="real_submit();" style="padding: 10px 40px;" class="btn btn-success btn-lg">ยืนยัน</button>

					</div>
				</div>

			</div>
			</form>
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
