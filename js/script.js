/*!
 * Bootstrap v3.1.0 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

if (typeof jQuery === 'undefined') { throw new Error('Bootstrap requires jQuery') }

/* ========================================================================
 * Bootstrap: transition.js v3.1.0
 * http://getbootstrap.com/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


$(function () {

    $( "#email_address" ).blur(function() {
        // Сначала присваеваем переменным значения из наших полей ввода
        // Доступ к полям по их ID
        var user_login = $("#email_address").val();
        // Это функция запроса ajax, в переменной html
        // мы сможем получить обратный текст после обработки
        var html = $.ajax({
            type: "POST",
            // Тут в качестве параметра url мы указываем на
            // controller который будет обрабатывать наши данные
            url: "ajax/check_email",
            data: ({
                // Перечесляем передаваемые переменные
                // Сначала идёт название которое получит controller
                // через метод post, следом наша переменная с данными
                'email_address' : user_login
            }),
            dataType: "html",
            async: false
        }).responseText;

        // Здесь мы просто перезаписываем div с id="ajax_login" данными
        // которые вернул наш controller
        $('#check_login').show();
        $('.errors').hide();
        $("#check_login").empty().append(html);
    });


});
