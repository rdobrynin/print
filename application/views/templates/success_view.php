<div class="errors alert alert-danger alert-dismissible" role="alert"><?php echo validation_errors();?></div>
<?php include('navtop_view.php');?>
<?php include('sidebar_view.php');?>
<!-- Page content -->
<div id="page-content-wrapper">
  <div class="page-content inset">
    <div class="row">


      <?php var_dump($response);?>
    </div>
<p id="back-top">
      <a href="#top"><span></span><i style="font-size: 30px;" class="fa fa-arrow-circle-up"></i><span></span></a>
    </p>
  </div>
</div>
</div>
<?php include('footer.php');?>
<script>
  $(function () {

  });
</script>