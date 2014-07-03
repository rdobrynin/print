<?php include('head.php');?>
<?php include('navtop_view.php');?>
<?php include('sidebar_view.php');?>
<!-- Page content -->
<div id="page-content-wrapper">
  <div class="page-content inset">
    <div class="row">
<!--FORM-->
      <div class="col-md-8">
        <h2>Add client<p class="lead">add new company profile</p></h2>
        <form role="form" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2" for="client_title">Company title</label>
            <div class="col-sm-10"><input type="email" class="form-control" id="client_title" placeholder="Company title here"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="client_description">Description</label>
            <div class="col-sm-10"><textarea class="form-control" id="client_description"></textarea></div>
          </div>
          <div class="form-group">
            <label class="col-sm-2" for="client_email">Email</label>
            <div class="col-sm-10"><input type="email" class="form-control" id="client_email" placeholder="Email address here"></div>
          </div>
        <div class="form-group">
          <label class="col-sm-2">Phone</label>
          <div class="col-sm-6"><input type="text" class="form-control" id="client_phone" placeholder="Phone number here"></div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <button class="btn btn-xs btn-success" id="add">Add Phone</button>
          </div>
        </div>
          <div id="items"></div>
          <div class="form-group">
            <label class="col-sm-2">Options</label>
            <div class="col-sm-5"><input type="text" class="form-control" placeholder="Option 1"></div>
            <div class="col-sm-5"><input type="text" class="form-control" placeholder="Option 2"></div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
          </div>
        </form>
        <hr>
      </div>
      <div class="col-md-4">
        <div class="jumbotron">
          <h2>Start your productivity here</h2>
          <p>You can read technical documentation here</p>
          <p><a href="#" class="btn btn-primary">Learn More&nbsp;&nbsp;<i class="fa fa-caret-right" style="padding-top: 2px; position: absolute;"></i></a>
          </p>
        </div>
      </div>
<!--      FORM-->
    </div>
    <p id="back-top">
      <a href="#top"><span></span><i style="font-size: 30px;" class="fa fa-arrow-circle-up"></i><span></span></a>
    </p>
  </div>
</div>
</div>
<script>
  $(function () {
    $('#add').click(function (e) {
      $("#items_client").append('<div class="form-group"><label class="col-sm-2" for="phone">Additional Phone</label><div class="col-sm-6"><input type="text" placeholder="Additional phone number" style="margin-bottom:8px; margin-top: 2px;" class="form-control" name="input[]"><button  class="btn btn-danger btn-xs delete-phone">Delete</button></div></div></div><div>');
    });
  });
</script>

<?php include('footer.php');?>
