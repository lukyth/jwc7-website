<!doctype html>
<html>
<head>
  <title>Junior Webmaster Camp #7 | สมัครสมาชิก</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?= base_url()."assets/" ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()."assets/" ?>css/result.css">
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
      <div class="col-xs-12">
      <div class="row" id="form-head" style="background-color:#969696;">
        <div class="col-sm-10 col-sm-offset-1" style="padding-bottom:20px;">
          <h1>ยืนยันตัวตน</h1>
        </div>
      </div>
      <div class="row" id="regisform">

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div style="margin-top:30px;">กรุณาทำการ Login  เข้า Facebook ก่อนจะทำการยืนยันตัวตนต่อไป</div>
          <a id="login" href="<?php echo $login_url; ?>"><img style="margin-top:20px; padding:10px; width:150px; background-color:white; border-radius:3px;" src="<?php echo base_url()."assets/" ?>img/main/FB_login.svg"></a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
