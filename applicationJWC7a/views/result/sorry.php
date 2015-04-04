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
      padding:60px;
      margin-bottom:80px;
      border-radius:5px;
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

        <div class="col-xs-12 text-center" style="font-size:1.4em;">
          <?php
          if( $type == "revoke") {
            print "ขอแสดงความเสียใจน้าา น้องไม่ได้ยืนยันสิทธิในการเข้าค่ายจร้า";
          } else {
            print "ขอแสดงความเสียใจน้า น้องไม่ผ่านค่าย JWC นะคะ";
          } ?>

        </div>
        <div class="col-xs-12">ไม่เป็นปีหน้ายังมีโอกาสใหม่ อย่าลืมชวนพี่ๆน้องๆและเพื่อนๆมาสมัครค่ายในปีหน้ากันด้วยน้าาา</div>
        <br>
        <a href=".."><div class="btn btn-danger" style="margin-top:30px; font-size:22px;">กลับไปหน้าหลัก</div></a>


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
