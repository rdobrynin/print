<?php include('head.php');?>
<?php include('navtop_view.php');?>
<?php include('sidebar_view.php');?>


<!-- Page content -->
<div id="page-content-wrapper">



  <!-- Keep all page content within the page-content inset div! -->
  <div class="page-content inset">
    <h3>Users administration</h3>
    <div class="row">

      <h3>Administer users</h3>
      <div class="row">
        <div class="panel panel-primary filterable">
          <div class="panel-heading">
            <h3 class="panel-title">Users</h3>
            <div class="pull-right">
              <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
            </div>
          </div>
          <table class="table">
            <thead>
            <tr class="filters">
              <th><input type="text" class="form-control" placeholder="#" disabled></th>
              <th><input type="text" class="form-control" placeholder="Name" disabled></th>
              <th><input type="text" class="form-control" placeholder="Username" disabled></th>
              <th><input type="text" class="form-control" placeholder="Password" disabled></th>
              <th><input type="text" class="form-control" placeholder="Email" disabled></th>
              <th><input type="text" class="form-control" placeholder="Role" disabled></th>
              <th><input type="text" class="form-control" placeholder="Created" disabled></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $uk => $uv):?>
            <tr>
              <td><?php print($uv['id']);?></td>
              <td><?php print($uv['first_name'].' '.$uv['last_name']);?></td>
              <td><?php print($uv['username']);?></td>
              <td><?php print($uv['password']);?></td>
              <td><?php print($uv['email_address']);?></td>
              <td><?php print($uv['role']);?></td>
              <td><?php print($uv['date_created']);?></td>
            </tr>
            <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <p id="back-top">
      <a href="#top"><span></span><i style="font-size: 30px;" class="fa fa-arrow-circle-up"></i><span></span></a>
    </p>

  </div>
</div>
</div>

<?php include('footer.php');?>
