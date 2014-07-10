<div class="errors alert alert-danger alert-dismissible" role="alert"><?php echo validation_errors();?></div>
<?php include('navtop_view.php');?>
<?php include('sidebar_view.php');?>
<!-- Page content -->
<div id="page-content-wrapper">
  <div class="page-content inset">
    <div class="row">
<!--FORM-->
      <div class="col-md-8">
        <h2>Add client</h2>
              <form role="form" class="form-horizontal" action="<?php print(base_url());?>addclient_form" method="POST" autocomplete="on">

      <div class="address-wrapper" style="height: 100%;">
                  <p class="lead">add requirement data for company profile</p>
                <div class="form-group">
                  <label class="col-sm-12" for="client_title">Company<span class="req">*</span></label>
                  <div class="col-sm-10"><input type="text" class="form-control" name="client_title" id="client_title" placeholder="Company title here"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12" for="client_description">Company description</label>
                  <div class="col-sm-12"><textarea rows="4" cols="50" class="form-control" name="client_description"  id="client_description"></textarea></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12" for="client_email">Email<span class="req">*</span></label>
                  <div class="col-sm-6"><input type="text" class="form-control" name="client_email"  id="client_email" placeholder="Email address here"></div>
                </div>
                  <div class="form-group">
                  <label class="col-sm-12" for="client_url">URL</label>
                  <div class="col-sm-6"><input type="text" class="form-control" name="client_url"  id="client_url" placeholder="Site url"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-12">Phone<span class="req">*</span></label>
                  <div class="col-sm-4"><input type="text" class="form-control" name="client_phone" id="client_phone" placeholder="Phone number here"></div>
                  <div class="col-md-1" style="margin-bottom: 10px;">
                    <div class="btn btn-xs btn-success" id="add_phone_client">Add Phone</div>
                  </div>
                </div>
                <div id="items_phone_client"></div>
                  </div>
<!--                REGIONAL INFO-->
              <div class="address-wrapper" style="height: 100%;">
                <p class="lead">Regional information</p>
                <div class="form-group">
                  <label class="col-sm-8">Address<span class="req">*</span></label>
                  <label class="col-sm-4">Index</label>
                  <div class="col-sm-8"><input type="text" class="form-control" name="client_address"  id="client_address" placeholder="Address here"></div>
                  <div class="col-sm-4"><input type="text" class="form-control" name="client_index"  id="client_index" placeholder="Index here"></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-6">City<span class="req">*</span></label>
                  <label class="col-sm-6">Country<span class="req">*</span></label>
                  <div class="col-sm-6"><input type="text" class="form-control" name="client_city"  id="client_city" placeholder="City here"></div>
                  <div class="col-sm-6">
                    <select id="select-country" class="form-control">
                      <?php  $countries = get_countries(); ?>
                      <?php  foreach($countries as $ck => $cv): ?>
                        <option value="<?php  print($ck); ?>"><?php  print($cv); ?></option>
                      <?php  endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
<!--                CONTACT PERSON INFORMATION-->
                <div class="address-wrapper" style="height: 100%;">
                    <p class="lead">Contact persons information</p>
                  <div class="form-group">
                    <label class="col-sm-12">Manager</label>
                    <div class="col-sm-4">
                      <select id="select-manager" class="form-control">
                        <option value="1">Roman Dobrynin</option>
                        <option value="2">Andrei Abozau</option>
                        <option value="3">Jevgeni Striganov</option>
                        <option value="4">Alexandr Perch</option>
                        <option value="5">Aldir Tojama</option>
                      </select>
                    </div>
                    <div class="col-md-1" style="margin-bottom: 10px;">
                      <div class="btn btn-xs btn-success" id="add_manager_client">Add manager</div>
                    </div>
                  </div>
                  <div id="items_manager_client"></div>
<!--                  IMPLEMENTOR-->
                  <div class="form-group">
                    <label class="col-sm-12">Curator</label>
                    <div class="col-sm-4">
                      <select id="select-curator" class="form-control">
                        <option value="1">Roman Dobrynin</option>
                        <option value="2">Andrei Abozau</option>
                        <option value="3">Jevgeni Striganov</option>
                        <option value="4">Alexandr Perch</option>
                        <option value="5">Aldir Tojama</option>
                      </select>
                    </div>
                    <div class="col-md-1" style="margin-bottom: 10px;">
                      <div class="btn btn-xs btn-success" id="add_curator_client">Add curator</div>
                    </div>
                  </div>
                  <div id="items_curator_client"></div>
              </div>

                <hr>
                <input type="hidden" class="form-control" id="client_curator" name="client_curator" value="<?php print($user[0]['id']);?>">
                <input type="hidden" class="form-control" id="client_created" name="client_created" value="<?php print(time());?>">
                <input type="submit" class="btn btn-primary pull-right" id="create_company" value="Create company">
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
    $('#add_phone_client').click(function () {
      $("#items_phone_client").append('<div class="form-group"><div class="col-sm-4"><input type="text" placeholder="Additional phone number" style="margin-bottom:8px; margin-top: 2px;" class="form-control col-md-4" name="client_phone[]"></div><button  class="btn btn-xs btn-danger delete-phone-client">Delete</button></div></div><div>');
    });
    $("body").on("click", ".delete-phone-client", function (e) {
      $(this).parent("div").remove();
    });


    $('#add_manager_client').click(function () {
      manager_value = $("#select-manager option:selected").val();
      var manager_title = $("#select-manager option:selected").text();
      $('#items_manager_client').append('&nbsp;<span><input type="hidden" name="client_manager[]" value="input_manager_'+ manager_value + '"><div class="label label-default label-tag delete-manager-client" id="delete-manager-client' + manager_value + '">' + manager_title + '&nbsp;<i class="fa fa-times"></i></div></span>');

    });
    $("body").on("click", ".delete-manager-client", function (e) {
      $(this).parent("span").remove();
    });


    $('#add_curator_client').click(function () {
      curator_value = $("#select-curator option:selected").val();
      var curator_title = $("#select-curator option:selected").text();
      $('#items_curator_client').append('&nbsp;<span><input type="hidden" name="client_curator[]" value="input_curator_'+ curator_value + '"><div class="label label-default label-tag delete-curator-client" id="delete-curator-client' + curator_value + '">' + curator_title + '&nbsp;<i class="fa fa-times"></i></div></span>');

    });
    $("body").on("click", ".delete-curator-client", function (e) {
      $(this).parent("span").remove();
    });


      res = $('.errors').text();
      if(res.length > 0 ) {
        $('.errors').show();
      }
      else {
        $('.errors').hide();
      }

    $('.errors').click(function () {
      $(this).slideToggle("fast");
    });

    $('body').click(function () {
      $('.errors').slideUp( "fast");
    });

  });
</script>