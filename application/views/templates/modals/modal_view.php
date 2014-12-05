<div class="modal fade" id="invite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php $attributes = array('class' => 'form-signin', 'id' => 'invite-form', 'autocomplete' => 'off'); ?>
        <?php echo form_open('#', $attributes); ?>
        <div class="modal-content modal-content-inverse">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    <small>Contact person invitation</small>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name_invite" id="first_name_invite" class="form-control btn-special" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name_invite" id="last_name_invite" class="form-control btn-special" placeholder="Last Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="email" name="email_invite" id="email_invite" class="form-control btn-special" placeholder="Email Address">
                        </div>
                        <div style="display: none; margin-bottom: 10px;" id="check_email" class="label label-danger label-signin"></div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <select class="form-control selectpicker" id="role_invite" name="role_invite">
                                <?php foreach ($roles as $rk => $rv): ?>
                                    <?php if ($rv['rid'] == 3 || $rv['rid'] == 2): ?>
                                        <option value="<?php print($rv['rid']); ?>"><?php print(ucfirst($rv['title'])); ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div style="display: none; margin-bottom: 10px;" id="check_empty" class="label label-danger label-signin"><i class="fa fa-exclamation-circle"></i>&nbsp;Fields must be not empty</div>
                <button type="button" class="btn btn-danger" id="invite-ajax-btn">Invite</button>
                <!-- <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>-->
            </div>
        </div>
        <?php form_close( );?>
    </div>
</div> <!-- #/myModal -->