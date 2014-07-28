<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content inset">
        <div class="row">
            <div class="col-md-8">
                <a href="" data-toggle="modal" data-target="#invite" title="invite">
                    <button class="btn btn-primary btn-xs"> Invite person</button>
                </a>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading clickable">
                        <h3 class="panel-title">Activity Stream</h3>
                        <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-minus"></i></span>
                    </div>
                    <div class="panel-body">

                        <div class="sub-activity">
                            <div class="avatar-activity">
                                <span class="avatar-img">
                                    <a href="http://localhost/prm/profile"><img src="http://localhost/prm/uploads/avatar/bg_man@2x.jpg" height="45"></a>
                                </span>
                            </div>
                            <div class="activity-item-summary">
                                <a href="/secure/ViewProfile.jspa?name=romdo" class="activity-item-user activity-item-author" target="_parent">Roman D...</a>
                                &nbsp;<span class="label label-warning label-xs">approve</span>&nbsp;
                                <a href="#" target="_parent"><span class="resolved-link">ECL-217</span> - LESS implemetation</a>
                                <div class="activity-item-description">

                                    <div class="activity-item-info">
                                        <i class="fa fa-clock-o clock-activity"></i>
                                        <span class="timestamp">5 hours ago</span>&nbsp;
                                       <span class="activity-item-action"><a href="#" class="activity-item-comment-link">Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sub-activity">
                            <div class="avatar-activity">
                                <span class="avatar-img">
                                    <a href="http://localhost/prm/profile"><img src="http://localhost/prm/uploads/avatar/TaskEasy-Logo.png" height="45"></a>
                                </span>
                            </div>
                            <div class="activity-item-summary">
                                <a href="/secure/ViewProfile.jspa?name=romdo" class="activity-item-user activity-item-author" target="_parent">Jevgeni S...</a>&nbsp;<span class="label label-default label-xs">closed</span>&nbsp;
                                <a href="#" target="_parent"><span class="resolved-link">ECL-217</span> - LESS implemetation loremip sumcococodfdf Be carefull for implementation </a>
                                <div class="activity-item-description">

                                    <div class="activity-item-info">
                                        <i class="fa fa-clock-o clock-activity"></i>
                                        <span class="timestamp">30 min ago</span>&nbsp;
                                        <span class="activity-item-action"><a href="#" class="activity-item-comment-link">Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sub-activity">
                            <div class="avatar-activity">
                                <span class="avatar-img">
                                    <a href="http://localhost/prm/profile"><img src="http://localhost/prm/uploads/avatar/bg_man@2x.jpg" height="45"></a>
                                </span>
                            </div>
                            <div class="activity-item-summary">
                                <a href="/secure/ViewProfile.jspa?name=romdo" class="activity-item-user activity-item-author" target="_parent">Roman D...</a>
                                &nbsp;<span class="label label-warning label-xs">approve</span>&nbsp;
                                <a href="#" target="_parent"><span class="resolved-link">ECL-217</span> - LESS implemetation</a>
                                <div class="activity-item-description">

                                    <div class="activity-item-info">
                                        <i class="fa fa-clock-o clock-activity"></i>
                                        <span class="timestamp">5 hours ago</span>&nbsp;
                                        <span class="activity-item-action"><a href="#" class="activity-item-comment-link">Comment</a></span>
                                        <form class="activity-item-comment-form ready" method="post" action="" style="">
                                            <fieldset><input type="hidden" name="replyTo" value="">
                                                <input type="hidden" name="xsrfToken" value=""><textarea cols="40" rows="6" name="comment"></textarea>
                                            </fieldset><div class="submit pull-left" style="padding-left: 54px;"><button name="submit" type="submit" class="btn btn-danger btn-xs">Add</button>&nbsp;
                                                <a href="#" class="btn btn-default btn-xs close-activity-form">Cancel</a></div></form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="sub-activity">
                            <div class="avatar-activity">
                                <span class="avatar-img">
                                    <a href="http://localhost/prm/profile"><img src="http://localhost/prm/uploads/avatar/TaskEasy-Logo.png" height="45"></a>
                                </span>
                            </div>
                            <div class="activity-item-summary">
                                <a href="/secure/ViewProfile.jspa?name=romdo" class="activity-item-user activity-item-author" target="_parent">Jevgeni S...</a>&nbsp;<span class="label label-default label-xs">closed</span>&nbsp;
                                <a href="#" target="_parent"><span class="resolved-link">ECL-217</span> - LESS implemetation loremip sumcococodfdf Be carefull for implementation </a>
                                <div class="activity-item-description">

                                    <div class="activity-item-info">
                                        <i class="fa fa-clock-o clock-activity"></i>
                                        <span class="timestamp">30 min ago</span>&nbsp;
                                        <span class="activity-item-action"><a href="#" class="activity-item-comment-link">Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="show-more-activity"> <button class="btn btn-default btn-xs" style="width: 100%">Show more</button></div>

                </div>
            </div>
        </div>
        <!-- ./row-->
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="invite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-content-inverse">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">
                    <small>Contact person invitaion</small>
                </h4>
            </div>
            <div class="modal-body">
                <?php $attributes = array('class' => 'form-signin', 'id' => 'invite-form', 'autocomplete' => 'on'); ?>
                <?php echo form_open('#', $attributes); ?>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name_invite" class="form-control btn-special input-sm" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name_invite" class="form-control btn-special input-sm" placeholder="Last Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" id="email_invite" class="form-control btn-special input-sm" placeholder="Email Address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <select class="form-control selectpicker" name="category">
                                <?php foreach ($roles as $rk => $rv): ?>
                                    <option value="<?php print($rv['rid']); ?>"><?php print(ucfirst($rv['title'])); ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="invite-ajax-btn">Invite</button>
                <!--                                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>-->
            </div>
        </div>
    </div>
</div> <!-- #/myModal -->
</div>



