if (!window.jQuery) {
    console.log('jquery не подключен');
    addJquery();
}

function addJquery() {
    console.log('подключаем jquery');
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onload = function() {
        star();
    }
    script.src = 'js/jquery-3.2.1.min.js';
    head.appendChild(script);
}

if (window.jQuery) {
    console.log('jquery подключен');
    star();
}

function star() {
    console.log('стартуем основной скрипт');
    jQuery("document").ready(function ($) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 236) {
                $("#return-to-top").show();
            } else {
                $("#return-to-top").hide();
            }
        });
    });
}