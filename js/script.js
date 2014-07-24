$(function() {

    $("li a").click(function(e) {
        $('li').removeClass('active');
        $(this).parent().addClass('active');
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#back-to-top').tooltip('show');


$('.closebox').click(function(e){
    $(this).parent().fadeOut( "slow", function() {
        // Animation complete.
    });
});

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

//    USERS
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
            $filters = $panel.find('.filters input'),
            $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
            inputContent = $input.val().toLowerCase(),
            $panel = $input.parents('.filterable'),
            column = $panel.find('.filters th').index($input.parents('th')),
            $table = $panel.find('.table'),
            $rows = $table.find('tbody tr');

        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();

        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });

    $('.test').click(function () {
        pathArray = window.location.href.split( '/' );
        protocol = pathArray[0];
        name = pathArray[3];
        host = pathArray[2];
        url = protocol+'//'+host+'/'+name;
        window.location.href = url+'/delete_client/?cid=57';
//alert(url+'?action=delete_client&cid=57');
//        window.location.href = url;


        var destroydiskpid = false;
        var vmpid = false;
        $('.destroy_disk_href').click(function(){
            destroydiskpid = $(this).data('destroydiskpid');
            vmpid = $(this).data('vmpid');
        });
        $('#destroy_disk_btn').click(function(){
            if(destroydiskpid != false){
                $(this).attr("disabled","disabled");
//                window.location.href = url+'?action=delete_client&cid=57';
            }
        });

    });
});