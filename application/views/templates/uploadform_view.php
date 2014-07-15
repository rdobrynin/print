<?php include('head.php'); ?>
<div class="container">
  <div id="page-content-wrapper">
    <div class="page-content inset">
      <div class="row">
        <?php echo $error;?>

        <?php echo form_open_multipart('upload/do_upload');?>

        <input type="file" name="userfile" size="20" />

        <br /><br />

        <input type="submit" value="upload" />

        </form>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
