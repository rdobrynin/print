<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Error404</title>
  <!-- Bootstrap core CSS -->
  <link href="<?php print(base_url());?>css/bootstrap.css" rel="stylesheet">
  <!-- Add custom CSS here -->
  <link href="<?php print(base_url());?>css/error.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="row">
  <div class="page-404">
    <img src="<?php print(base_url());?>img/page-404.png" alt="">
    <h3>We're sorry, but the page you were looking for doesn't exist.</h3>
    <p>You can start from the <a href="javascript:history.go(-1)">Previous Page</a></p>
  </div>
</div>
<div class="container">
  <div class="row">
    <h1 class="text-center"><a href="#myModal" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Us</a></h1>
  </div>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">We'd Love to Hear From You</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal col-sm-12">
          <div class="form-group"><label>Name</label><input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
          <div class="form-group"><label>Message</label><textarea class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
          <div class="form-group"><label>E-Mail</label><input class="form-control email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
          <div class="form-group"><label>Phone</label><input class="form-control phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"></div>
          <div class="form-group"><button type="submit" disabled="disabled" style="width: 100%;" class="btn btn-success pull-left">Send It!</button> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>
</form>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>




</body>

<!-- JavaScript -->
<script src="<?php print(base_url());?>js/jquery-1.10.2.js"></script>
<script src="<?php print(base_url());?>js/bootstrap.js"></script>
<script src="<?php print(base_url());?>js/script.js"></script>
</body>

</html>
