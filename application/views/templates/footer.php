<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/jquery.bootstrap.wizard.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular-route.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular-resource.min.js"></script>

<!-- Custom JavaScript for the Menu Toggle -->
<script>
  $(function () {
    $(".help-button").click((function() {
      var i = 0;
      return function() {
        $('.help-block').animate({
          height: (++i % 2) ? 414 :10
        }, 200);
      }
    })());


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
                  var audio = $('<audio />', {
                    autoPlay : 'autoplay',
                    controls : 'controls'
                  });
                  // Call our addSource function, and pass in the audio element
                  // and the path(s) to your audio.
                  addSource(audio, 'sound/online.ogg');
                  addSource(audio, 'sound/online.mp3');

                  // When some event is fired...
                    // Add the audio + source elements to the page.
                    audio.appendTo('.note-sound');
                    // Fadeout the anchor tag to keep the user from clicking it again.
//                    $(this).fadeOut('slow');
                  // Adds a source element, and appends it to the audio element, represented
                  // by elem.
                  function addSource(elem, path) {
                    $('<source />').attr('src', path).appendTo(elem);
                  }
            $('.show-info-online').show();
            $('.show-info-online').children( ".show-info-content-online").html('<span class="label label-xs label-success label-round"></span>'+name+' is online');
            $('.show-info-online').delay(2500).fadeOut();
                }
                else if(entry['status']=='0') {
                  var audio = $('<audio />', {
                    autoPlay : 'autoplay',
                    controls : 'controls'
                  });
                  // Call our addSource function, and pass in the audio element
                  // and the path(s) to your audio.
                  addSource(audio, 'sound/online.ogg');
                  addSource(audio, 'sound/online.mp3');

                  // When some event is fired...
                  // Add the audio + source elements to the page.
                  audio.appendTo('.note-sound');
                  // Fadeout the anchor tag to keep the user from clicking it again.
//                    $(this).fadeOut('slow');
                  // Adds a source element, and appends it to the audio element, represented
                  // by elem.
                  function addSource(elem, path) {
                    $('<source />').attr('src', path).appendTo(elem);
                  }
                  $('.show-info-online').show();
                  $('.show-info-online').children( ".show-info-content-online").html('<span class="label label-xs label-primary label-round"></span>'+name+' is offline');
                  $('.show-info-online').delay(2500).fadeOut();
                }
              }
            });
          }
        });
      }, 5900);


  });
</script>
</body>

</html>
