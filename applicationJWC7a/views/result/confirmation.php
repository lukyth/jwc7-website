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
      padding:0px;
      margin-bottom:80px;
      border-radius:5px;
    }
    .information section:nth-child(even) {
      background-color:#eeddcc;
    }
    .information section {
      margin : 0px 0px;
      padding: 30px 20px;
    }
    .moneyDisplay {
      border-radius:4px;
      background-color:#FFF;
      padding: 10px;
    }
    .comfirmStatus {
      margin-top:10px;
      background-color: #36aa00;
      padding: 7px 15px;
      border-radius: 3px;
      color:white;
      display:inline-block;
    }
    .notConfirm {
      background: #900;
    }

    .fileUpload {
    	position: relative;
    	overflow: hidden;
    	margin: 10px;
      background:#7a7a7a;
      color:#fff;
    }
    .uploadFile { font-size: 18px; padding:3px; }
    .fileUpload input.upload {
    	position: absolute;
    	top: 0;
    	right: 0;
    	margin: 0;
    	padding: 0;
    	cursor: pointer;
    	opacity: 0;
    	filter: alpha(opacity=0);
    }
    .fileUpload span { font-size: 16px; }
    .recentlyFile { color: #2c72ff; }

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

          <section class="row">
            <div class="col-sm-3 col-xs-4">
              <img src="http://graph.facebook.com/<?= $facebook_id; ?>/picture?type=large" style="border-radius:50%;" class="img-responsive">
            </div>
            <div class="col-sm-4 col-xs-8 text-left">
              <div style="font-size:1.5em; margin-top:20px;"><?= $user_data["name"]." ".$user_data["surname"] ?> (<?= $user_data["nickname"] ?>) </div>
              <div>สาขา <?= $user_data["registerType"] ?></div>
              <?php
                if( $user_data["status"] != "Real" ) {
                  ?><div class="comfirmStatus notConfirm">ยังไม่ยืนยันตัว</div><?php
                } else {
                  ?><div class="comfirmStatus">ยืนยันตัวแล้ว</div><?php
                }
              ?>
            </div>
            <div class="col-xs-12 col-sm-5" style="margin-top:20px;">
              <div class="moneyDisplay">
                <div>จำนวนเงินในการโอน</div>
                <div style="font-size:2.1em; display:inline-block;"><?= 300 + (float)$user_data["id"]/100.0 ?></div>
                <div style="display:inline-block;">บาท</div>
              </div>
            </div>
            <div class="col-xs-12" style="padding:10px; color:red;"><?= $error ? $error : "" ?></div>
          </section>

          <section class="row">
            <div class="col-xs-12" style="font-size:1.5em;">Upload หลักฐานการโอนเงิน</div>
            <div class="col-xs-12">เช่น ใบโอนเงิน, สลิปโอนเงิน ( จาก ATM หรือ Internet Banking)</div>
            <div class="col-xs-12">( ภาพถ่าย, scan, screenshot )</div>
            <?php echo form_open_multipart('result/upload');?>
              <div id="upload-slip" class="col-xs-12 custom-upload">
                <input class="uploadFile" placeholder="Choose File" disabled="disabled" />
                <div class="fileUpload btn">
                  <span>เลือกไฟล์</span>
                    <input class="uploadBtn upload" type="file" name="userfile" />
                    <input type="hidden" name="type" value="slip" />
                </div>
              </div>
              <div class="col-xs-12">
                <input class="btn btn-primary" type="submit" value="Upload" style="margin-top:10px;"/>
              </div>
            </form>
            <div class="col-xs-12" style="margin-top:10px; font-size:0.8em">รองรับเฉพาะไฟล์สกุลรูปภาพ .gif,.jpg,.png ขนาดไม่เกิน 4MB เท่านั้น</div>
            <div class="col-xs-12 recentlyFile" style="margin-top:5px;">
              <?php
                if( strlen($user_data["img_slip"]) ) {
              ?>
              <a href="<?= base_url() ?>assets/confirmation/<?= $user_data['img_slip'] ?>" target="_blank"><i class="fa fa-check"></i> ส่งหลักฐานการโอนเงินเสร็จสมบูรณ์ คลิก ที่นี่ เพื่อดูรูป</a>
              <?php
                }
              ?>
            </div>
          </section>

          <section class="row">
            <div class="col-xs-12" style="font-size:1.5em;">Upload หลักฐานการแสดงตัวตน</div>
            <div class="col-xs-12">รูปบัตรนักเรียน หรือบัตรประชาชน หากไม่มีสามารถใช้เป็น transcript ได้</div>
            <?php echo form_open_multipart('result/upload');?>
              <div id="upload-id" class="col-xs-12 custom-upload">
                <input class="uploadFile" placeholder="Choose File" disabled="disabled" />
                <div class="fileUpload btn">
                  <span>เลือกไฟล์</span>
                  <input class="uploadBtn upload" type="file" name="userfile" />
                  <input type="hidden" name="type" value="id" />
                </div>
              </div>
              <div class="col-xs-12">
                <input class="btn btn-primary" type="submit" value="Upload" style="margin-top:10px;"/>
              </div>
            </form>
            <div class="col-xs-12" style="margin-top:10px; font-size:0.8em">รองรับเฉพาะไฟล์สกุลรูปภาพ .gif,.jpg,.png ขนาดไม่เกิน 4MB เท่านั้น</div>
            <div class="col-xs-12 recentlyFile" style="margin-top:5px;">
              <?php
                if( strlen($user_data["img_id"]) ) {
              ?>
              <a href="<?= base_url() ?>assets/confirmation/<?= $user_data['img_id'] ?>" target="_blank"><i class="fa fa-check"></i> ส่งหลักฐานการแสดงตนเสร็จสมบูรณ์ คลิก ที่นี่ เพื่อดูรูป</a>
              <?php
                }
              ?>
            </div>
          </section>

          <section class="row">
            <div class="col-xs-12" style="font-size:1.5em;">แบบสอบถามเพิ่มเติม</div>
            <div class="col-xs-12">กรุณากรอกข้อมูลให้ครบถ้วน เพื่อประโยชน์ของตัวน้องๆนะครับ</div>
            <div class="col-xs-12">
              <a href="confirmation_2"><input class="btn btn-primary" type="button" value="กรอกแบบสอบถาม" style="margin-top:10px;"/></a>
            </div>
          </section>

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
