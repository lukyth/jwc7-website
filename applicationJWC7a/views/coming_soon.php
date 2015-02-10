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
  <link rel="icon" type="image/png" href="<?php echo base_url()."assets/" ?>img/favicon.png">
</head>
<body>
  <div class="container-fluid txt-center bg">
    <div class="row">
      <div class="col-sm-12">
        <img src="<?php echo base_url()."assets/" ?>img/logo.svg" alt="logo" class="img-responsive img-center" id="logo">
      </div>
    </div>
    <!-- <div class="bg"></div> -->

    <div class="row">
      <div class="col-sm-12">
        <ul class="countdown">
          <li>
            <span id="countdown_day" class="days">00</span>
            <p class="days_ref">days</p>
          </li>
            <li class="seperator">.</li>
          <li>
            <span id="countdown_hour" class="hours">00</span>
            <p class="hours_ref">hours</p>
          </li>
          <li class="seperator">:</li>
          <li>
            <span id="countdown_min" class="minutes">00</span>
            <p class="minutes_ref">minutes</p>
          </li>
            <li class="seperator">:</li>
          <li>
            <span id="countdown_sec" class="seconds">00</span>
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
        <div class="img-center" id="subscribeform">
          <form action="<?php echo site_url('/coming_soon'); ?>" method="post">
              <span class="input-group">
                <input name="email" type="text" value="" class="form-control" placeholder="e-mail address">
                <span class="input-group-btn">
                  <button class="btn btn-group-addon btn-default btn-primary" type="submit">ติดตามข่าวจาก JWC7</button>
                </span>
              </span>
          </form>
          <?php
            echo validation_errors();
            if(isset($result)) echo $result;
          ?>
        </div>
      </div>
    </div>

    <div class="row" id="follow">
      <div class="col-sm-12">
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

    // Used
    countdown("2015-02-14 00:00");

    // NOT REQUIRE JQUERY
    function countdown(timeEnd) {

      // set the date we're counting down to
      var target_date = new Date(timeEnd).getTime();

      // variables for time units
      var days, hours, minutes, seconds;

      // get tag element
      var countdown_day   = document.getElementById("countdown_day"),
        countdown_hour  = document.getElementById("countdown_hour"),
        countdown_min   = document.getElementById("countdown_min"),
        countdown_sec   = document.getElementById("countdown_sec");

      calculate_countdown();
      setInterval(function () {
          calculate_countdown();
      }, 1000);

      function calculate_countdown() {
        // find the amount of "seconds" between now and target
        var current_date = new Date().getTime();
        var seconds_left = (target_date - current_date) / 1000;

        days = parseInt(seconds_left / 86400);
        seconds_left = seconds_left % 86400;

        hours = parseInt(seconds_left / 3600);
        seconds_left = seconds_left % 3600;

        minutes = parseInt(seconds_left / 60);
        seconds = parseInt(seconds_left % 60);

        countdown_day.innerHTML   = ("0" + days).slice(-2);
        countdown_hour.innerHTML  = ("0" + hours).slice(-2);
        countdown_min.innerHTML   = ("0" + minutes).slice(-2);
        countdown_sec.innerHTML   = ("0" + seconds).slice(-2);
      }
    }
  </script>
</body>
</html>