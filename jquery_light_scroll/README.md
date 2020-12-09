Для работы скрипта необходимо подключить библиотеку:
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

1500 - это скорость прокрутки

Принцип работы:
1. Отслеживаем событие клик по ссылке, которая содержит якорь.
2. Переходим к елементу страницы, который содержит id = якорю в ссылке.  

$("a[href^='#']").click(function(){
  var _href = $(this).attr("href");
  $("html, body").animate({scrollTop: $(_href).offset().top},1500);
  return false;
});
