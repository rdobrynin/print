<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<!--<div class="bench">test: --><?php //echo $this->benchmark->elapsed_time();?><!--&nbsp;sec</div>-->
<div class="time-wrapper">
    <div class="timer" style="width: auto;">
        <i class="fa fa-clock-o pull-left" id="clock-bottom"></i>&nbsp;
        <span id="task-timer">00:00</span>
        <button class="btn btn-default btn-md" id="play-timer" style="padding: 3px 12px; float: left;">Play</button>
        <span id="task-timer-pause"><a href="#"><i class="fa fa-pause"></i></a></span>
        <span id="task-timer-stop"><a href="#"><i class="fa fa-stop"></i></a></span>

    </div>
</div>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/jquery.bootstrap.wizard.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/ajaxfileupload.js"></script>
<script src="js/script.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-confirmation.js"></script>
<script src="js/jquery.validate.min.js"></script>
<?php include('modals/modal_view.php');?>
<?php include('modals/modal_task.php');?>
<?php include('timer.php');?>
<!-- Custom JavaScript for the Menu Toggle -->
<script>
        $('.selectpicker').selectpicker({
            style: 'btn-special',
            size: 14
        });
  $(function () {



/**
 * INVITATION AJAX
 *
 **/

      $("#invite-ajax-btn").click(function () {
          var form_data = {
              email: $('#email_invite').val(),
              first_name: $('#first_name_invite').val(),
              last_name: $('#last_name_invite').val(),
              role: $('#role_invite').val(),
              user_id: $('#user_invite_id').val()

          };
          $.ajax({
              url: "<?php echo site_url('ajax/invitation'); ?>",
              type: 'POST',
              data: form_data,
              dataType: 'json',
              success: function (msg) {
                  if (msg.email == false) {
                      $('#check_email').css('display', 'block');
                      $('#check_email').html('<i class="fa fa-exclamation-circle"></i>&nbsp;This email is already registered');
                  }
                  else {
                      $('#check_email').css('display', 'none');
                  }

                  if(msg.empty == false) {
                      $('#check_empty').css('display', 'block');
                  }
                  if(msg.empty == true) {
                      $('#check_empty').css('display', 'none');
                  }
                  if(msg.check_email == false) {
                      $('#check_email_f').css('display', 'block');
                      $('#check_email_f').html('<i class="fa fa-exclamation-circle"></i>&nbsp;email address is invalid');
                  }
                  else {
                      $('#check_email_f').css('display', 'none');
                  }

                  if(msg.send == true) {
                      $('#send_mail').css('display', 'block');
                      setInterval(function() {
                          $('#invite').modal('hide');
                      }, 2000);
                  }


              }
          });
      });


      /**
       *  Upload avatar
      **/

      $('#upload_file').submit(function() {
          $.ajaxFileUpload({
              url             :"<?php print(base_url());?>ajax/do_upload",
              secureuri       :false,
              fileElementId   :'userfile',
              dataType        : 'json',
              data            : {
              'user_id'             : $('#user_id').val()
              },
              success : function (data, status)
              {
                  if(data.status != 'error') {
//                      $('#files').html('<p class="lead">Avatar successfully uploaded...</p>');
                      $('#avatar-true').hide();
                      $('#avatar-true-ajax').show();
                      $('.avatar-img').hide();
                      $('.avatar-img-ajax').show();
                      $('.avatar-img-ajax').html("<a href='<?php print base_url(); ?>profile'><img src='<?php print base_url(); ?>uploads/avatar/"+data.new_avatar+"' alt='Smiley face' height='45'></a>");
                      $('#ajax-temp').html("<img src='<?php print base_url(); ?>"+'uploads/avatar/'+data.new_avatar+"' alt='Smiley face' height='100'>");
                  }
                  $('#files').show();
                  $('#files').empty();
                  $('#files').html('<p class="lead">'+data.msg+'</p>');
                  $('#files').delay(1500).fadeOut();
//                  $('.show-info').show();
//                  $('.show-info').children( ".show-info-content").html(data.msg);
//                  $('.show-info').delay(2500).fadeOut();
              }
          });
          return false;
      });

    $(".help-button").click((function() {
      var i = 0;
      return function() {
        $('.help-block').animate({
          height: (++i % 2) ? 490 :10,
            background:'rgb(255, 144, 11)',opacity:0.9
        }, 200);
          $('.help-content').slideToggle('fast');
      }
    })());

      /**
       * AJAX online/offline status
       */

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
//           ONLINE
                if(entry['status']=='1') {
//                  var audio = $('<audio />', {
//                    autoPlay : 'autoplay',
//                    controls : 'controls'
//                  });
//                  addSource(audio, 'sound/online.ogg');
//                  addSource(audio, 'sound/online.mp3');
//                    audio.appendTo('.note-sound');
//                  function addSource(elem, path) {
//                    $('<source />').attr('src', path).appendTo(elem);
//                  }
            $('.show-info-online').show();
            $('.show-info-online').children( ".show-info-content-online").html('<span class="label label-xs label-success label-round"></span>'+name+' is online');
            $('.show-info-online').delay(2500).fadeOut();
                }
                else if(entry['status']=='0') {
//                  var audio = $('<audio />', {
//                    autoPlay : 'autoplay',
//                    controls : 'controls'
//                  });
//                  addSource(audio, 'sound/online.ogg');
//                  addSource(audio, 'sound/online.mp3');
//                  audio.appendTo('.note-sound');
//                  function addSource(elem, path) {
//                    $('<source />').attr('src', path).appendTo(elem);
//                  }
                  $('.show-info-online').show();
                  $('.show-info-online').children( ".show-info-content-online").html('<span class="label label-xs label-primary label-round"></span>'+name+' is offline');
                  $('.show-info-online').delay(2500).fadeOut();
                }
              }
            });
          }
        });
      }, 5900);

//      dashboard

  });
</script>

</body>

</html>
