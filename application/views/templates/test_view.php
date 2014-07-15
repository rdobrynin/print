<?php include('head.php'); ?>
<div class="container">
  <div id="page-content-wrapper">
    <div class="page-content inset">


        <div id="wrapper">

            <h1>Upload File</h1>
            <form method="post" action="" id="upload_file">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="" />

                <label for="userfile">File</label>
                <input type="file" name="userfile" id="userfile" size="20" />
<input type="hidden" value="<?php print($user[0]['id']);?>" name="user_id" id="user_id">
                <br />
                <input type="submit" class="btn btn-info" name="submit" id="submit" />
            </form>
            <h2>Files</h2>
            <div id="files"></div>
        </div>

        </div>
  </div>
</div>
<?php include('footer.php'); ?>
