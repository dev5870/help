<html>
<head>
    <meta charset="utf-8"/>
    <title>Отправка данных из форм на сайте в Google Sheets / Гугл таблицу</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
<h3>Таблица в которую уходят данные из формы:</h3>
<a href="https://docs.google.com/spreadsheets/d/13G_qQHbtOv_p5Awpx8AdTQHaxm0wCAIT7Ohzk5VLDJ4/edit?usp=sharing" target="_blank">Google таблица</a><br>
<form id="foo" method="post" _lpchecked="1">
    <p>
        <label for="name">Имя:</label>
        <input id="name" name="Имя" type="text" placeholder="Джеймс Бонд" value="">
    </p>
    <p>
        <label for="comment">Телефон:</label>
        <input id="phone" name="Телефон" type="tel" placeholder="+89111223344" value="">
    </p>
    <p id="result"></p>
    <input type="submit" value="Отправить">
</form>

<script data-cfasync="false" type="text/javascript">
    jQuery(document).ready(function ($) {
        var request;
        $("#foo").submit(function (event) {
            if (request) {
                request.abort();
            }
            var $form = $(this);
            var $inputs = $form.find("input, select, button, textarea");
            var serializedData = $form.serialize();
            $inputs.prop("disabled", true);
            $('#result').text('Отправка данных...');
            request = $.ajax({
                // указываем ссылку на ваш Google apps script
                url: "https://script.google.com/macros/s/AKfycbzuQ2TQjgUYr3fpMpJqOlY79lBFyuRbHaPvAvIlk_e1KXex3E4/exec",
                type: "post",
                data: serializedData
            });
            request.done(function (response, textStatus, jqXHR) {
                $('#result').html('Форма отправлена. <a href="https://docs.google.com/spreadsheets/d/13G_qQHbtOv_p5Awpx8AdTQHaxm0wCAIT7Ohzk5VLDJ4/edit?usp=sharing" target="_blank">Посмотреть таблицу</a>');
                console.log("ответ:");
                console.log(response);
            });
            request.fail(function (jqXHR, textStatus, errorThrown) {
                console.error(
                    "Ошибка: " +
                    textStatus, errorThrown
                );
            });
            request.always(function () {
                $inputs.prop("disabled", false);
            });
            event.preventDefault();
        });
    });
</script>


</body>
</html>