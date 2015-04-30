<!doctype html>
<html>
<head>
  <title>Junior Webmaster Camp #7 | Stars Contest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>fonts/csprajad.css">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>fonts/wdb_bangna.css">
  <link rel="stylesheet" href="<?= base_url()."assets/" ?>css/star.css">
  <link rel="icon" href="<?= base_url()."assets/" ?>img/favicon.png">
</head>
<body>
  <div class="container text-center">
    <?php echo form_open('star/submit'); ?>
    <h1>Star</h1>
    <div class="row">
      <?php
        foreach ($data['male'] as $key => $value) {
          echo '<div class="col-md-3 col-sm-4 col-xs-6 radio '.$value['registerType'].'"><input type="radio" name="inputMale" class="hidden" id="inputMale-'.$value['facebookID'].'" value="'.$value['facebookID'].'" required><div class="wrapper"><label for="inputMale-'.$value['facebookID'].'"><img class="img-responsive center-block" src="http://graph.facebook.com/'.$value['facebookID'].'/picture?type=large" alt="'.$value['nickName'].'"><div class="nickname">'.$value['nickName'].'</div></label></div></div>';
        }
      ?>
      <div class="clearfix"></div>
      <div class="btn btn-primary btn-lg">Next</div>
    </div>
    <div class="row">
      <?php
        foreach ($data['female'] as $key => $value) {
          echo '<div class="col-md-3 col-sm-4 col-xs-6 radio '.$value['registerType'].'"><input type="radio" name="inputFemale" class="hidden" id="inputFemale-'.$value['facebookID'].'" value="'.$value['facebookID'].'" required><div class="wrapper"><label for="inputFemale-'.$value['facebookID'].'"><img class="img-responsive center-block" src="http://graph.facebook.com/'.$value['facebookID'].'/picture?type=large" alt="'.$value['nickName'].'"><div class="nickname">'.$value['nickName'].'</div></label></div></div>';
        }
      ?>
      <div class="clearfix"></div>
      <div class="btn btn-primary btn-lg">Back</div>
      <button type="submit" class="btn btn-success btn-lg">Send</button>
    </div>
  </div>
  <script src="<?= base_url()."assets/" ?>js/jquery-1.11.1.min.js"></script>
  <script src="<?= base_url()."assets/" ?>js/bootstrap.min.js"></script>
</body>
</html>