<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

    <title>PTP Administrator Login</title>

    <link href="<?php echo base_url(); ?>assets/css/adminstyle.css" rel="stylesheet">

  </head>
  <body>
    <h1 class="login-title">Administrator Login</h1>
    <div class="wrapper-for-login">
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/verifylogin'); ?>
    <fieldset id="fieldset">
    <label id="username" for="username">Username:</label>
      <input type="text" size="20" id="username" name="username"/>
      <br/>
      <label for="password">Password:</label>
      <input type="password" size="20" id="passowrd" name="password"/>
      <br/>
    </fieldset>
      <div class="container1">
      <input id="submit" type="submit" value="Login"/>
      </div>
    </form>
    </div>
  </body>
</html>
