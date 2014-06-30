<?php include('head.php');?>
<div>
  <div class="account-container">
    <div class="content clearfix">
    <!--  HELPER FORM-->
    <?php echo form_open('admin'); ?>

      <h1>Member Login</h1>

      <div class="login-fields">
        <div class="errors ">
<!--          <button type="button" class="close close-login" data-dismiss="alert">×</button>-->
          <?php echo validation_errors();?></div>
        <div class="field">
          <label for="username"><i class="fa fa-user"></i>&nbsp;Username</label>
          <input type="text" id="email_address" name="email_address" value="" placeholder="Email" class="login username-field form-control" />
        </div> <!-- /field -->
        <div class="field">
          <label for="password"><i class="fa fa-key"></i>&nbsp;Password:</label>
          <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field form-control"/>
        </div>
      </div> <!-- /login-fields -->
      <div class="login-actions">
        <button class="button btn btn-success btn-large" id="login_btn">Log in</button>
      </div> <!-- .actions -->
      <?php echo form_close(); ?>
      <div class="sign_up pull-left"><a href="signup">Sign up</a></div>
      <div class="sign_up pull-right"><a href="forgot">Forgot password ?</a></div>
    </div> <!-- /content -->
    <div id="check_login"></div>

  </div> <!-- /account-container -->
  <!-- JavaScript -->
<?php include('footer.php');?>