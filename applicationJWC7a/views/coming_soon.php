<!doctype html>
<html>
<head>
  <title>Junior Webmaster Camp #7 – Coming Soon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>css/jwc7.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>fonts/wdb_bangna.css">
  <script src="<?php echo base_url()."assets/" ?>js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url()."assets/" ?>js/jquery.downCount.js"></script>
  <link rel="icon" type="image/png" href="<?php echo base_url()."assets/" ?>img/favicon.png">
</head>
<body>
  <div class="container-fluid txt-center">
    <div class="row">
      <div class="col-sm-12">
        <img src="<?php echo base_url()."assets/" ?>img/logo.svg" alt="logo" class="img-responsive img-center" id="logo">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <ul class="countdown">
          <li>
            <span class="days">00</span>
            <p class="days_ref">days</p>
          </li>
            <li class="seperator">.</li>
          <li>
            <span class="hours">00</span>
            <p class="hours_ref">hours</p>
          </li>
          <li class="seperator">:</li>
          <li>
            <span class="minutes">00</span>
            <p class="minutes_ref">minutes</p>
          </li>
            <li class="seperator">:</li>
          <li>
            <span class="seconds">00</span>
            <p class="seconds_ref">seconds</p>
          </li>
        </ul>
      </div>
    </div>

    <div class="row" id="soon">
      <div class="col-sm-12">
        <h3>เร็วๆ นี้</h3>
      </div>
    </div>

    <div class="row" id="subscribe">
      <div class="col-sm-12">
        <div class="input-group img-center" id="subscribeform">
          <form action="<?php echo site_url('/coming_soon'); ?>" method="post">
            <input name="email" type="text" value="" class="form-control" placeholder="e-mail address">
            <span class="input-group-btn">
              <button class="btn btn-default btn-primary" type="submit">ติดตามข่าวจาก JWC7</button>
            </span>
          </form>
          <?php
            echo validation_errors();
            if(isset($result)) echo $result;
          ?>
        </div>

        <h3>Follow <b>jwcth</b> on<span class="hidden-xs">&nbsp;</span>
        <br class="visible-xs">
          <a href="http://www.facebook.com/jwcth" class="shadowlink" title="JWC on Facebook" target="_blank"><img src="<?php echo base_url()."assets/" ?>img/social/fb.svg" alt="fb"></a>&nbsp;
          <a href="http://www.twitter.com/jwcth" class="shadowlink" title="JWC on Twitter" target="_blank"><img src="<?php echo base_url()."assets/" ?>img/social/tw.svg" alt="tw"></a>&nbsp;
          <a href="http://www.instagram.com/jwcth" class="shadowlink" title="JWC on Instagram" target="_blank"><img src="<?php echo base_url()."assets/" ?>img/social/ig.svg" alt="ig"></a>&nbsp;
          <a href="https://www.youtube.com/channel/UCvoljJxOdeqTlguPsh9nHVg" class="shadowlink" title="YWC YouTube Channel" target="_blank"><img src="<?php echo base_url()."assets/" ?>img/social/yt.svg" alt="yt"></a></h3>
      </div>
    </div>
  </div>

  <script class="source">
    $('.countdown').downCount({
      date: '02/14/2015 23:59:59',
      offset: +7
    },
      function () {
      alert('WOOT WOOT, done!');
    });
  </script>
</body>
</html>