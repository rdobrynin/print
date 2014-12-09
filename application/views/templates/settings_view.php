<div class="modal" id="settings">
  <div class="modal-dialog">
      <?php $attributes = array('class' => 'form-signin', 'id' => 'settings_form', 'autocomplete' => 'on'); ?>
      <?php echo form_open('#', $attributes); ?>
    <div class="modal-content modal-content-inverse">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading"><i class="fa fa-gear"></i>&nbsp;Settings</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="help_block">Show help block</label>
                          <input type="checkbox" name="help_block" id="help_block" <?php if($user[0]["helpblock"]==1):?> value="0" checked="checked" <?php else: ?>value="1"<?php endif?> />
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer ">
        <span class="pull-left"><a href="#" data-dismiss="modal" class="btn btn-default">Close</a></span>
      </div>
    </div>
      <?php form_close( );?>
  </div>
</div>