<?php include('head.php');?>
  <div class="container" id="main_login" style="display: block;">
    <form class="form-signin" action="<?php print(base_url());?>admin" method="POST" autocomplete="off">
      <div class="errors ">
        <?php echo validation_errors();?></div>
      <center><h2 class="text-muted">Brilliant Management</h2><small class="text-muted">user athorization</small></center><br>

      <input type="text" id="email_address"  name="email_address" value="" class="form-control" placeholder="Email" />
      <input type="password" id="password" name="password" value="" placeholder="Password" class="form-control"/>
      <button class="btn btn-lg btn-primary btn-block" id="login_btn"> <i class="fa fa-check"></i></button>
<div style="padding-bottom: 20px;">
  <small class="pull-left">
    <center><br><a href="signup" id="show_activate_form">Sign up</a>
    </center>
  </small>
  <small class="pull-right">
    <center><br><a href="forgot" id="show_activate_form">Forgot password ?</a>
    </center>
  </small>
</div>
      <?php echo form_close(); ?>
  </div>
<?php include('footer.php');?>