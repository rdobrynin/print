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
                        <div style="display: none; margin-bottom: 10px;" id="check_email" class="label label-danger label-signin"><i class="fa fa-exclamation-circle"></i>&nbsp;This email is already in system</div>
                        <div style="display: none; margin-bottom: 10px;" id="check_email_f" class="label label-danger label-signin"><i class="fa fa-exclamation-circle"></i>&nbsp;Email address is invalid</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <select class="form-control selectpicker" id="role_invite" name="role_invite">
                                <?php foreach ($roles as $rk => $rv): ?>
                                    <?php if ($rv['rid'] != 5): ?>
                                        <option value="<?php print($rv['rid']); ?>"><?php print(ucfirst($rv['title'])); ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div style="display: none; margin-bottom: 10px;" id="send_mail" class="label label-primary label-signin"><i class="fa fa-exclamation-circle"></i>&nbsp;You have successfully sent invitation</div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="user_id" id="user_invite_id" value="<?php print($user[0]['id'])?>">
                <div style="display: none; margin-bottom: 10px;" id="check_empty" class="label label-danger label-signin"><i class="fa fa-exclamation-circle"></i>&nbsp;Fields must be not empty</div>
                <button type="button" class="btn btn-success" id="invite-ajax-btn">Invite</button>
                <!-- <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>-->
            </div>
        </div>
        <?php form_close( );?>
    </div>
</div> <!-- #/myModal -->

<!--Create project modal window-->
<div class="modal fade" id="addproject_modal" tabindex="-1" role="dialog" aria-labelledby="addproject_formLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php $attributes = array('class' => 'form-signin', 'id' => 'addproject_form', 'autocomplete' => 'on'); ?>
        <?php echo form_open('#', $attributes); ?>
        <div class="modal-content modal-content-inverse">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    <small>Crete project</small>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="project_title">Project title</label>
                            <input type="text" name="project_title" id="project_title" class="form-control btn-special" placeholder="Project title">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="project_desc">Description</label>
                            <textarea name="project_desc" id="project_desc" class="form-control btn-special" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div style="display: none; margin-bottom: 10px;" id="save_project_modal" class="label label-primary label-signin"><i class="fa fa-exclamation-circle"></i>&nbsp;You have successfully added project</div>
                </div>
            <div class="modal-footer">
                <input type="hidden" name="user_added_id" id="user_added_id" value="<?php print($user[0]['id'])?>">
                <div style="display: none; margin-bottom: 10px;" id="check_empty_project" class="label label-danger label-signin"><i class="fa fa-exclamation-circle"></i>&nbsp;Fields must be not empty</div>
                <button type="button" class="btn btn-success" id="addproject_btn">Save</button>
                <button type="button" class="btn btn-success" id="addproject_addtask_btn">Save & create task</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <?php form_close( );?>
    </div>
</div> <!-- #/myModal -->