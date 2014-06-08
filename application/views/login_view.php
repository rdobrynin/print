<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <style>label {display: block;} .errors {color:red;}</style>
</head>
<body>

<div>
  <h1>Login page</h1>


  <!--  HELPER FORM-->
  <?php echo form_open('admin'); ?>

  <p><?php echo form_label('Email address', 'email_address') ?>
    <?php echo form_input('email_address', '', 'id="email_address"'); ?>
  </p>

  <p><?php echo form_label('Password:', 'password') ?>
    <?php echo form_password('password', '', 'id="password"'); ?>
  </p>
  <p><?php echo form_submit('submit', 'login')?></p>
  <?php echo form_close(); ?>
  <div class="errors"><?php echo validation_errors();?></div>
</div>
</body>
</html>