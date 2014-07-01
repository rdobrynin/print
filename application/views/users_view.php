<?php include('head.php');?>
<?php include('navtop_view.php');?>
<?php include('sidebar_view.php');?>


<!-- Page content -->
<div id="page-content-wrapper">
  <div class="content-header">
    <h1>
      <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
      PRM Brilliant
    </h1>
  </div>


  <!-- Keep all page content within the page-content inset div! -->
  <div class="page-content inset">
    <h3>Users administration</h3>
    <div class="row">
      <?php var_dump($users);?>

    </div>
    <p id="back-top">
      <a href="#top"><span></span><i style="font-size: 30px;" class="fa fa-arrow-circle-up"></i><span></span></a>
    </p>

  </div>
</div>
</div>

<?php include('footer.php');?>
