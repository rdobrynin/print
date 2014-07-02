<?php include('head.php'); ?>

<div class="container">
  <div class="row">
    <ul class="nav nav-tabs" id="admin-users-tab">

      <li class="active">
        <a href="#current-users" data-toggle="tab" title="Current users">
         current users
        </a></li>

      <li><a href="#new-users" data-toggle="tab" title="New users">
         new users
        </a>
      </li>

    </ul>

    <div class="tab-content">
      <div class="tab-pane fade in active" id="current-users">
        <p>current users</p>
      </div>
      <div class="tab-pane fade" id="new-users">
     <p>new users</p>
      </div>
      <div class="clearfix"></div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>

<script>
  $('#admin-users-tab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
</script>