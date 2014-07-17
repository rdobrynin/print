
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/jquery.bootstrap.wizard.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/ajaxfileupload.js"></script>
<script src="js/script.js"></script>

<!-- Custom JavaScript for the Menu Toggle -->
<script>
  $(function () {
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

      $('.panel-google-plus > .panel-footer > .input-placeholder, .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > button[type="reset"]').on('click', function(event) {
          var $panel = $(this).closest('.panel-google-plus');
          $comment = $panel.find('.panel-google-plus-comment');

          $comment.find('.btn:first-child').addClass('disabled');
          $comment.find('textarea').val('');

          $panel.toggleClass('panel-google-plus-show-comment');

          if ($panel.hasClass('panel-google-plus-show-comment')) {
              $comment.find('textarea').focus();
          }
      });
      $('.panel-google-plus-comment > .panel-google-plus-textarea > textarea').on('keyup', function(event) {
          var $comment = $(this).closest('.panel-google-plus-comment');

          $comment.find('button[type="submit"]').addClass('disabled');
          if ($(this).val().length >= 1) {
              $comment.find('button[type="submit"]').removeClass('disabled');
          }
      });
  });
</script>
</body>

</html>
