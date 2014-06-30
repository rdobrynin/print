<?php include('head.php');?>

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

        <div class="field">
          <label for="first_name">First name:</label>
          <input type="text" id="first_name" name="first_name" value="" placeholder="First name" class="login username-field form-control" />
        </div> <!-- /field -->


        <div class="field">
          <label for="last_name">Last name:</label>
          <input type="text" id="last_name" name="last_name" value="" placeholder="Last name" class="login password-field form-control"/>
        </div>

<!--        ACCOUNT INFO-->
        <fieldset>
          <legend>Account information</legend>
          <div class="field">
            <label for="email_address_signup"><i class="fa fa-user"></i>&nbsp;Email address</label>
            <input type="text" id="email_address_signup" name="email_address_signup" value="" placeholder="Email" class="login username-field form-control" />
          </div> <!-- /field -->


          <div class="field">
            <label for="password_signup"><i class="fa fa-key"></i>&nbsp;Password:</label>
            <input type="password" id="password_signup" name="password_signup" value="" placeholder="Password" class="login password-field form-control"/>
          </div>

          <div class="field">
            <input type="password" id="password_signup_2" name="password_signup_2" value="" placeholder="Password confirmation" class="login password-field form-control"/>
          </div>

          <div class="errors ">
            <?php echo validation_errors();?></div>
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
</body>
</html>