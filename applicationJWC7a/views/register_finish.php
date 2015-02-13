<?php

require(APPPATH.'views/fb-sdk-v3/facebook.php');


// App Localhost for test in locahost
$appid 		= '1441089346108360';
$appsecret 	= '2c00b5ac7693486357508a7883574dcc';

// App JWC7
// $appid 		= '1540852432838036';
// $appsecret 	= '06ac519f4aa347ae3059da8bc6504ea6';


$facebook = new Facebook(array(
	'appId'  => $appid,
	'secret' => $appsecret,
));

$user = $facebook->getUser();

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile 	= $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl(array('scope' => 'publish_actions'));
}


// GET form
$section = $_POST['section'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Share Before Register</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<!--====================================
	============== Login/Logout ============
	=====================================-->
	<?php if ($user): ?>
		<a href="<?php echo $logoutUrl; ?>">Logout</a>
	<?php else: ?>
		<a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
	<?php endif ?>

	<br><br><br>

	<!--====================================
	============== Before login ============
	=====================================-->
	<?php if ($user): ?>
		<h1>Register success</h1>

		<p><?= $user_profile['name'] ?>[<?= $section ?>]</p>
		<img src="https://graph.facebook.com/<?php echo $user; ?>/picture">
		<p><?= $user_profile['first_name'] ?></p>
		<br>

		<button onclick="Share('<?= $user_profile['name'] ?>')">share</button>
		
	<?php endif ?>
	<div id="fb-root"></div>

	
	<!-- https://developers.facebook.com/docs/sharing/reference/feed-dialog/v2.2 -->
	<script>

		// App Localhost for test in locahost
		var addid = '1441089346108360';

		// App JWC7
		// var addid = '1540852432838036';

		window.fbAsyncInit = function() {
			FB.init({
			appId      : addid,
			xfbml      : true,
			version    : 'v2.1'
			});
		};

		(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		function Share(name){
			var des = name + ' ได้สมัครเข้าคัดเลือกเป็นชาว #SiamWebster ณ ค่าย Junior Webmaster Camp ครั้งที่ 7 แล้ว ใครใคร่จะมาเข้าร่วม #JWC7 จงเร่งตามมาเถิด';
			FB.ui({
				method: 'feed',
				link: 'http://www.jwc.in.th/jwc7/',
				description : des,
			}, function(response){});
		}
	
	</script>

</body>
</html>