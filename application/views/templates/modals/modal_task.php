<div class="modal" id="task_modal_timer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Log Task</h4>
            </div>
           <div class="row-fluid">
               <form class="form-horizontal" name="task_log" method="post" action="#">
                   <div class="modal-body">

                       <div class="form-group">
                          <div class="col-md-12">
                              <select class="form-control selectpicker" name="category">
                                  <option>ECL_113</option>
                                  <option>ECL_115</option>
                              </select>
                          </div>
                       </div>

                       <div class="form-group">
                           <label class="control-label col-md-12 text-left" for="email">Worked</label>
                           <div class="col-md-4">
                               <input type="text" class="form-control" id="log_timer" name="log_timer"/>
                           </div>
                       </div>
                       <div class="form-group">
                           <label class="control-label col-md-12" for="comment">Comment</label>
                           <div class="col-md-12">
                               <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your comment here"></textarea>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <a href="#" data-dismiss="modal" class="btn btn-default">Close</a>
                       <a href="#" class="btn btn-success pull-left">Log task</a>
                   </div>
               </form>
           </div>
        </div>
    </div>
</div>