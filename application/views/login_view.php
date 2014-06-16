<?php include('head_login.php');?>

<body>

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
        <p>Please provide your details</p>

        <div class="field">
          <label for="username">Username</label>
          <input type="text" id="email_address" name="email_address" value="" placeholder="Email" class="login username-field form-control" />
        </div> <!-- /field -->
        <div class="field">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field form-control"/>
        </div>

      </div> <!-- /login-fields -->

      <div class="login-actions">
        <button class="button btn btn-success btn-large">Sign In</button>
      </div> <!-- .actions -->
      <?php echo form_close(); ?>
    </div> <!-- /content -->
    <div id="check_login" style="color:red;"></div>

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