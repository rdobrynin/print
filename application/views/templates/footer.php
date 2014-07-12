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

  });
</script>
</body>

</html>
