<div class="modal" id="settings">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading"><i class="fa fa-gear"></i>&nbsp;Settings</h4>
      </div>

      <form role="form" class="form-signin" action="<?php print(base_url());?>dashboard/switch_help" method="POST" autocomplete="off">
      <div class="modal-body">
   <div class="content">
     <div class="row">
      <div class="form-group">
        <div class="col-sm-12">
          <?php if($user[0]["helpblock"]==1):?>
            <input type="checkbox" name="help_block" value="0" checked="checked" />&nbsp;Show help block
          <?php endif?>
          <?php if($user[0]["helpblock"]==false):?>
            <input type="checkbox" name="help_block" value="1" />&nbsp;Show help block
          <?php endif?>
        </div>
      </div>
     </div>
   </div>
      </div>
      <div class="modal-footer ">
        <span class="pull-left"><a href="#" data-dismiss="modal" class="btn btn-default">Close</a></span>
        <input type="hidden" name="input_url" value="<?php print($product_id = $this->uri->segment(1, 0));?>">
        <button type="submit" class="btn btn-default pull-right">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>