<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Модальное окно на чистом CSS</title>
    <style>
        body {

            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 16px
        font-weight: 400;
            line-height: 1.5;
            color: #292b2c;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        /* свойства модального окна по умолчанию */
        .modal {
            position: fixed; /* фиксированное положение */
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5); /* цвет фона */
            z-index: 1050;
            opacity: 0; /* по умолчанию модальное окно прозрачно */
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in; /* анимация перехода */
            pointer-events: none; /* элемент невидим для событий мыши */
        }

        /* при отображении модального окно */
        .modal:target {
            opacity: 1;
            pointer-events: auto;
            overflow-y: auto;
        }

        /* ширина модального окна и его отступы от экрана */
        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 30px auto;
            }
        }

        /* свойства для блока, содержащего контент модального окна */
        .modal-content {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0;
        }

        @media (min-width: 768px) {
            .modal-content {
                -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
                box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            }
        }

        /* свойства для заголовка модального окна */
        .modal-header {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #eceeef;
        }

        .modal-title {
            margin-top: 0;
            margin-bottom: 0;
            line-height: 1.5;
            font-size: 1.25rem;
            font-weight: 500;
        }

        /* свойства для кнопки "Закрыть" */
        .close {
            float: right;
            font-family: sans-serif;
            font-size: 24px;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
            text-decoration: none;
        }

        /* свойства для кнопки "Закрыть" при нахождении её в фокусе или наведении */
        .close:focus, .close:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: .75;
        }

        /* свойства для блока, содержащего основное содержимое окна */
        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 15px;
            overflow: auto;
        }
    </style>

</head>
<body>

<h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">Модальное окно на чистом CSS</h1>
<div class="container">
    <div style="text-align: center;">
        <a href="#openModal">Открыть модальное окно</a>
    </div>
    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Название</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    Содержимое модального окна...
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
        console.log(scrollbar);
        document.querySelector('[href="#openModal"]').addEventListener('click', function () {
            document.body.style.overflow = 'hidden';
            document.querySelector('#openModal').style.marginLeft = scrollbar;
        });
        document.querySelector('[href="#close"]').addEventListener('click', function () {
            document.body.style.overflow = 'visible';
            document.querySelector('#openModal').style.marginLeft = '0px';
        });
    });
</script>

</body>
</html>

