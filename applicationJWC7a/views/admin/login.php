<form action="<?php echo site_url('/admin/login'); ?>" method="post">
  <div class="form-group">
    <label for="inputUsername">Username : </label>
    <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="inputUsername">
  </div>
  <div class="form-group">
    <label for="inputPassword">Password : </label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="inputPassword">
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>
<?php
if(isset($result)) echo $result;

?>
