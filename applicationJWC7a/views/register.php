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
    $user_profile = $facebook->api('/me');
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

	<h1>Share Before Register</h1>

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
		<h2><?= $user_profile['name'] ?></h2>
		<img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

		<pre><?php print_r($user_profile); ?></pre>

		<br>

		<h2>Section register</h2>
		<form action="finish" method="post">
			<input type="radio" name="section" value="content"/> Web content <br/>
			<input type="radio" name="section" value="design"/> Web design <br/>
			<input type="radio" name="section" value="programming"/> Web programming <br/>
			<input type="radio" name="section" value="marketing"/> Web marketing <br/>

			<input type="submit">
		</form>
		
	<?php endif ?>
</body>
</html>