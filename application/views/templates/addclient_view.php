<?php include('head.php');?>
<?php include('navtop_view.php');?>
<?php include('sidebar_view.php');?>
<!-- Page content -->
<div id="page-content-wrapper">
  <div class="page-content inset">
    <div class="row">
<!--FORM-->
      <div class="col-md-8">
        <h2>Add client</h2>



              <p class="lead">add requirement data for company profile</p>
              <form role="form" class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2" for="client_title">Company</label>
                  <div class="col-sm-10"><input type="email" class="form-control" id="client_title" placeholder="Company title here"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12" for="client_description">Description</label>
                  <div class="col-sm-12"><textarea class="form-control" id="client_description"></textarea></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-8">Address</label>
                  <label class="col-sm-4">Index</label>
                  <div class="col-sm-8"><input type="text" class="form-control" id="client_address" placeholder="Address here"></div>
                  <div class="col-sm-4"><input type="text" class="form-control" id="client_index" placeholder="Index here"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-6">City</label>
                  <label class="col-sm-6">Country</label>
                  <div class="col-sm-6"><input type="text" class="form-control" id="client_city" placeholder="City here"></div>
                  <div class="col-sm-6"><input type="text" class="form-control" id="client_country" placeholder="Country here"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2" for="client_email">Email</label>
                  <div class="col-sm-10"><input type="email" class="form-control" id="client_email" placeholder="Email address here"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Phone</label>
                  <div class="col-sm-6"><input type="text" class="form-control" id="client_phone" placeholder="Phone number here"></div>
                  <div class="col-md-4" style="margin-bottom: 10px;">
                    <button class="btn btn-success" id="add_client">Add Phone</button>
                  </div>
                </div>
                <div id="items_client"></div>
                <hr>
                <input type="submit" class="btn btn-primary pull-right" value="Create company">
              </form>
            </div>

      <div class="col-md-4 jumbotron-resp">
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


<?php include('footer.php');?>
<script>
  $(function () {
    $('#add_client').click(function () {
      $("#items_client").append('<div class="form-group"><div class="col-sm-2"><label for="client_phone">+ Phone</label></div><div class="col-sm-6"><input type="text" placeholder="Additional phone number" style="margin-bottom:8px; margin-top: 2px;" class="form-control col-md-10" name="client_phone[]"></div><button  class="btn btn-danger delete-phone-client">Delete</button></div></div><div>');
    });
    $("body").on("click", ".delete-phone-client", function (e) {
      $(this).parent("div").remove();
    });

    $('#rootwizard').bootstrapWizard({'nextSelector': '.button-next', 'previousSelector': '.button-previous'});


    });
</script>