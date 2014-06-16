<?php include('head_login.php');?>

<body>

<div>
  <div class="account-container">
    <div class="content clearfix">
    <!--  HELPER FORM-->


      <h1>Sign up</h1>
    <?php echo form_open('signup'); ?>

<!--      PERSONAL INFO-->
      <fieldset>
        <legend>Personal information</legend>

      <div class="login-fields">
        <div class="errors ">
<!--          <button type="button" class="close close-login" data-dismiss="alert">×</button>-->
          <?php echo validation_errors();?></div>


        <div class="field">
          <label for="first_name">First name:</label>
          <input type="text" id="first_name" name="first_name" value="" placeholder="First name" class="login username-field form-control" />
        </div> <!-- /field -->


        <div class="field">
          <label for="last_name">Last name:</label>
          <input type="text" id="last_name" name="last_name" value="" placeholder="Last name" class="login password-field form-control"/>
        </div>

        <div class="field">
          <label for="phone"><i class="fa fa-phone"></i>&nbsp;Phone number:</label>
          <input type="text" id="phone" name="phone" value="" placeholder="Phone" class="login password-field form-control"/>
        </div>

        <div class="field">
          <label for="facebook"><i class="fa fa-facebook-square"></i>&nbsp;Facebook:</label>
          <input type="text" id="facebook" name="facebook" value="" placeholder="Facebook address" class="login password-field form-control"/>
        </div>

        <div class="field">
          <label for="skype"><i class="fa fa-skype"></i>&nbsp;Skype:</label>
          <input type="text" id="skype" name="skype" value="" placeholder="Skype" class="login password-field form-control"/>
        </div>

<!--        ACCOUNT INFO-->
        <fieldset>
          <legend>Account information</legend>
          <div class="field">
            <label for="email_address_signup"><i class="fa fa-user"></i>&nbsp;Username</label>
            <input type="text" id="email_address_signup" name="email_address_signup" value="" placeholder="Email" class="login username-field form-control" />
          </div> <!-- /field -->
          <div class="field">
            <label for="password_signup"><i class="fa fa-key"></i>&nbsp;Password:</label>
            <input type="password" id="password_signup" name="password_signup" value="" placeholder="Password" class="login password-field form-control"/>
          </div>
        </fieldset>


      </div> <!-- /login-fields -->
      <div class="login-actions">
        <button class="button btn btn-success btn-large" id="login_btn">Sign In</button>
      </div> <!-- .actions -->
   </fieldset>
      <?php echo form_close(); ?>

      <div class="sign_up"><a href="<?php echo base_url();?>">Log in</a></div>
    </div> <!-- /content -->
    <div id="check_login"></div>

  </div> <!-- /account-container -->
  <!-- JavaScript -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.js"></script>
  <!-- Page Specific Plugins -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
  <script src="js/morris/chart-data-morris.js"></script>
  <script src="js/tablesorter/jquery.tablesorter.js"></script>
  <script src="js/tablesorter/tables.js"></script>
  <script src="js/script.js"></script>
</body>
</html>