<?php include('head.php'); ?>
<div class="container">
  <div id="page-content-wrapper">
    <div class="page-content inset">
      <div class="row">

      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

<script>
  $(function () {

//    setInterval(function() {
    $.ajax({
      url: "<?php echo site_url('ajax/check_online'); ?>",
      type: 'GET',
      dataType: 'json',
      success: function (msg) {
        console.log(msg.status);
      }
    });
//    }, 5000);
  });
</script>