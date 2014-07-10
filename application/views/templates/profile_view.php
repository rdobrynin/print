<div class="modal" id="profile">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Profile</h4>
      </div>
      <div class="errors ">
        <!--          <button type="button" class="close close-login" data-dismiss="alert">×</button>-->
        <?php echo validation_errors();?></div>
      <form role="form"  action="<?php print(base_url());?>update_profile" method="POST" autocomplete="off">
      <div class="modal-body">
     <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" value="<?php print($user[0]['first_name']);?>" class="form-control" name="first_name" id="first_name" placeholder="First name">
          </div>
        </div>
       <div class="col-md-6">
         <div class="form-group">
           <label for="last_name">Last name</label>
           <input type="text"  value="<?php print($user[0]['last_name']);?>" class="form-control" name="last_name" id="last_name" placeholder="Last name">
         </div>
       </div>
       <div class="col-md-12">
         <div class="form-group">
           <label for="phone">Phone</label>
           <input type="text"  value="<?php print($user[0]['phone']);?>" class="form-control" name= "phone" id="last_name" placeholder="Phone number">
         </div>
       </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
        <button class="btn btn-success" id="add">Add Phone</button>
        </div>
         <div id="items"></div>
       <div class="col-md-12">
         <div class="form-group">
           <label for="email_address">Email</label>
           <input type="text"  value="<?php print($user[0]['email_address']);?>" class="form-control" name="email_address" id="email_address" placeholder="Email address">
         </div>
       </div>

       <?php if($user[0]['role'] != 1):;?>
         <div class="col-md-6">
           <div class="form-group">
             <label for="last_name">Role</label>
             <select class="form-control">
               <option value="<?php print($user[0]['role']);?>"><?php print(show_role($user[0]['role']));?></option>
               <?php foreach ($users as $uk => $uv):?>
                 <?php if($uv['role'] !=$user[0]['role']):;?>
                 <option value="<?php var_dump($uv['role']);?>"><?php print(show_role($uv['role']));?></option>
                   <?php endif?>
               <?php endforeach?>
             </select>
           </div>
         </div>
       <?php endif ?>


       <div class="add_well">
  <p  class="lead">Additional information</p>
         <div class="col-md-12">
           <div class="form-group">
             <label for="skype_address">Skype</label>
             <input type="text"  value="<?php print($user[0]['skype_address']);?>" class="form-control" id="skype_address" name="skype_address" placeholder="Skype address">
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <label for="facebook_address">Facebook</label>
             <input type="text"  value="<?php print($user[0]['facebook_address']);?>" class="form-control" id="facebook_address" name="facebook_address" placeholder="Facebook address">
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <label for="linkedin_address">Linkedin</label>
             <input type="text"  value="<?php print($user[0]['linkedin_address']);?>" class="form-control" id="linkedin_address" name="linkedin_address" placeholder="Linkedin address">
           </div>
         </div>
       </div>

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
      $("#items").append('<div class="col-md-12"><div class="form-group"><label for="phone">Additional Phone</label><div><input type="text" placeholder="Additional phone number" style="margin-bottom:8px; margin-top: 2px;" class="form-control col-md-10" name="phone[]"></div><button  class="btn btn-danger btn-xs delete-phone">Delete</button></div></div></div><div>');
    });


    $("body").on("click", ".delete-phone", function (e) {
      $(this).parent("div").remove();
    });
  });
</script>
