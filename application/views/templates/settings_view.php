<div class="modal" id="settings">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading"><i class="fa fa-gear"></i>&nbsp;Settings</h4>
      </div>
      <?php var_dump($helpblock);?>

      <form role="form" class="form-signin" action="http://localhost/prm/dashboard" method="POST" autocomplete="off">
      <div class="modal-body">
     <div class="row">
       <?php if($helpblock=='on'):?>
         <input type="checkbox" name="helpblock" value="on" checked="checked" />&nbsp;Show help block
       <?php endif?>
       <?php if($helpblock==false):?>
         <input type="checkbox" name="helpblock" value="on" />&nbsp;Show help block
       <?php endif?>
     </div>
      <div class="modal-footer ">
        <span class="pull-right"><a href="#" data-dismiss="modal" class="btn btn-default">Close</a></span>
        <button type="submit" class="btn btn-default pull-left">Submit</button>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(function () {
    $("#add").click(function (e) {
//      $(this).attr('disabled','disabled');
//Append a new row of code to the "#items" div
      $("#items").append('<div class="col-md-12"><div class="form-group"><label for="phone">Additional Phone</label><div><input type="text" placeholder="Additional phone number" style="margin-bottom:8px; margin-top: 2px;" class="form-control col-md-10" name="input[]"></div><button  class="btn btn-danger btn-xs delete-phone">Delete</button></div></div></div><div>');
    });


    $("body").on("click", ".delete-phone", function (e) {
      $(this).parent("div").remove();
    });
  });
</script>
