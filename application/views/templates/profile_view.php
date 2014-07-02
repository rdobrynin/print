<div class="modal" id="profile">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Profile</h4>
      </div>
      <div class="modal-body">
          <div class="row">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">
                      <br>
                      <br>
                      <div class=""><span class=" badge badge-warning">8 messages</span></div></div>

                    <div class=" col-md-9 col-lg-9 ">
                      <table class="table table-user-information">
                        <tbody>
                        <tr>
                          <td>Name:</td>
                          <td><?php print($user[0]['first_name']." " .$user[0]['last_name']);?></td>
                          <td><span class="glyphicon glyphicon-pencil"></span></td>
                        </tr>
                        <tr>
                          <td>Created:</td>
                          <td><?php print($user[0]['date_created'])?></td>
                        </tr>
                        <tr>
                          <td>Position</td>
                          <td><?php print(show_role($user[0]['role']));?></td>
                          <td><span class="glyphicon glyphicon-pencil"></span></td>
                        </tr>
                        <tr>
                        <tr>
                          <td>E-mail</td>
                          <td><a href="mailto:<?php print($user[0]['email_address'])?>"><?php print($user[0]['email_address'])?></a></td>
                          <td><span class="glyphicon glyphicon-pencil"></span></td>
                        </tr>
                        <tr>
                          <td>Phone number:</td>
                          <td>+372 551213242</td>
                          <td><span class="glyphicon glyphicon-pencil"></span></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
        </div>
      <div class="modal-footer ">
        <span class="pull-right"><a href="#" data-dismiss="modal" class="btn btn-default">Close</a></span>
        <span class="pull-left"><a href="#"  class="btn btn-info">Update</a></span>
      </div>
      </div>
    </div>
  </div>
</div>
