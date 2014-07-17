
<!-- JavaScript -->
<script src="<?php print(base_url());?>js/jquery-1.10.2.js"></script>
<script src="<?php print(base_url());?>js/bootstrap.js"></script>
<script src="<?php print(base_url());?>js/script.js"></script>
<script src="<?php print(base_url());?>js/my_script.js"></script>

<!-- Custom JavaScript for the Menu Toggle -->
<script>
    $(function () {
        $("#email_address").blur(function () {
            var email_address = $(this).val();
            var postData = {
                "email_address": email_address
            };
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('ajax/check_email') ?>",
                data: postData,
                dataType: 'json',
                success: function (data, status) {
                    if (data.avatar !== null) {
                        $('#avatar-login').hide();
                        $('#avatar-login-original').show();
                        $("#avatar-login-original").html('<img src="uploads/avatar/'+data.avatar+'" height="100">');
                    }
                    else if (data.avatar == null) {
                        $('#avatar-login').show();
                        $('#avatar-login-original').hide();
                    }
                }
            });
        });

    });
</script>
</body>

</html>