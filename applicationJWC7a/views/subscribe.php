<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>

</head>
<body>
Subscribe
<form action="<?php echo site_url('/subscribe'); ?>" method="post">
    <input name="email" type="text" value="">
     <button type="submit">Subscribe</button>
</form>
<?php
    echo validation_errors();
    if(isset($result)) echo $result;
 ?>
</doby>
</html>
