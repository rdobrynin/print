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
    setInterval(function() {
      current_time = $.now();
    $.ajax({
      url: "<?php echo site_url('ajax/check_online'); ?>",
      type: 'GET',
      dataType: 'json',
      success: function (msg) {
       msg.status.forEach(function(entry) {
         var name = entry['first_name'] + ' ' + entry['last_name'];
         var id = entry['id'];
         var time = entry['status_time'];
         var status = entry['status'];
         if(current_time <(entry['status_time']+100)) {
           console.log(entry);
         }



        });
      }
    });
    }, 5900);
  });
</script>