<?php include('head.php'); ?>
<div class="container">
  <div id="page-content-wrapper">
    <div class="page-content inset">
      <div class="row">
        <h3>Your file was successfully uploaded!</h3>

        <ul>
          <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item;?>: <?php echo $value;?></li>
          <?php endforeach; ?>
        </ul>

        <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
