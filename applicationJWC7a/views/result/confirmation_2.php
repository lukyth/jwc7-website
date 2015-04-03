<!doctype html>
<html>
<head>
  <title>Junior Webmaster Camp #7 | สมัครสมาชิก</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?= base_url()."assets/" ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()."assets/" ?>css/result.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()."assets/" ?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()."assets/" ?>fonts/csprajad.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()."assets/" ?>fonts/wdb_bangna.css">
  <script type="text/javascript" src="<?= base_url()."assets/" ?>js/jquery-1.11.1.min.js"></script>
  <link rel="icon" type="image/png" href="<?= base_url()."assets/" ?>img/favicon.png">
  <script>
    $(document).ready(function(){
      $('a').click(function(){
        console.log('Hello');
          $('html, body').animate({
              scrollTop: $( $.attr(this, 'href') ).offset().top
          }, 500);
          return false;
      });
    });
  </script>
  <style>
    .information {
      background-color:#f2e7dd;
      margin:0px;
      padding:40px 0px;
      margin-bottom:80px;
      border-radius:5px;
    }

    .btn {
      font-size:18px;
    }

    .form-group,
    .radio,
    legend {
      text-align: left;
    }

  </style>
</head>
<body>
  <div class="row" id="head">
    <div class="container-fluid txt-center">
      <div class="col-sm-12">
        <a href="http://jwc.in.th"><img src="http://jwc.in.th/jwc7/assets/img/logo.svg" alt="logo" id="logo"></a>
      </div>
    </div>
  </div>
  <div class="row" id="body">
    <div class="container-fluid txt-center">
      <div class="col-xs-12" style="margin:0px;">
        <div class="row" id="form-head" style="background-color:#969696;">
          <div class="col-sm-10 col-sm-offset-1" style="padding-bottom:20px;">
            <h1>ยืนยันตัวตน</h1>
          </div>
        </div>
      </div>
      <div class="col-xs-12 information">

        <div class="col-xs-12">
          <div style="font-size:1.5em;">แบบสอบถามการเดินทาง</div>
          <div>สำหรับน้องๆที่เดินทางมาจากต่างจังหวัด หรือไม่ทราบว่า มหาวิทยาลัยราชภัฏจันทรเกษมอยู่ที่ไหน</div>
          <div>ไม่สามารถเดินทางมาด้วยตัวเองได้ และต้องการให้พี่ๆไปรอรับ ณ สถานที่ต่างๆ</div>
          <br>
          <div><strong>จุดนัดพบ 3 แห่ง ได้แก่</strong></div>
          <ol style="text-align:left;">
            <li>สถานีขนส่งผู้โดยสารกรุงเทพ (หมอชิต 2) พี่ๆ จะรอรับน้องอยู่บริเวณหน้าเซเว่นอีเลฟเว่น ชั้น 1</li>
            <li>บริเวณหน้าสถานีรถไฟฟ้าใต้ดิน (MRT) "จตุจักร" (ประตูทางออกที่ 2)</li>
            <li>ใต้ตึกสำนักงานอธิการบดี มหาวิทยาลัยราชภัฏจันทรเกษม</li>
          </ol>
        </div>

        <div class="col-xs-12" style="color: #f00; font-size:1.1em; margin:10px 0px;">
          *Required (กรุณากรอกข้อมูลให้ครบถ้วน)
        </div>

        <?php echo form_open('result/confirmation_2/submit'); ?>

        <div class="form-horizontal">
          <div class="form-group">
            <label for="inputFullName" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputFullName" name="inputFullName" autofocus required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputNickName" class="col-sm-3 control-label">ชื่อเล่น</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputNickName" name="inputNickName" required>
            </div>
          </div>
        </div>

        <fieldset>
          <legend>เพศ</legend>
          <div class="radio">
            <label>
              <input type="radio" name="inputGender" id="inputGenderMale" value="male" checked>
              ชาย
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="inputGender" id="inputGenderFemale" value="female">
              หญิง
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="inputGender" id="inputGenderTud" value="tud">
              ตุ๊ด
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="inputGender" id="inputGenderGay" value="gay">
              เกย์
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="inputGender" id="inputGenderTom" value="tom">
              ทอม
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="inputGender" id="inputGenderDee" value="dee">
              ดี้
            </label>
          </div>
          <div class="radio form-inline">
            <label>
              <input type="radio" name="inputGender" id="inputGenderEtc" value="etc">
              อื่นๆ :
              <div class="form-group">
                <input type="text" class="form-control" name="inputGenderEtc">
              </div>
            </label>
          </div>
        </fieldset>

        <div class="form-group">
          <label for="inputTel">เบอร์ติดต่อ</label>
          <input type="tel" class="form-control" id="inputTel" name="inputTel" placeholder="0xxxxxxxxx" required>
        </div>

        <div class="form-group">
          <label for="inputTelEmergency">เบอร์โทรกรณีฉุกเฉิน<span class="field-detail">(พ่อ, แม่, เพื่อนสนิท)</span></label>
          <input type="tel" class="form-control" id="inputTelEmergency" name="inputTelEmergency" placeholder="0xxxxxxxxx" required>
        </div>

        <div class="form-group">
          <label for="inputAddress">บริเวณที่อยู่<span class="field-detail">(เช่น บางมด, ลาดพร้าว, ปากน้ำ, แม่สาย, ชุมพร)</span></label>
          <input type="text" class="form-control" id="inputAddress" name="inputAddress" required>
        </div>

        <fieldset>
          <legend>สถานที่นัดพบ</legend>
          <div class="radio">
            <label>
              <input type="radio" name="inputPlace" id="inputPlaceSeven" value="seven" checked>
              หน้า 7-eleven ในสถานีขนส่งหมอชิต 2 ( <a href="" target="_blank">คลิกเพื่อดูแผนที่</a> )
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="inputPlace" id="inputPlaceMrt" value="mrt">
              หน้าสถานีรถไฟฟ้าใต้ดิน (MRT) "จตุจักร" ( คลิกเพื่อดูแผนที่ <a href="" target="_blank">1</a> | <a href="" target="_blank">2</a> )
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="inputPlace" id="inputPlaceUniversity" value="university">
              ใต้ตึกสํานักงานอธิการบดี มหาวิทยาลัยราชภัฏจันทรเกษม ( คลิกเพื่อดูแผนที่ <a href="" target="_blank">1</a> | <a href="" target="_blank">2</a> )
            </label>
          </div>
        </fieldset>

        <div class="form-group">
          <label for="inputAddress">หมายเหตุอื่นๆ<div class="field-detail">( ข้อมูลเพิ่มเติมที่น้องๆต้องการจะแจ้งให้พี่ๆทราบ เช่น "หนูมาถึงตอนตีสามค่ะ ต้องทํายังไง")</div></label>
          <textarea class="form-control" rows="6" name="inputNote"></textarea>
        </div>

        <button type="submit" class="btn btn-success btn-lg">ส่ง</button>
      </div>
    </div>
  </div>
</body>
</html>
