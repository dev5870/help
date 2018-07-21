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
        addStyle();
    }
    script.src = 'js/jquery-3.2.1.min.js';
    head.appendChild(script);
}

if (window.jQuery) {
    console.log('jquery подключен');
    addStyle();
}

function addStyle() {
    console.log('подключаем стили');
    var head = document.getElementsByTagName('head')[0];
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.onload = function() {
        addScript();
    }
    link.href = 'css/style.css';
    head.appendChild(link);
}

function addScript() {
    var body = document.getElementsByTagName('body')[0];
    var div = document.createElement('div');
    div.id = 'link-return-up';
    body.appendChild(div);

    var divUp = document.getElementById('link-return-up');
    divUp.innerHTML = '<a href="#" id="return-to-top" ><span class="return-to-top">Наверх</span></a>';

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