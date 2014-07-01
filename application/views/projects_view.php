<?php include('head.php');?>
<?php include('navtop_view.php');?>
<div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar-wrapper">

    <ul class="sidebar-nav">
      <li><a href="dashboard"><i class="fa fa-dashboard"></i>&nbsp;<span class="left-resp-menu">Dashboard</span></a>
      </li>
      <li  class="active"><a href="projects"><i class="fa fa-cube"></i>&nbsp;<span class="left-resp-menu">Projects</span></a><span class="badge badge-resp">1</span>
      </li>
      <li><a href="#"><i class="fa fa-tasks"></i>&nbsp;<span class="left-resp-menu">Tasks</span></a><span class="badge badge-resp">8</span>
      </li>
      <li><a href="#"><i class="fa fa-users"></i>&nbsp;<span class="left-resp-menu">Team</span></a>
      </li>
      <li><a href="#"><i class="glyphicon glyphicon-stats"></i>&nbsp;<span class="left-resp-menu">Chart</span></a>
      </li>
      <li><a href="comments"><i class="fa fa-comment"></i>&nbsp;<span class="left-resp-menu">Comments</span></a>
      </li>
      <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>&nbsp;<span class="left-resp-menu">Help</span></a>
      </li>


      <!--MINI INBOX-->
      <div class="mini-inbox">
        <div class="alert inbox">
          <button type="button" class="close" data-dismiss="alert">
            ×
          </button>

          <a href="javascript:void(0)">
            <i class="fa fa-comment"></i>
            From: Evgeni S...
          </a>
          <span class="message-mini">Andrei, <a href="">close</a> Task (111)...</span>
        </div>
        <!-- inbox message 2-->
        <div class="alert inbox">
          <button type="button" class="close" data-dismiss="alert">
            ×
          </button>
          <a href="javascript:void(0)">
            <i class="fa fa-comment"></i>
            Re: Task (111)...
          </a>
          <span class="message-mini">Jevgeni, need more time...</span>
        </div>
        <!-- inbox message 3-->
        <div class="alert inbox last-child">
          <button type="button" class="close" data-dismiss="alert">
            ×
          </button>
          <a href="javascript:void(0)">
            <i class="fa fa-bell"></i>
            Project (123) has ...
          </a>
          <span class="message-mini">Project (123) has been completed..</span>
        </div>

      </div>
      <!--END MINI INBOX-->

    </ul>
  </div>

<!-- Page content -->
<div id="page-content-wrapper">

  <!-- Keep all page content within the page-content inset div! -->
  <div class="page-content inset">
      <div class="row">


        <div class="col-md-12">
          <h4>Projects</h4>
          <div class="table-responsive">


            <table id="mytable" class="table table-bordred table-striped">

              <thead>

              <th><input type="checkbox" id="checkall" /></th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Address</th>
              <th>Edit</th>
              <th>Delete</th>
              </thead>
              <tbody>

              <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Irshad</td>
                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>

              <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Irshad</td>
                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>


              <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Irshad</td>
                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>



              <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Irshad</td>
                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>



              <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Irshad</td>
                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>
              </tbody>

            </table>

            <div class="clearfix"></div>
            <ul class="pagination pull-right">
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>

          </div>

        </div>
      </div>
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input class="form-control " type="text" placeholder="Mohsin">
            </div>
            <div class="form-group">

              <input class="form-control " type="text" placeholder="Irshad">
            </div>
            <div class="form-group">
              <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


            </div>
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
          </div>
          <div class="modal-body">

            <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
            <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-remove"></span> No</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <p id="back-top">
      <a href="#top"><span></span><i style="font-size: 30px;" class="fa fa-arrow-circle-up"></i><span></span></a>
    </p>

  </div>
</div>
</div>

<?php include('footer.php');?>
