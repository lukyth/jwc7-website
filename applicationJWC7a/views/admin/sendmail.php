<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>

</head>
<body>
<?php echo form_open('admin/sendmail'); ?>
  <div class="form-group">
    <label for="inputSubject">Suject : </label>
    <input type="text"  id="inputSubject" placeholder="Subject" name="inputSubject">
  </div>
  <div class="form-group">
    <label for="inputTo">To : </label>
    <input type="text"  id="inputTo" placeholder="To" name="inputTo">
  </div>
  <div class="checkbox">
    <label>
     <input type="checkbox" id='inputSendAll' name='inputSendAll' value='all'> ถึงทุกคน
    </label>
  </div>
  <div class="form-group">
    <label for="inputText">Text</label>
    <textarea  id="text" rows="10" name="inputText"></textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</form>
<?php
echo validation_errors();
if(isset($result)) echo $result;
?>
</body>
</html>
