$(function() {

    $("li a").click(function(e) {
        $('li').removeClass('active');
        $(this).parent().addClass('active');
    });




            $("#back-top").hide();


                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('#back-top').fadeIn();
                    } else {
                        $('#back-top').fadeOut();
                    }
                });

                $('#back-top a').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });

$('.closebox').click(function(e){
    $(this).parent().fadeOut( "slow", function() {
        // Animation complete.
    });
});


//NOTIFICATION

    var visited = localStorage.getItem('visited');
    if (!visited) {
        $('#jGrowl').show();
        localStorage.setItem('visited', true);
    }
    else {
        $('#jGrowl').hide();
    }
    $("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });

});