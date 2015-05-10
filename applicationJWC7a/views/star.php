<!doctype html>
<html>
<head>
  <title>Junior Webmaster Camp #7 | Stars Contest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=1150, user-scalable=yes">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>fonts/csprajad.css">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>fonts/wdb_bangna.css">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>css/star.css">
  <link rel="icon" href="<?= base_url()."assets/" ?>img/favicon.png">
</head>
<body class="star">
  <div class="container text-center">
    <?php echo form_open('star/submit'); ?>
    <!-- <h1>Star</h1> -->
    <div class="row male active">
      <div class="inner">
        <img src="assets/img/star/header.png">
        <h2>คำโปรยสำหรับเลือกเดือน</h2>
        <?php
          foreach ($data['male'] as $key => $value) {
            echo '<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 radio '.$value['registerType'].'"><input type="radio" name="inputMale" class="hidden" id="inputMale-'.$value['facebookID'].'" value="'.$value['facebookID'].'" required><div class="wrapper"><img class="hand" src="assets/img/star/hand.png"><div class="wrapper-inside"><label for="inputMale-'.$value['facebookID'].'"><img class="img-responsive center-block" src="http://graph.facebook.com/'.$value['facebookID'].'/picture?type=large" alt="'.$value['nickName'].'"></label></div></div><div class="nickname">'.$value['nickName'].'</div></div>';
          }
        ?>
        <div class="clearfix"></div>
        <div class="btn btn-primary btn-lg next">
          ถัดไป
          <i class="fa fa-angle-right"></i>
        </div>
      </div>
    </div>
    <div class="row female">
      <div class="inner">
        <img src="assets/img/star/header.png">
        <h2>คำโปรยสำหรับเลือกดาว</h2>
        <?php
          foreach ($data['female'] as $key => $value) {
            echo '<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 radio '.$value['registerType'].'"><input type="radio" name="inputFemale" class="hidden" id="inputMale-'.$value['facebookID'].'" value="'.$value['facebookID'].'" required><div class="wrapper"><img class="hand" src="assets/img/star/hand.png"><div class="wrapper-inside"><label for="inputMale-'.$value['facebookID'].'"><img class="img-responsive center-block" src="http://graph.facebook.com/'.$value['facebookID'].'/picture?type=large" alt="'.$value['nickName'].'"></label></div></div><div class="nickname">'.$value['nickName'].'</div></div>';
          }
        ?>
        <div class="clearfix"></div>
        <div class="btn btn-primary btn-lg back">
          <i class="fa fa-angle-left"></i>
          กลับไป
        </div>
        <button type="submit" class="btn btn-success btn-lg success">เสร็จแล้วเย่ !</button>
      </div>
    </div>
  </div>
  <script src="<?= base_url()."assets/" ?>js/jquery-1.11.1.min.js"></script>
  <script src="<?= base_url()."assets/" ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url()."assets/" ?>js/star.js"></script>
</body>
</html>
