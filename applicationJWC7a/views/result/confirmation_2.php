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

          <div class="col-xs-12 col-sm-4">ชื่อ-นามสกุล</div>
          <div class="col-xs-12 col-sm-8"><input type="text" style="text-align:left;" name="inpName" /></div>

          <section class="row">
          </section>

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
      </div>
    </div>
  </div>
  <script>
    $(function() {
      $(".uploadBtn").change(function() {
        $(this).parent().parent().find('.uploadFile').val( $(this).val().split("\\").pop() );
      })
    });
  </script>
</body>
</html>
