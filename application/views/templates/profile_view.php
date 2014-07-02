<div class="modal" id="profile">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Profile</h4>
      </div>
      <form role="form">
      <div class="modal-body">
     <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" value="<?php print($user[0]['first_name']);?>" class="form-control" id="first_name" placeholder="First name">
          </div>
        </div>
       <div class="col-md-6">
         <div class="form-group">
           <label for="last_name">Last name</label>
           <input type="text"  value="<?php print($user[0]['last_name']);?>" class="form-control" id="last_name" placeholder="Last name">
         </div>
       </div>
         <div class="col-md-4">
           <div class="form-group">
             <label for="first_name">Role</label>
           <select class="form-control" id="role">
             <option value="<?php print($user[0]['role']);?>"><?php print(show_role($user[0]['role']));?></option>
             <option value="2">Manager</option>
             <option value="3">Implementor</option>
             <option value="4">Customer</option>
             <option value="5">Observer</option>
             </select>
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
