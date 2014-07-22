<?php include('head_view.php');?>
  <div class="container" id="main_login" style="display: block;">
    <form class="form-signin" action="<?php print(base_url());?>signup" method="POST" autocomplete="off">
      <div class="errors ">
        <!--          <button type="button" class="close close-login" data-dismiss="alert">×</button>-->
        <?php echo validation_errors();?></div>
      <center><h2 class="text-muted">Brilliant Management</h2><small class="text-muted">Sign up user</small></center><br>
      <input type="text" id="first_name" name="first_name" value="" placeholder="First name" class="form-control" />
      <input type="text" id="last_name" name="last_name" value="" placeholder="Last name" class="form-control" />
      <input type="text" id="email_signup" autocomplete="off"  name="email" value="" class="form-control" placeholder="Email" />
    <span id="check_email"  class="label label-danger label-signin"></span>
      <input type="password" id="password_signup" name="password_signup" value="" placeholder="Password" class="form-control"/>
      <input type="password" id="password_signup_2" name="password_signup_2" value="" placeholder="Password confirmation" class="form-control"/>
      <input type="hidden" id="role_signup" name="role_signup" value="0" class="form-control"/>
      <button class="btn btn-lg btn-primary btn-block" id="login_btn"> <i class="fa fa-check"></i></button>
      <div style="padding-bottom: 20px;">
        <small class="pull-left">
          <center><br><a href="<?php echo base_url();?>" id="show_activate_form">Log in</a>
          </center>
        </small>
        <small class="pull-right">
          <center><br><a href="<?php echo base_url();?>/forgot" id="show_activate_form">Forgot password ?</a>
          </center>
        </small>

      </div>
      <?php echo form_close(); ?>
<?php include('footer_view.php');?>