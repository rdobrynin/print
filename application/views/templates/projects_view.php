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
    <h3>Administer projects</h3>
      <div class="row">
        <div class="panel panel-primary filterable">
          <div class="panel-heading">
            <h3 class="panel-title">Current Projects</h3>
            <div class="pull-right">
              <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
            </div>
          </div>
          <table class="table">
            <thead>
            <tr class="filters">
              <th><input type="text" class="form-control" placeholder="#" disabled></th>
              <th><input type="text" class="form-control" placeholder="Project name" disabled></th>
              <th><input type="text" class="form-control" placeholder="Tasks" disabled></th>
              <th><input type="text" class="form-control" placeholder="Opt time" disabled></th>
              <th><input type="text" class="form-control" placeholder="Due to" disabled></th>
              <th><input type="text" class="form-control" placeholder="Curator" disabled></th>
              <th><input type="text" class="form-control" placeholder="Status" disabled></th>
              <th><input type="hidden" class="form-control" placeholder="Edit" disabled></th>
              <th><input type="hidden" class="form-control" placeholder="Delete" disabled></th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Magendo shop</td>
                <td><a href="#"><span class="badge badge-task" id="route-task">3</span></a></td>
                <td><?php print(date('F j, Y'));?></td>
                <td><?php print(date('F j, Y'));?></td>
                <td>Roman Dobrynin</td>
                <td><span class="label label-success">Process</span></td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>
              <!--TASK-->
<tr>
  <td colspan="9" class="td-task" id="task-for-project">
    <table class="table table-task">
      <tbody class="tbody-task">
      <tr>
      <th>#</th>
      <th>Task name</th>
      <th>Started</th>
      <th>Due to</th>
      <th>Curator</th>
      <th>Implementor</th>
      <th>Status</th>
      <th>Edit</th>
      <th>Delete</th>
      </tr>
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
      </tr>
      <tr>
        <td>2</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
      </tr>
      <tr>
        <td>3</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
      </tr>
      </tbody>
    </table>
  </td>
</tr>
              <!-- TASK-->
              <tr>
                <td>2</td>
                <td>Facebook application</td>
                <td></td>
                <td><?php print(date('F j, Y'));?></td>
                <td><?php print(date('F j, Y'));?></td>
                <td>Roman Dobrynin</td>
                <td><span class="label label-warning">Approve</span></td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>

            </tbody>
          </table>
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

<script>
  $("#route-task").click(function () {
$('#task-for-project').fadeToggle( "fast", function() {
});

  });
</script>
